langkah2 yang saya kerjakan selama UTS server ini :

1. Pertama, buatlah proyek Laravel 12 dengan menjalankan perintah `composer create-project laravel/laravel:^12 nama_proyek_kamu`, 

2. lalu masuk ke direktori proyek tersebut. Jika Anda ingin menggunakan Docker sejak awal, siapkan dua file penting di direktori root Laravel: `Dockerfile`, `docker-compose.yml. Dalam `Dockerfile`, gunakan image `php:8.3-fpm`, instalasi dependency dasar seperti `pdo_mysql`, `mbstring`, dan `gd`, lalu tambahkan Composer. Dalam `docker-compose.yml`, definisikan dua layanan: `app` (untuk PHP-FPM), dan `mysql` (untuk database), serta atur volume, port, dan environment sesuai kebutuhan. 

3. Selanjutnya, untuk menjalankan seluruh stack, gunakan perintah `docker compose up -d --build` jika Anda ingin membangun ulang image, atau cukup dengan `docker compose up -d` jika tidak ada perubahan pada `Dockerfile`. 

4. Setelah semua container berjalan, masuk ke container aplikasi dengan perintah `docker exec -it utsserver-app bash`. Di dalam container, buat migrasi di laravel menggunakan perintah "php artisan make:migartion" untuk tabel yang diperlukan jalankan `php artisan migrate` untuk migrasi database, dan `php artisan db:seed` untuk menjalankan seeder.

5. setelah itu buat View, model dan controller dari skema migrasi yang sudah ada dan jangan lpa sesuaikan juga konfiguras route nya di route/web.php

6. Untuk menambahkan data dummy admin, buat file seeder bernama `AdminSeeder.php`, lalu isi dengan dua data admin contoh. Jangan lupa daftarkan seeder tersebut ke dalam `DatabaseSeeder.php`, lalu jalankan kembali perintah `php artisan db:seed`. 

7. Setelah semuanya siap, aplikasi Laravel dapat diakses melalui browser dengan membuka `http://localhost:8000`. Kamu bisa memulai melakukan testing fitur