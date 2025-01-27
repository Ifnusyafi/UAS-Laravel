# Rumah Sakit Skena

## Deskripsi
Rumah Sakit Skena adalah sebuah aplikasi web sederhana yang dirancang untuk membantu pengelolaan data pasien dan menyediakan informasi statistik dalam bentuk grafik. Aplikasi ini dirancang untuk mempermudah admin dalam memantau dan mengelola data yang relevan.


## Instalasi
1. git clone
2. composer install
3. php artisan migrate
4. php artisan db:seed --class=UserSeeder
5. php artisan ser

```
Untuk Login Admin Page
Email = admin@gmail.com
Pass = admin
```

---

## Fitur Utama
1. **Login Admin**
   - Sistem login untuk memastikan hanya admin yang memiliki akses ke dashboard.
   
2. **Dashboard Admin**
   - Menampilkan grafik (chart) sebagai visualisasi statistik data.
   - Menampilkan tabel data pasien yang sudah terdaftar.
   
3. **Manajemen Data Pasien**
   - Data pasien ditampilkan dalam tabel untuk memudahkan pengelolaan dan pencarian informasi.

---

## Teknologi yang Digunakan
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP ( [Laravel Framework](https://laravel.com/) )
- **Database**: [sqlite](https://www.sqlite.org/)
- **Chart Library**: [Chart.js](https://www.chartjs.org/) untuk visualisasi data.

---
