<?php
$pageTitle = 'Peta Potensi';
$currentPage = 'peta';
$pageDescription = 'Peta potensi pertanian, UMKM, sumber air, dan demplot Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">Peta Potensi Pertanian</p>
        <h1>Titik potensi Desa Waru Barat</h1>
        <p>Gunakan halaman ini untuk merangkum area pertanian, sentra UMKM, sumber air, dan lokasi demplot.</p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="produk.php">Produk Unggulan</a>
        <a class="btn btn-secondary" href="monitoring.php">Monitoring</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container map-layout">
      <div class="village-map reveal-on-scroll" aria-label="Ilustrasi peta potensi desa">
        <span class="map-river"></span>
        <span class="map-road"></span>
        <span class="map-point point-farm">Pertanian</span>
        <span class="map-point point-water">Sumber Air</span>
        <span class="map-point point-umkm">UMKM</span>
        <span class="map-point point-demo">Demplot</span>
        <strong>Ilustrasi Peta Potensi</strong>
        <p>Ganti ilustrasi ini dengan gambar peta desa atau foto udara jika sudah tersedia.</p>
      </div>
      <div class="potential-list">
        <div class="section-head left">
          <p class="eyebrow">Daftar Titik</p>
          <h2>Potensi yang perlu dicatat di lapangan</h2>
        </div>
        <?php foreach ($content['potentials'] as $potential): ?>
          <article class="potential-item reveal-on-scroll">
            <p class="tag"><?= e($potential['category']); ?></p>
            <h2><?= e($potential['name']); ?></h2>
            <p><?= e($potential['description']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container cta-band reveal-on-scroll">
      <div>
        <p class="eyebrow">Data Lapangan</p>
        <h2>Tambahkan lokasi asli agar peta lebih bermanfaat</h2>
        <p>Catat nama dusun, koordinat Google Maps, foto lokasi, pemilik lahan jika perlu, dan potensi pengembangan tiap titik.</p>
      </div>
      <a class="btn btn-primary dark" href="dokumentasi.php">Lihat Dokumentasi</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
