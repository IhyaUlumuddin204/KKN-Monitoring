# Template Website KKN Sawah Terapung Terintegrasi Budidaya Belut

Template ini adalah website statis untuk media artikel, dokumentasi, edukasi, galeri, kontak, dan monitoring sederhana program KKN Universitas Trunojoyo Madura.

Website dibuat tanpa backend, tanpa database, dan tanpa login admin sehingga bisa di-hosting gratis di GitHub Pages, Netlify, atau Vercel.

## 1. Cara menjalankan website di laptop

1. Buka folder project ini.
2. Klik dua kali file `index.html`.
3. Website akan terbuka di browser.
4. Gunakan menu navbar untuk berpindah ke halaman `artikel.html`, `dokumentasi.html`, `monitoring.html`, `galeri.html`, dan `kontak.html`.

Website ini tidak membutuhkan XAMPP, PHP, Laravel, Node.js, atau database.

## 2. Struktur folder

```text
.
+-- index.html
+-- artikel.html
+-- dokumentasi.html
+-- monitoring.html
+-- galeri.html
+-- kontak.html
+-- assets
|   +-- css
|   |   +-- style.css
|   +-- js
|   |   +-- script.js
|   +-- img
|       +-- gambar placeholder
+-- README.md
```

## 3. Bagian yang perlu diganti

- Nama program, tahun KKN, dan teks utama di setiap file `.html`.
- Nama desa pada `kontak.html`, cari komentar `<!-- GANTI NAMA DESA DI SINI -->`.
- Nama kelompok KKN pada `kontak.html`.
- Nomor WhatsApp, link Google Form, dan link Instagram pada `kontak.html`.
- Foto kegiatan pada folder `assets/img/`.
- Caption galeri pada `galeri.html`.
- Tanggal dan deskripsi timeline pada `dokumentasi.html`.
- Judul, tanggal, gambar, dan ringkasan artikel pada `artikel.html`.
- Data monitoring pada `assets/js/script.js`.

## 4. Cara upload ke GitHub Pages

1. Buat repository baru di GitHub.
2. Upload semua file dan folder template ini ke repository tersebut.
3. Masuk ke menu `Settings`.
4. Pilih `Pages`.
5. Pada bagian `Build and deployment`, pilih sumber `Deploy from a branch`.
6. Pilih branch `main` dan folder `/root`.
7. Klik `Save`.
8. Tunggu beberapa menit sampai link GitHub Pages aktif.

Setelah aktif, GitHub akan memberikan link website. Link tersebut bisa dibuat menjadi QR Code dan ditempel pada halaman `kontak.html`.

## 5. Cara mengganti data monitoring

Buka file:

```text
assets/js/script.js
```

Cari bagian:

```js
const monitoringData = [
  {
    tanggal: "2026-07-01",
    minggu: 1,
    tinggi: 12,
    daun: 3,
    kondisiAir: "Jernih",
    belutHidup: 50,
    belutMati: 0,
    catatan: "Adaptasi awal setelah penanaman dan pengisian air."
  }
];
```

Ubah nilai sesuai hasil pengamatan. Contoh:

```js
{
  tanggal: "2026-08-05",
  minggu: 6,
  tinggi: 50,
  daun: 13,
  kondisiAir: "Stabil",
  belutHidup: 47,
  belutMati: 1,
  catatan: "Tanaman tumbuh baik dan air dikontrol setiap pagi."
}
```

Jika ingin menambah minggu baru, salin satu objek data, tempel di bawah data terakhir, lalu ubah nilainya. Tabel dan grafik di halaman `monitoring.html` akan mengikuti isi array tersebut secara otomatis.
