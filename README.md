# SIPERU

Proyek UAS Pemrograman WEB

## How to use

### Before in system

1. Tambahkan data secara manual melalui database (phpmyadmin atau yg lainnya) pada table `role` `id=1 role=admin` dan `id=2 role=mahasiswa`
2. Run migration file dengan perintah `php artisan migrate:fresh`
3. Run laravel project dengan perintah `php artisan serve`

Opsional: Import file `siperu.sql` ke dalam database jika tidak ingin menjalankan perintah `php artisan migrate:fresh`

### Manajemen user berdasarkan role (admin dan mahasiswa)

1. Secara default user yang mendaftar akan mendapatkan role Mahasiswa, untuk menambahkan sebagai admin ubah secara manual `role_id` pada database users menjadi 2

### In system

1. Daftar dengan menekan tombol `register` pada website
2. Untuk menambahkan ruangan masuk sebagai `admin`
