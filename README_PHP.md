# Website Profil dan Potensi Desa Waru Barat

Versi ini dibuat dengan PHP native sederhana, tanpa framework, tanpa database, dan data disimpan di array PHP.

## Cara menjalankan di laptop

1. Pastikan XAMPP sudah aktif.
2. Jalankan Apache.
3. Buka browser:

```text
http://localhost/Monitoring%20desa/index.php
```

Atau jalankan server PHP bawaan:

```text
php -S localhost:8000
```

Lalu buka:

```text
http://localhost:8000
```

## File penting

- `data/content.php` untuk mengganti data desa, UMKM, produk unggulan, dokumentasi, peta potensi, dan monitoring.
- `includes/header.php` untuk navbar dan bagian head.
- `includes/footer.php` untuk footer.
- `assets/css/desa.css` untuk tampilan.
- `assets/js/desa.js` untuk menu HP, slideshow, dan grafik monitoring.

## Catatan hosting

GitHub Pages tidak bisa menjalankan PHP. Untuk versi PHP native, gunakan hosting yang mendukung PHP seperti cPanel, hosting kampus, InfinityFree, 000webhost, atau server VPS.

Jika tetap ingin gratis di GitHub Pages, gunakan versi HTML statis.
