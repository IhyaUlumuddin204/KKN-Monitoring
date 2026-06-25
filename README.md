# Website Profil dan Potensi Desa Waru Barat

Template ini dibuat dengan PHP native sederhana untuk kebutuhan KKN Universitas Trunojoyo Madura 2026. Website berisi profil desa, UMKM, produk unggulan, dokumentasi KKN, peta potensi pertanian, dan monitoring demplot sawah terapung.

Website ini tidak memakai framework, database, atau login admin. Semua data dummy disimpan di array PHP agar mudah diganti.

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

## 4. Cara mengganti data monitoring

Buka `data/content.php`, cari komentar:

```php
// GANTI DATA MONITORING DI SINI
```

Contoh data:

```php
['tanggal' => '2026-07-01', 'minggu' => 1, 'tinggi' => 12, 'daun' => 3, 'air' => 'Jernih', 'hidup' => 50, 'mati' => 0, 'catatan' => 'Adaptasi awal setelah penanaman.'],
```

Untuk menambah minggu baru, salin satu baris data, tempel di bawah data terakhir, lalu ubah nilainya. Tabel dan grafik di halaman `monitoring.php` akan mengikuti data tersebut.

## 5. Catatan hosting

GitHub Pages tidak bisa menjalankan PHP. Jika ingin website ini online, gunakan hosting yang mendukung PHP seperti cPanel, hosting kampus, InfinityFree, atau layanan hosting PHP lain.

Alur upload ke hosting PHP:

1. Zip semua file project.
2. Upload ke folder `public_html` atau folder website utama di hosting.
3. Pastikan file `index.php` berada di folder utama.
4. Buka domain hosting untuk mengecek hasilnya.

Repository GitHub tetap bisa dipakai untuk menyimpan kode, tetapi link `github.io` tidak akan menjalankan file PHP.
