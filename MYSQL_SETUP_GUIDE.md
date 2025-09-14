# Panduan Menjalankan MySQL di Laragon

## Masalah yang Terjadi
Website menunjukkan error **SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it** karena MySQL server belum berjalan.

## Solusi yang Telah Diterapkan
1. ✅ **Error Handling Middleware** - Website tetap bisa diakses meskipun database tidak tersedia
2. ✅ **Graceful Fallback** - Halaman menampilkan pesan yang informatif
3. ✅ **Custom Error Pages** - Tampilan error yang user-friendly

## Cara Menjalankan MySQL di Laragon

### Opsi 1: Menggunakan Laragon Control Panel (Disarankan)
1. Buka **Laragon Control Panel** dari `D:\laragon\laragon.exe`
2. Klik tombol **Start All** atau **Start MySQL** 
3. Tunggu hingga lampu indikator MySQL menjadi hijau
4. Refresh website di browser

### Opsi 2: Manual Start MySQL (Jika Laragon bermasalah)
1. Buka **Command Prompt as Administrator**
2. Jalankan perintah berikut:
```batch
cd "D:\laragon\bin\mysql\mysql-8.0.42-winx64\mysql-8.0.42-winx64\bin"
mysqld.exe --datadir="D:\laragon\data\mysql" --port=3306 --bind-address=127.0.0.1 --console
```
3. Biarkan window command prompt tetap terbuka
4. Refresh website di browser

### Opsi 3: Install MySQL sebagai Windows Service
1. Buka **Command Prompt as Administrator**
2. Jalankan:
```batch
cd "D:\laragon\bin\mysql\mysql-8.0.42-winx64\mysql-8.0.42-winx64\bin"
mysqld.exe --install "MySQL-Laragon"
net start "MySQL-Laragon"
```

## Verifikasi MySQL Berjalan
Jalankan perintah ini untuk memastikan MySQL aktif:
```powershell
netstat -an | Select-String ":3306"
```
Jika berhasil, akan muncul output seperti:
```
TCP    127.0.0.1:3306         0.0.0.0:0              LISTENING
```

## Test Koneksi Database
Setelah MySQL berjalan, test koneksi dengan:
```bash
php artisan migrate:status
```

## Fitur Error Handling yang Sudah Diterapkan
- ✅ **Database Connection Testing** di controller
- ✅ **Middleware Error Handling** untuk menangkap error database
- ✅ **Fallback Content** ketika database tidak tersedia  
- ✅ **User-Friendly Error Messages** dengan instruksi perbaikan
- ✅ **WhatsApp Contact Button** untuk bantuan admin
- ✅ **Reload Button** untuk mencoba koneksi lagi

## Struktur Error Handling
```
Request → Middleware (HandleDatabaseErrors) → Controller (try-catch) → View (conditional)
```

Dengan sistem ini, website tetap bisa diakses dan memberikan pengalaman yang baik untuk user meskipun database sedang bermasalah.
