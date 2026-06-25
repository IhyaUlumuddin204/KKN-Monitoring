<?php
$pageTitle = 'UMKM Desa';
$currentPage = 'umkm';
$pageDescription = 'Daftar UMKM dan usaha warga Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">UMKM Desa</p>
        <h1>Usaha warga dan ekonomi lokal Waru Barat</h1>
        <p>Ganti data dummy ini dengan nama usaha, pemilik, foto, alamat, kontak, dan deskripsi UMKM asli.</p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="produk.php">Produk Unggulan</a>
        <a class="btn btn-secondary" href="kontak.php">Hubungi KKN</a>
      </div>
    </div>
  </section>

  <section class="section section-compact">
    <div class="container section-intro compact reveal-on-scroll">
      <div>
        <p class="eyebrow">Data UMKM</p>
        <h2>Katalog awal usaha warga desa</h2>
        <p>Masukkan foto asli, nama pemilik, alamat dusun, nomor pemesanan, dan deskripsi singkat agar halaman ini bisa menjadi katalog desa.</p>
      </div>
      <div class="summary-badge">
        <strong><?= count($content['umkm']); ?></strong>
        <span>contoh usaha siap diganti</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container card-grid">
      <?php foreach ($content['umkm'] as $item): ?>
        <article class="data-card reveal-on-scroll">
          <img src="<?= e($item['image']); ?>" alt="<?= e($item['name']); ?>">
          <div>
            <p class="tag"><?= e($item['category']); ?></p>
            <h2><?= e($item['name']); ?></h2>
            <p><?= e($item['description']); ?></p>
            <dl class="mini-list">
              <div><dt>Pemilik</dt><dd><?= e($item['owner']); ?></dd></div>
              <div><dt>Lokasi</dt><dd><?= e($item['location']); ?></dd></div>
            </dl>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container cta-band reveal-on-scroll">
      <div>
        <p class="eyebrow">Promosi Desa</p>
        <h2>UMKM bisa ditautkan ke WhatsApp atau Instagram</h2>
        <p>Jika setiap UMKM punya kontak pemesanan, tambahkan linknya di data agar pengunjung bisa langsung menghubungi pemilik usaha.</p>
      </div>
      <a class="btn btn-primary dark" href="kontak.php">Lihat Kontak</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
