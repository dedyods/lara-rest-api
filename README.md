# laravelsbadmin
laravel integarasi theme sb admin
laradss
#Pembuatan Aplikasi DSS(Decision Support System) Menggunakan Framework Laravel:

#System Requirement
- OS Windows 7;
- Version PHP; PHP >= 7.1.3 OpenSSL PHP Extension PDO PHP Extension Mbstring PHP Extension Tokenizer PHP Extension XML PHP - - Extension Ctype PHP Extension JSON PHP Extension BCMath PHP Extension
- Editor; Visual Studio Code
- Databases; Mysql - Postgree
- Webserver; Xampp

#Step #1 Instalasi Composer

- Download Composer https://getcomposer.org/Composer-Setup.exe 
- Install dan arahkan composer pada php.ini sesuai dengan lokasi penyimpanan php.ini

#Step #2 Instalasi laravel

- Proses instalasi menggunakan CMD (Command Prompt) dengan posisi direktory berada pada htdocs Cd xampp/htdocs
- Instalasi laravel menggunakan CMD (Command Prompt) dengan perintah <b>composer create-project --prefer-dist laravel/laravel laradss</b>
- Jalankan service laravel dengan perintah : php artisan serve
- Akses Project laravel melalui browser dengan Alamat : localhost:8000

#Step #3 Integrasi Dengan Template SB admin new

- Download template SB admin 2 : https://github.com/BlackrockDigital/startbootstrap-sb-admin-2/archive/gh-pages.zip
- Lakukan proses ekstraksi pada template SB admin 2 -> ubah nama menjadi sbadmin2
- Pindahkan hasil ekstraksi (sbadmin2) pada folder public laradss yang terletak pada xampp/htdocs/laradss/public
- Create sebuah file pada views project laravel dan beri nama template.blade.php htdocs/laradss/resources/views/template.blade.php
- Salin File index.html pada folder template sbadmin2 -> ke file template.blade.php
- Lakukan penyesuaian link path template menggunakan sintaks pada file template.blade.php 
<br>example : {{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}
