<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.

## About PMII UNINUS 
Aplikasi sistem informasi anggota organisasi Pergerakan Mahasiswa Islam Indonesia (PMII) Universitas Islam Nusantara adalah sebuah platform digital berbasis website yang dirancang khusus untuk memudahkan manajemen anggota PMII di Komisariat Universitas Islam Nusanatara. Aplikasi ini menyediakan berbagai fitur dan fungsionalitas yang bertujuan untuk meningkatkan efisiensi, transparansi, dan kolaborasi dalam mengelola anggota organisasi.

## Fitur Yang Dimiliki 
-   Informasi Umum:
Informasi Umum yang Mencakup nama organisasi, Sejarah Keorganisasian, Tujuan, Visi Misi dan lain-lain 

-   Pengumuman dan Berita: 
Aplikasi ini dilengkapi dengan fitur pengumuman atau papan berita yang memungkinkan pengguna untuk mempublikasikan informasi penting atau berita terkini dari masing-masing anggota kepada anggota lain.

-   Dokumentasi dan Penyimpanan: 
Fitur ini memungkinkan setiap anggota untuk mengakses dan menyimpan dokumen, file, atau gambar lainnya yang berkaitan dengan organisasi dan Akademik.

-   Digital E-Book:
Fitur ini memungkinkan setiap anggota untuk menyimpan e-book, mengakses e-book, dalam bentuk pdf, word, ataupun excel yang berkaitan dengan organisasi dan Akademik.

-   Manajemen Keanggotaan: 
Fitur ini memungkinkan pengguna untuk mengelola daftar anggota, termasuk menghapus anggota yang tidak aktif, mengubah status keanggotaan, atau mengelompokkan anggota berdasarkan rayon, prodi, dan tingkat kaderisasi.

-   Pelaporan dan Analitik: 
Fitur ini memungkinkan pengguna untuk mendapatkan laporan dan analisis terkait data keanggotaan, atau aktivitas rayon. Ini membantu pengurus organisasi dalam pemantauan kinerja rayon maupun anggota dan pengambilan keputusan berdasarkan data.

-   Manajemen Profil Anggota: 
Fitur ini memungkinkan anggota untuk mengelola profil mereka, termasuk mengubah informasi pribadi, memperbaharui password, mengunggah foto pribadi, dan memperbarui data kontak.

-   Manajemen Acara: 
Fitur ini memungkinkan pengguna untuk mengakses acara atau kegiatan dari rayon-rayon lain, membuat, dan mengelola acara, yang diselenggarakan oleh rayon-rayon ataupun Komisariat. Ini termasuk membuat jadwal, mengatur lokasi, serta mengumpulkan daftar peserta.

-   Keamanan dan Hak Akses: Aplikasi ini sering dilengkapi dengan sistem keamanan yang memungkinkan pengaturan hak akses berdasarkan peran atau tingkat keanggotaan. Hal ini membantu melindungi data sensitif organisasi dan memastikan bahwa setiap anggota memiliki akses sesuai dengan perannya.

Perlu diingat bahwa fitur-fitur ini dapat bervariasi tergantung pada status anda sebagai anggota organisasi dan tingkat kaderisasi yang anda tempuh,


## Screenshot

-   Halaman Utama
![image.png]( https://pmiiuninus.com/storage/img/1.png )

-   Halaman About
![image.png]( https://pmiiuninus.com/storage/img/2.png )

-   Statistik
![image.png]( https://pmiiuninus.com/storage/img/3.png )

-   Statistik
![image.png]( https://pmiiuninus.com/storage/img/3.png )
![image.png]( https://pmiiuninus.com/storage/img/4.png )

-   Produktivitas Rayon
![image.png]( https://pmiiuninus.com/storage/img/5.png )

-   Data Pengurus
![image.png]( https://pmiiuninus.com/storage/img/6.png )

-   Kalender Kegiatan
![image.png]( https://pmiiuninus.com/storage/img/7.png )

-   Hari Besar Nasional
![image.png]( https://pmiiuninus.com/storage/img/8.png )

-   Galeri Kader
![image.png]( https://pmiiuninus.com/storage/img/9.png )

-   Perpustakaan Kader
![image.png]( https://pmiiuninus.com/storage/img/10.png )

-   Fitur Blog/Berita
![image.png]( https://pmiiuninus.com/storage/img/11.png )
![image.png]( https://pmiiuninus.com/storage/img/12.png )

-   Fitur Profile Kader
![image.png]( https://pmiiuninus.com/storage/img/13.png )

-   Database Kader 
![image.png]( https://pmiiuninus.com/storage/img/14.png )


## Instalasi

### Spesifikasi
- PHP ^8.1
- Laravel 10.x
- Database MySQL

### Cara Install

1. Clone atau download source code
    - Para terminal, clone repo `git clone ghttps://github.com/rifqimunawar/laracrot.git`
    - atau `git clone https://github.com/rifqimunawar/laracrot.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. `cd laracrot`
3. `composer install`
4. `cp .env.example .env`
    - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
5. Pada terminal `php artisan key:generate`
6. Buat **database pada mysql** untuk aplikasi ini
7. **Setting database** pada file `.env`
8. `php artisan migrate --seed`
9. `php artisan serve`
10. Selesai

#salam_pergerakan
