#####################
Company Profile Manly
#####################

Projek ini merupakan company profile manly yang memiliki fungsionalitas sepert CMS tapi lebih simple. Dibangun menggunakan Codeigniter 3, Template(Frontend dan Backend), Bootsrap 3, Javascript, HTML, CSS

*******************
Server Requirements
*******************
PHP version 5.6 atau direkomendasikan menggunakan yang paling terbaru. Server disesuaikan dengan spesifikasi codeigniter untuk bisa berjalan dengan baik.

*********
Instalasi
*********
Untuk menggunakan aplikasi dapat dimulai dengan menyesuaikan konfigurasi di folder config.

1. Pertama-tama siapkan databasenya bisa import db yang telah saya upload terletak di folder db.
2. Buka file config.php yang terdapat pada folder config kemudian edit sesuai penjelasan di bawah ini:
* Rubah base_url -> ```http://localhost/nama-folder```

1. Pertama - tama siapkan database **SIAKAD**
2. Buka file **configuration.php** lalu lakukan beberapa pengaturan seperti ini:
    * Masukkan base url ```var $_site_url = 'http://contoh-url/'```
	* Jika aplikasi dalam sub folder seperti **localhost/siakad-pt/** maka property ini diisi sesuai dengan nama sub folder, jika tidak dalam sub folder makan kosong kan saja ```var $_sub_domain = 'siakad-pt'```
    * Masukkan host database ```var $_hostname = ''```
    * Masukkan username database ```var $_database_user = ''```
	* Masukkan password database ```var $_database_password = ''```
	* Masukkan nama database ```var $_database_name = ''```
    * Masukkan nama perguruan tinggi ```var $_pt_name = 'Nama PT'```
3. Install semua package require yang sudah ada dalam file **composer.json**. Ini memerlukan composer untuk melakukan penginstalan.
4. Setelah package yang dibutuhkan sudah terinstall maka aplikasi sudah siap digunakan.
	
