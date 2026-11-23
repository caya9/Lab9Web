
# LAB 9 WEB - PHP MODULAR

## Praktikum 9: PHP Modular
**Mata Kuliah:** Pemrograman Web

## 1. Identitas Mahasiswa

| Keterangan | Identitas |
|---|---|
| Nama | Chaya Aulia |
| NIM | [312510197] |
| Kelas | [I251B] |
| Dosen Pengampu | [Agung Nugroho, S.Kom., M.Kom., S.Kom., M. Kom] |

---

## 2. Deskripsi Project

Project Lab9Web merupakan pengembangan aplikasi berbasis PHP dan MySQL dengan menerapkan konsep PHP Modular. Praktikum ini bertujuan untuk membagi program menjadi beberapa bagian atau modul berdasarkan fungsi dan tanggung jawabnya.

Pada project ini, aplikasi yang sebelumnya dibuat menggunakan PHP dan MySQL dikembangkan menjadi lebih terstruktur dengan memisahkan file konfigurasi database, template tampilan, function, dan modul CRUD.

Aplikasi ini digunakan untuk mengelola data barang yang meliputi:
- Menampilkan data barang.
- Menambahkan data barang.
- Mengubah data barang.
- Menghapus data barang.
- Menampilkan gambar barang.
- Login dan logout admin.
- Menggunakan routing untuk mengakses halaman.

## 3. Tujuan Praktikum

1. Memahami konsep modularisasi program PHP.
2. Memahami penggunaan include, require, dan require_once.
3. Membuat template header dan footer yang digunakan bersama.
4. Membuat function PHP dengan parameter dan nilai return.
5. Menyusun struktur direktori aplikasi secara modular.
6. Menerapkan routing menggunakan parameter URL.
7. Mengintegrasikan PHP Modular dengan aplikasi database dan CRUD.

## 4. Perangkat yang Digunakan

Perangkat lunak yang digunakan dalam praktikum ini:

- Visual Studio Code sebagai editor kode.
- XAMPP sebagai web server lokal.
- Apache untuk menjalankan aplikasi PHP.
- MySQL sebagai database.
- phpMyAdmin untuk mengelola database.
- Google Chrome sebagai browser.
- Git dan GitHub untuk menyimpan project.

## 5. Struktur Direktori Project

Berikut struktur direktori project Lab9Web:

```text
Lab9Web/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── gambar/
│   │   ├── Hp_Samsung_S25_Ram_12GB_Internal_256GB_Garansi_Resmi_Silver_Shadow.jpg
│   │   ├── oppo_A3x_4_128_garansi_resmi.jpg
│   │   └── Xiaomi_Mi_12T_5G_Ram_8_Rom_256GB_Putih.jpg
│   └── js/
│
├── config/
│   └── database.php
│
├── helpers/
│   └── functions.php
│
├── modules/
│   ├── auth/
│   │   ├── login.php
│   │   └── logout.php
│   │
│   └── user/
│       ├── add.php
│       ├── delete.php
│       ├── edit.php
│       └── list.php
│
├── views/
│   ├── 404.php
│   ├── dashboard.php
│   ├── footer.php
│   └── header.php
│
├── Screenshoot/
│
├── .htaccess
├── data_barang.sql
├── index.php
└── README.md
```

## 6. Penjelasan Struktur Direktori

| Folder/File | Fungsi |
|---|---|
| assets/ | Menyimpan file pendukung aplikasi. |
| assets/css/ | Menyimpan file CSS untuk tampilan website. |
| assets/gambar/ | Menyimpan gambar barang. |
| assets/js/ | Menyimpan file JavaScript. |
| config/ | Menyimpan konfigurasi aplikasi. |
| database.php | Mengatur koneksi ke database MySQL. |
| helpers/ | Menyimpan function yang digunakan bersama. |
| functions.php | Berisi function seperti formatRupiah, hitungDiskon, validasiEmail, dan ringkasTeks. |
| modules/ | Menyimpan modul fitur aplikasi. |
| modules/user/ | Menyimpan proses CRUD data barang. |
| modules/auth/ | Menyimpan proses login dan logout. |
| views/ | Menyimpan template dan halaman tampilan. |
| header.php | Bagian kepala halaman dan navigasi. |
| footer.php | Bagian penutup halaman. |
| dashboard.php | Halaman utama aplikasi. |
| 404.php | Menampilkan halaman ketika rute tidak ditemukan. |
| index.php | File utama untuk mengatur routing aplikasi. |
| data_barang.sql | File database untuk tabel data barang. |
| .htaccess | Mengatur URL rewrite pada Apache. |

## 7. Langkah-Langkah Praktikum

### Langkah 1. Menjalankan XAMPP

1. Membuka aplikasi XAMPP.
2. Menjalankan Apache.
3. Menjalankan MySQL.
4. Memastikan keduanya berjalan dengan baik.

**Screenshot:**

![Menjalankan XAMPP](Screenshoot/Buka-XAMPP.png)

### Langkah 2. Membuat Template Halaman

Pada tahap ini dibuat template halaman menggunakan PHP Modular.

File yang digunakan:
- header.php
- footer.php
- home.php
- about.php
- profil.php
- kontak.php

Header digunakan untuk menampilkan bagian atas website dan navigasi, sedangkan footer digunakan untuk bagian bawah halaman.

**Screenshot:**

![Kode Home PHP](Screenshoot/09_vscode_home-php.png)

![Halaman Home](Screenshoot/10_browser_home.png)

![Halaman About](Screenshoot/11_browser_about.png)

![Halaman Profil](Screenshoot/12_browser_profil.png)

![Halaman Kontak](Screenshoot/13_browser_kontak.png)

### Langkah 3. Membuat Function PHP

Membuat function untuk menghindari penulisan kode yang berulang.

Function yang digunakan antara lain:

- formatRupiah() untuk mengubah angka menjadi format mata uang Rupiah.
- hitungDiskon() untuk menghitung nilai diskon.
- validasiEmail() untuk memeriksa format email.
- ringkasTeks() untuk membatasi panjang teks.

Selain itu, terdapat function pendukung seperti e(), url(), redirect(), csrf_token(), dan menuAktif().

Seluruh function disimpan di dalam file helpers/functions.php.

**Screenshot:**

![Kode Helpers](Screenshoot/14_vscode_helpers-php.png)

![Hasil Latihan Function](Screenshoot/15_browser_latihan-fungsi.png)

![Hasil Latihan Function 2](Screenshoot/16_browser_latihan-fungsi2.png)

### Langkah 4. Menyusun Struktur Direktori

Membuat struktur direktori agar setiap file memiliki tanggung jawab masing-masing.

Folder yang dibuat meliputi:
- config
- views
- helpers
- modules
- assets

**Screenshot:**

![Struktur Direktori](Screenshoot/17_vscode_struktur-direktori-lab9web.png)

### Langkah 5. Membuat Database

Database yang digunakan bernama latihan1 dengan tabel data_barang.

Koneksi database diletakkan pada file config/database.php menggunakan MySQLi.

File SQL yang digunakan adalah data_barang.sql.

**Screenshot:**

![Database Data Barang](Screenshoot/18_phpmyadmin_tabel-data-barang.png)

![Konfigurasi Database](Screenshoot/19_vscode_config-database.png)

### Langkah 6. Membuat Template Header dan Footer

Membuat file header.php dan footer.php di dalam folder views.

Kedua file tersebut digunakan bersama oleh halaman aplikasi sehingga tampilan website menjadi lebih konsisten.

Pemanggilan template dilakukan menggunakan require_once.

**Screenshot:**

![Kode Header](Screenshoot/20_vscode_views-header.png)

![Kode Footer](Screenshoot/21_vscode_views-footer.png)

### Langkah 7. Membuat Helper Functions

Menyimpan function umum pada file helpers/functions.php agar dapat digunakan kembali oleh berbagai halaman.

Function tersebut membantu proses format data, validasi, URL, dan pengelolaan pesan aplikasi.

**Screenshot:**

![Helper Functions](Screenshoot/22_vscode_helpers-functions.png)

![Hasil Format Rupiah](Screenshoot/23_browser_helper-formatrupiah-list.png)

### Langkah 8. Membuat Routing pada index.php

Membuat index.php sebagai file utama yang mengatur halaman berdasarkan parameter page.

Routing digunakan untuk mengakses halaman dashboard, data barang, tambah barang, edit barang, hapus barang, login, dan logout.

Router menggunakan daftar rute yang telah ditentukan (whitelist) sehingga halaman yang tidak terdaftar akan diarahkan ke halaman 404.

**Screenshot:**

![Kode Router](Screenshoot/24_vscode_router-index.png)

![Dashboard](Screenshoot/25_browser_route-dashboard.png)

![Routing Data Barang](Screenshoot/26_browser_route-user-list.png)

![Routing Tambah Barang](Screenshoot/27_browser_route-user-add.png)

![Routing Login](Screenshoot/28_browser_route-auth-login.png)

![Halaman 404](Screenshoot/29_browser_route-404-admin-rahasia.png)

### Langkah 9. Membuat Modul Data Barang

Membuat modul CRUD di dalam folder modules/user/.

Modul tersebut terdiri dari:

1. list.php untuk menampilkan data barang.
2. add.php untuk menambahkan data barang.
3. edit.php untuk mengubah data barang.
4. delete.php untuk menghapus data barang.

Setiap modul terhubung dengan database sehingga perubahan data dapat disimpan secara langsung.

**Screenshot:**

![Kode List Barang](Screenshoot/30_vscode_modules-user-list.png)

![Form Tambah Barang](Screenshoot/31_browser_crud-form-tambah.png)

![Tambah Barang Berhasil](Screenshoot/32_browser_crud-tambah-sukses.png)

![Form Edit Barang](Screenshoot/33_browser_crud-form-edit.png)

![Edit Barang Berhasil](Screenshoot/34_browser_crud-edit-sukses.png)

![Konfirmasi Hapus](Screenshoot/35_browser_crud-konfirmasi-hapus.png)

![Data Setelah CRUD](Screenshoot/36_phpmyadmin_data-setelah-crud.png)

### Langkah 10. Membuat Modul Login dan Logout

Membuat fitur autentikasi sederhana menggunakan session PHP.

File login.php digunakan untuk proses login admin, sedangkan logout.php digunakan untuk mengakhiri session pengguna.

Data login untuk pengujian:

- Username: admin
- Password: admin123

**Screenshot:**

![Login Gagal](Screenshoot/37_browser_login-gagal.png)

![Login Berhasil](Screenshoot/38_browser_login-sukses.png)

![Logout Berhasil](Screenshoot/39_browser_logout-sukses.png)

### Langkah 11. Mengatur URL Rewrite dengan .htaccess

Membuat file .htaccess untuk mengatur URL agar lebih sederhana.

Pengaturan ini menggunakan RewriteEngine, RewriteCond, dan RewriteRule pada Apache.

**Screenshot:**

![Kode Htaccess](Screenshoot/40_vscode_htaccess.png)

![Hasil URL Rewrite](Screenshoot/41_browser_htaccess-user-list.png)

## 8. Cara Menjalankan Project

Berikut langkah menjalankan aplikasi Lab9Web:

1. Pastikan XAMPP sudah terinstal.
2. Jalankan Apache dan MySQL.
3. Salin folder Lab9Web ke dalam direktori htdocs.
4. Buka browser dan akses phpMyAdmin melalui http://localhost/phpmyadmin.
5. Buat database dengan nama latihan1.
6. Import file data_barang.sql ke dalam database tersebut.
7. Pastikan konfigurasi database.php menggunakan nama database latihan1.
8. Buka browser.
9. Masukkan alamat berikut:

http://localhost/Lab9Web/

10. Aplikasi akan menampilkan halaman dashboard.

## 9. Daftar Routing Aplikasi

| Halaman | URL |
|---|---|
| Dashboard | index.php?page=dashboard |
| Data Barang | index.php?page=user/list |
| Tambah Barang | index.php?page=user/add |
| Edit Barang | index.php?page=user/edit |
| Hapus Barang | index.php?page=user/delete |
| Login | index.php?page=auth/login |
| Logout | index.php?page=auth/logout |
| Halaman 404 | index.php?page=admin/rahasia |

## 10. Pengujian Aplikasi

Pengujian dilakukan untuk memastikan setiap fitur berjalan sesuai fungsinya.

| No. | Fitur | Hasil Pengujian |
|---|---|---|
| 1 | Dashboard | Berhasil ditampilkan. |
| 2 | Data Barang | Data berhasil ditampilkan. |
| 3 | Tambah Barang | Data berhasil ditambahkan. |
| 4 | Edit Barang | Data berhasil diubah. |
| 5 | Hapus Barang | Data berhasil dihapus. |
| 6 | Login | Login berhasil menggunakan akun admin. |
| 7 | Login Gagal | Pesan kesalahan ditampilkan. |
| 8 | Logout | Session berhasil diakhiri. |
| 9 | Routing | Halaman dapat diakses melalui parameter page. |
| 10 | Halaman 404 | Ditampilkan ketika rute tidak terdaftar. |
| 11 | URL Rewrite | Pengujian URL rewrite berhasil. |

## 11. Kendala dan Cara Mengatasinya

Beberapa kendala yang ditemukan selama pengerjaan praktikum:

1. **Koneksi database gagal**

   Penyebab: Nama database atau konfigurasi koneksi tidak sesuai.

   Solusi: Memeriksa kembali nama database, username, password, dan konfigurasi pada database.php.

2. **Gambar barang tidak muncul**

   Penyebab: Lokasi gambar atau nama file tidak sesuai.

   Solusi: Memastikan gambar berada di dalam folder assets/gambar/ dan alamat pemanggilan gambar sudah benar.

3. **Halaman tidak ditemukan (404)**

   Penyebab: Parameter page tidak sesuai dengan daftar routing.

   Solusi: Memeriksa kembali penulisan URL dan daftar rute pada index.php.

4. **CSS tidak tampil**

   Penyebab: Alamat file CSS tidak sesuai dengan lokasi project.

   Solusi: Memeriksa kembali alamat stylesheet pada header.php.

5. **Function sudah dideklarasikan**

   Penyebab: File helper dipanggil lebih dari satu kali.

   Solusi: Menggunakan require_once agar file hanya dimuat satu kali.

## 12. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa PHP Modular membantu membuat struktur aplikasi menjadi lebih teratur dan mudah dipahami.

Dengan menerapkan modularisasi, bagian konfigurasi database, template tampilan, function, dan modul CRUD dapat dipisahkan sesuai tanggung jawabnya.

Selain itu, penggunaan routing pada index.php memudahkan proses perpindahan halaman dalam aplikasi. Fitur CRUD juga dapat berjalan dengan menggunakan database MySQL.

Melalui praktikum ini, mahasiswa dapat memahami penerapan PHP Modular dalam pengembangan aplikasi web yang lebih terstruktur dan mudah dikembangkan.

---

**Praktikum 9 - Pemrograman Web**  
**Universitas Pelita Bangsa**
