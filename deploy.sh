#!/bin/bash

# Furniture App Deployment Script for cPanel
# Usage: ./deploy.sh [environment]
# Environment: production, staging (default: production)

set -e

ENVIRONMENT=${1:-production}
PROJECT_NAME="furniture-app"
DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/tmp/backup_${PROJECT_NAME}_${DATE}"

echo "🚀 Starting deployment for ${PROJECT_NAME} - Environment: ${ENVIRONMENT}"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if we're in the project directory
if [ ! -f "artisan" ]; then
    print_error "This script must be run from the Laravel project root directory"
    exit 1
fi

# Check if .env file exists
if [ ! -f ".env" ]; then
    print_warning ".env file not found. Copying from .env.example"
    cp .env.example .env
    print_warning "Please update .env file with your configuration before proceeding"
    exit 1
fi

# Create backup directory
print_status "Creating backup directory: ${BACKUP_DIR}"
mkdir -p "${BACKUP_DIR}"

# Backup current deployment (if exists)
if [ -d "storage" ]; then
    print_status "Backing up current deployment..."
    cp -r storage/ "${BACKUP_DIR}/" 2>/dev/null || true
    cp .env "${BACKUP_DIR}/" 2>/dev/null || true
fi

# Install/Update Composer dependencies
print_status "Installing Composer dependencies..."
if [ "${ENVIRONMENT}" = "production" ]; then
    composer install --no-dev --optimize-autoloader --no-interaction
else
    composer install --optimize-autoloader --no-interaction
fi

# Set proper permissions
print_status "Setting proper permissions..."
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chmod 755 artisan

# Generate application key if not set
if ! grep -q "APP_KEY=base64:" .env; then
    print_status "Generating application key..."
    php artisan key:generate --no-interaction
fi

# Clear all caches
print_status "Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Run database migrations
if [ "${ENVIRONMENT}" = "production" ]; then
    read -p "Run database migrations? (y/N): " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        print_status "Running database migrations..."
        php artisan migrate --force
    fi
else
    print_status "Running database migrations..."
    php artisan migrate
fi

# Run database seeders
if [ "${ENVIRONMENT}" != "production" ]; then
    read -p "Run database seeders? (y/N): " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        print_status "Running database seeders..."
        php artisan db:seed
    fi
fi

# Create storage link
print_status "Creating storage link..."
php artisan storage:link

# Cache configurations for better performance
if [ "${ENVIRONMENT}" = "production" ]; then
    print_status "Caching configurations..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

# Install and build frontend assets (if needed)
if [ -f "package.json" ]; then
    if command -v npm &> /dev/null; then
        print_status "Installing NPM dependencies..."
        npm ci
        
        if [ "${ENVIRONMENT}" = "production" ]; then
            print_status "Building production assets..."
            npm run build
        else
            print_status "Building development assets..."
            npm run dev
        fi
    else
        print_warning "NPM not found. Skipping frontend asset build."
    fi
fi

# Final permission check
print_status "Final permission setup..."
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chmod 644 .env

# Security check
print_status "Running security checks..."
if [ -f ".env" ]; then
    if grep -q "APP_DEBUG=true" .env && [ "${ENVIRONMENT}" = "production" ]; then
        print_warning "APP_DEBUG is set to true in production environment!"
    fi
    
    if grep -q "APP_KEY=$" .env; then
        print_error "APP_KEY is not set in .env file!"
        exit 1
    fi
fi

# Check if storage and bootstrap/cache directories are writable
if [ ! -w "storage" ] || [ ! -w "bootstrap/cache" ]; then
    print_error "Storage or bootstrap/cache directories are not writable!"
    exit 1
fi

print_status "✅ Deployment completed successfully!"
print_status "Backup created at: ${BACKUP_DIR}"

# Display post-deployment information
echo ""
echo "📋 Post-deployment checklist:"
echo "   ✓ Update .env file with production settings"
echo "   ✓ Configure web server document root to 'public' folder"
echo "   ✓ Set up SSL certificate"
echo "   ✓ Configure cron jobs if needed"
echo "   ✓ Test application functionality"
echo "   ✓ Monitor error logs"

# Display important URLs and commands
echo ""
echo "🔧 Useful commands:"
echo "   View logs: tail -f storage/logs/laravel.log"
echo "   Clear cache: php artisan cache:clear"
echo "   Maintenance mode: php artisan down/up"
echo "   Restart queues: php artisan queue:restart"

echo ""
print_status "🎉 Deployment completed! Your Furniture App is ready to use."
