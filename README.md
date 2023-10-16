# Website Profile Kianmulia(PT Kiansantang Utama)

Website Profile Kianmulia adalah website profile dari "PT Kiansantang Utama". 
Yang ditujukan untuk mempromosikan "PT Kiansantang Utama Muliatama Tbk".

Proyek ini dibangun dengan menggunakan Laravel, Boostrap, dan Mysql untuk manajemen database.
## Teknologi Yang Digunakan 

Framework : Laravel, Boostrap

Database : Mysql

## Screenshot

### Landing

![Halaman Landing](img/ss-landing.png)

![Halaman Portofolio](img/ss-portofolio.png)

### Admin

![Halaman dashboard](img/ss-dashboard-admin.png)

![Halaman Berita](img/ss-berita-admin.png)

![Halaman Porto](img/ss-portofolio-admin.png)

![Halaman Porto](img/ss-create-porto.png)




## Prasyarat

Pastikan Anda telah menginstal [Laravel](https://laravel.com/) dan [Composer](https://getcomposer.org/) di sistem Anda sebelum menjalankan proyek ini.

## User

Username : user@email.com

Password : user1234


## Instalasi

1. Clone repositori ini:

   ```bash
   git clone https://github.com/AdeMariaUlfa/kianmulia.git
   ```
   
2. Masuk ke direktori proyek:

   ```bash
   cd kianmulia
   ```

3. Salin file .env.example menjadi .env dan sesuaikan pengaturan database:

   ```bash
   cp .env.example .env
   ```

4. Jalankan perintah berikut untuk menginstal dependensi:

   ```bash
   composer install
   ```

5. Install dependensi JavaScript menggunakan npm:

   ```bash
   npm install
   ```
   ```bash
   npm run build
   ```

6. Generate key aplikasi Laravel:

   ```bash
   php artisan key:generate
   ```
7. Migrasi dan isi database dengan perintah berikut:

   ```bash
   php artisan migrate --seed
   ```

8. Jalankan server pengembangan Laravel

   ```bash
   php artisan serve
   ```
