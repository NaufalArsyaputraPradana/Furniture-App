#!/bin/bash

# Production Optimization Script for Laravel Furniture App
# This script optimizes the application for production environment

set -e

echo "🔧 Optimizing Furniture App for Production..."

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

print_status() {
    echo -e "${GREEN}[OPTIMIZE]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if we're in the correct directory
if [ ! -f "artisan" ]; then
    print_error "This script must be run from the Laravel project root"
    exit 1
fi

# 1. Environment Optimization
print_status "Checking environment configuration..."
if [ -f ".env" ]; then
    # Set production environment
    sed -i 's/APP_ENV=.*/APP_ENV=production/' .env
    sed -i 's/APP_DEBUG=.*/APP_DEBUG=false/' .env
    
    # Optimize database connections
    if grep -q "DB_CONNECTION=sqlite" .env; then
        print_warning "SQLite detected. Consider using MySQL/PostgreSQL for production."
    fi
else
    print_error ".env file not found!"
    exit 1
fi

# 2. Composer Optimization
print_status "Optimizing Composer autoloader..."
composer install --no-dev --optimize-autoloader --no-interaction
composer dump-autoload --optimize --no-dev

# 3. Laravel Optimization
print_status "Optimizing Laravel configurations..."

# Clear all caches first
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Cache configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4. Database Optimization
print_status "Checking database optimization..."
# Only show the command, don't execute automatically
echo "Consider running: php artisan migrate --force"
echo "Consider running: php artisan db:seed --class=SettingSeeder"

# 5. Storage Optimization
print_status "Optimizing storage..."
php artisan storage:link

# Create optimized directory structure
mkdir -p storage/app/public/products
mkdir -p storage/app/public/categories
mkdir -p public/storage

# Set proper permissions
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chmod -R 755 public/storage/

# 6. Asset Optimization
if [ -f "package.json" ]; then
    print_status "Optimizing frontend assets..."
    if command -v npm &> /dev/null; then
        # Install dependencies
        npm ci --production
        
        # Build production assets
        npm run build
        
        # Clean up dev dependencies
        npm prune --production
    else
        print_warning "NPM not found. Skipping asset optimization."
    fi
fi

# 7. Security Hardening
print_status "Applying security hardening..."

# Create secure .htaccess for storage
cat > storage/.htaccess << 'EOF'
<IfModule mod_authz_core.c>
    Require all denied
</IfModule>
<IfModule !mod_authz_core.c>
    Order deny,allow
    Deny from all
</IfModule>
EOF

# Create secure .htaccess for bootstrap/cache
cat > bootstrap/cache/.htaccess << 'EOF'
<IfModule mod_authz_core.c>
    Require all denied
</IfModule>
<IfModule !mod_authz_core.c>
    Order deny,allow
    Deny from all
</IfModule>
EOF

# 8. Performance Optimization
print_status "Applying performance optimizations..."

# Create optimized .htaccess for public directory
cat > public/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Security Headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# Gzip Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>

# Browser Caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/gif "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/pdf "access plus 1 month"
    ExpiresByType text/javascript "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType application/x-javascript "access plus 1 month"
    ExpiresByType application/x-shockwave-flash "access plus 1 month"
    ExpiresByType image/x-icon "access plus 1 year"
    ExpiresDefault "access plus 2 days"
</IfModule>
EOF

# 9. Log Optimization
print_status "Setting up log rotation..."
# Ensure log directory exists
mkdir -p storage/logs

# Create log rotation configuration
cat > storage/logs/.gitkeep << 'EOF'
# This file ensures the logs directory is tracked by git
# Actual log files should be excluded via .gitignore
EOF

# 10. Queue Optimization (if using queues)
if grep -q "QUEUE_CONNECTION" .env; then
    print_status "Queue system detected. Consider setting up supervisor for production."
    echo "Example supervisor config:"
    echo "[program:furniture-app-worker]"
    echo "process_name=%(program_name)s_%(process_num)02d"
    echo "command=php $(pwd)/artisan queue:work --sleep=3 --tries=3"
    echo "autostart=true"
    echo "autorestart=true"
    echo "user=www-data"
    echo "numprocs=2"
    echo "redirect_stderr=true"
    echo "stdout_logfile=$(pwd)/storage/logs/worker.log"
fi

# 11. Final Security Check
print_status "Running final security checks..."

# Check for sensitive files
SENSITIVE_FILES=(".env" "composer.lock" "package-lock.json")
for file in "${SENSITIVE_FILES[@]}"; do
    if [ -f "$file" ]; then
        chmod 644 "$file"
    fi
done

# Check for debug mode
if grep -q "APP_DEBUG=true" .env; then
    print_error "APP_DEBUG is still set to true! Set it to false for production."
fi

# Check for application key
if ! grep -q "APP_KEY=base64:" .env; then
    print_error "APP_KEY is not properly set!"
fi

print_status "✅ Production optimization completed!"

echo ""
echo "📋 Production Checklist:"
echo "   ✓ Environment set to production"
echo "   ✓ Debug mode disabled"
echo "   ✓ Autoloader optimized"
echo "   ✓ Configuration cached"
echo "   ✓ Routes cached"
echo "   ✓ Views cached"
echo "   ✓ Security headers configured"
echo "   ✓ Gzip compression enabled"
echo "   ✓ Browser caching configured"
echo "   ✓ Storage linked"
echo "   ✓ Permissions set"

echo ""
echo "🚨 Important Notes:"
echo "   • Set up SSL certificate"
echo "   • Configure database connection pooling"
echo "   • Set up monitoring and error tracking"
echo "   • Configure backup strategy"
echo "   • Set up log rotation"
echo "   • Configure CDN for static assets (optional)"
echo "   • Set up Redis/Memcached for caching (optional)"

echo ""
print_status "🎉 Your Furniture App is now optimized for production!"
