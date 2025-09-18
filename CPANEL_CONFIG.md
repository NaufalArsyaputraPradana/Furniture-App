# cPanel Configuration for Laravel Furniture App

## File Structure for cPanel Hosting

```
public_html/                 (Document Root)
├── .htaccess               (Laravel rewrite rules)
├── index.php               (Laravel entry point)
├── favicon.ico
├── robots.txt
├── storage/                (Symlink to ../storage/app/public)
└── build/                  (Compiled assets)

furniture-app/              (Project files - outside public_html)
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── artisan
├── composer.json
└── composer.lock
```

## Required PHP Extensions

Ensure these PHP extensions are enabled in cPanel:
- BCMath
- Ctype
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- PDO_MySQL (or PDO_PostgreSQL)
- Tokenizer
- XML

## PHP Configuration (php.ini or .htaccess)

```ini
; Memory limit
memory_limit = 512M

; Maximum execution time
max_execution_time = 300

; File upload limits
upload_max_filesize = 64M
post_max_size = 64M
max_file_uploads = 20

; Error reporting (disable in production)
display_errors = Off
log_errors = On
error_log = /path/to/your/error.log
```

## Database Configuration

### MySQL Setup
```sql
-- Create database (usually done via cPanel)
CREATE DATABASE furniture_app;

-- Create user and grant privileges
CREATE USER 'furniture_user'@'localhost' IDENTIFIED BY 'secure_password';
GRANT ALL PRIVILEGES ON furniture_app.* TO 'furniture_user'@'localhost';
FLUSH PRIVILEGES;
```

### Environment Variables (.env)
```env
APP_NAME="Furniture App"
APP_ENV=production
APP_KEY=base64:your-generated-key-here
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=furniture_app
DB_USERNAME=furniture_user
DB_PASSWORD=secure_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=public
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

## Cron Jobs Setup

Add these cron jobs in cPanel:

```bash
# Laravel Scheduler (runs every minute)
* * * * * cd /path/to/your/project && php artisan schedule:run >> /dev/null 2>&1

# Clear expired sessions (daily at 2 AM)
0 2 * * * cd /path/to/your/project && php artisan session:gc

# Backup database (daily at 3 AM)
0 3 * * * cd /path/to/your/project && php artisan backup:run --only-db

# Clear logs older than 30 days (weekly)
0 0 * * 0 find /path/to/your/project/storage/logs -name "*.log" -mtime +30 -delete
```

## SSL Certificate Setup

1. **Free SSL via Let's Encrypt (if available):**
   - Enable in cPanel SSL/TLS section
   - Or use Cloudflare SSL

2. **Manual SSL Certificate:**
   - Upload certificate files in cPanel
   - Update APP_URL to https://

3. **Force HTTPS in .htaccess:**
```apache
# Force HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

## Performance Optimization

### 1. Enable OPcache
Add to .htaccess or php.ini:
```ini
opcache.enable=1
opcache.memory_consumption=128
opcache.interned_strings_buffer=8
opcache.max_accelerated_files=4000
opcache.revalidate_freq=60
opcache.fast_shutdown=1
```

### 2. Enable Gzip Compression
Already included in .htaccess

### 3. Browser Caching
Already included in .htaccess

## Security Hardening

### 1. Hide Laravel from Server Headers
Add to .htaccess:
```apache
# Hide server information
ServerTokens Prod
Header unset Server
Header unset X-Powered-By
```

### 2. Secure Directories
Create .htaccess in sensitive directories:
```apache
# storage/.htaccess
Order deny,allow
Deny from all

# bootstrap/cache/.htaccess
Order deny,allow
Deny from all
```

### 3. IP Whitelisting for Admin (optional)
```apache
# Allow only specific IPs to access admin routes
<If "%{REQUEST_URI} =~ m#^/admin#">
    Require ip 192.168.1.100
    Require ip 203.0.113.50
</If>
```

## Backup Strategy

### 1. Database Backup Script
```bash
#!/bin/bash
DB_NAME="furniture_app"
DB_USER="furniture_user"
DB_PASS="secure_password"
BACKUP_DIR="/path/to/backups"
DATE=$(date +%Y%m%d_%H%M%S)

mysqldump -u$DB_USER -p$DB_PASS $DB_NAME > $BACKUP_DIR/db_backup_$DATE.sql
find $BACKUP_DIR -name "db_backup_*.sql" -mtime +7 -delete
```

### 2. File Backup
```bash
#!/bin/bash
PROJECT_DIR="/path/to/your/project"
BACKUP_DIR="/path/to/backups"
DATE=$(date +%Y%m%d_%H%M%S)

tar -czf $BACKUP_DIR/files_backup_$DATE.tar.gz \
    --exclude="$PROJECT_DIR/storage/logs/*" \
    --exclude="$PROJECT_DIR/storage/framework/cache/*" \
    --exclude="$PROJECT_DIR/storage/framework/sessions/*" \
    --exclude="$PROJECT_DIR/storage/framework/views/*" \
    $PROJECT_DIR

find $BACKUP_DIR -name "files_backup_*.tar.gz" -mtime +7 -delete
```

## Monitoring and Logging

### 1. Error Monitoring
- Set up error logging in Laravel
- Monitor storage/logs/laravel.log
- Use external services like Sentry or Bugsnag

### 2. Performance Monitoring
- Monitor server resources via cPanel
- Use tools like New Relic or DataDog
- Monitor database performance

### 3. Uptime Monitoring
- Use services like UptimeRobot or Pingdom
- Set up alerts for downtime

## Troubleshooting Common Issues

### 1. 500 Internal Server Error
- Check error logs in cPanel
- Verify file permissions (755 for directories, 644 for files)
- Check PHP version compatibility
- Verify .htaccess rules

### 2. Database Connection Error
- Verify database credentials in .env
- Check if database server is running
- Verify user permissions

### 3. Storage Link Issues
```bash
# Remove broken symlink and recreate
rm -f public/storage
php artisan storage:link
```

### 4. Permission Issues
```bash
# Fix permissions
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

## Maintenance Commands

```bash
# Clear all caches
php artisan optimize:clear

# Rebuild caches
php artisan optimize

# Update application
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check application status
php artisan about
```
