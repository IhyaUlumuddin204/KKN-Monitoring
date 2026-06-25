# Website Profil dan Potensi Desa Waru Barat

Template ini dibuat dengan PHP native sederhana untuk kebutuhan KKN Universitas Trunojoyo Madura 2026. Website berisi profil desa, UMKM, produk unggulan, dokumentasi KKN, peta potensi pertanian, dan monitoring demplot sawah terapung.

Website ini tidak memakai framework, database, atau login admin. Semua data dummy disimpan di array PHP agar mudah diganti. Untuk GitHub Pages, file PHP dapat diexport menjadi HTML statis menggunakan `build-static.php`.

## 1. Cara menjalankan di laptop

Jika memakai XAMPP:

1. Letakkan folder project di `C:\xampp\htdocs\Monitoring desa`.
2. Jalankan Apache dari XAMPP Control Panel.
3. Buka browser:

```text
http://localhost/Monitoring%20desa/index.php
```

Jika memakai server PHP bawaan:

```text
php -S localhost:8000
```

Lalu buka:

```text
http://localhost:8000
```

## 2. Struktur folder

```text
.
+-- index.php
+-- profil.php
+-- umkm.php
+-- produk.php
+-- dokumentasi.php
+-- peta-potensi.php
+-- monitoring.php
+-- kontak.php
+-- index.html
+-- profil.html
+-- umkm.html
+-- produk.html
+-- dokumentasi.html
+-- peta-potensi.html
+-- monitoring.html
+-- kontak.html
+-- build-static.php
+-- data
|   +-- content.php
+-- includes
|   +-- header.php
|   +-- footer.php
|   +-- helpers.php
+-- assets
|   +-- css
|   |   +-- desa.css
|   +-- js
|   |   +-- desa.js
|   +-- img
|       +-- gambar placeholder
+-- README.md
```

## 3. Bagian yang perlu diganti

Sebagian besar data ada di:

```text
data/content.php
```

Ganti bagian berikut:

- Data desa: nama desa, kecamatan, kabupaten, nama kepala desa, nama kelompok KKN.
- Kontak: WhatsApp, link Instagram, link Google Form, dan link website final.
- Data UMKM: nama usaha, kategori, pemilik, lokasi, deskripsi, foto.
- Produk unggulan: nama produk, jenis produk, deskripsi, foto.
- Dokumentasi KKN: tanggal, judul kegiatan, deskripsi, foto.
- Galeri: caption dan foto kegiatan.
- Peta potensi: nama titik potensi, kategori, dan deskripsi.
- Monitoring: tanggal, minggu, tinggi padi, jumlah daun, kondisi air, jumlah belut, dan catatan.

Foto dummy ada di folder:

```text
assets/img/
```

Setelah mengganti data atau tampilan PHP, jalankan:

```text
php build-static.php
```

Perintah ini akan membuat ulang file `.html` untuk GitHub Pages.

## 4. Cara mengganti data monitoring

Buka `data/content.php`, cari komentar:

```php
// GANTI DATA MONITORING DI SINI
```

Contoh data:

```php
['tanggal' => '2026-07-01', 'minggu' => 1, 'tinggi' => 12, 'daun' => 3, 'air' => 'Jernih', 'hidup' => 50, 'mati' => 0, 'catatan' => 'Adaptasi awal setelah penanaman.'],
```

Untuk menambah minggu baru, salin satu baris data, tempel di bawah data terakhir, lalu ubah nilainya. Tabel dan grafik di halaman `monitoring.php` akan mengikuti data tersebut. Setelah itu jalankan `php build-static.php` agar `monitoring.html` ikut diperbarui.

## 5. Cara upload ke GitHub Pages

GitHub Pages tidak menjalankan PHP, tetapi bisa menampilkan file HTML statis hasil export.

Alur update online:

1. Edit data atau tampilan di file PHP.
2. Jalankan `php build-static.php`.
3. Commit semua perubahan.
4. Push ke GitHub.
5. Aktifkan GitHub Pages dari branch `main` folder `/root`.

Link GitHub Pages akan memakai `index.html`, bukan `index.php`.

## 6. Catatan hosting PHP

Jika ingin menjalankan versi PHP langsung, gunakan hosting yang mendukung PHP seperti cPanel, hosting kampus, InfinityFree, atau layanan hosting PHP lain. Untuk GitHub Pages, gunakan file `.html` hasil export.
