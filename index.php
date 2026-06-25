<?php
$pageTitle = 'Beranda';
$currentPage = 'beranda';
$pageDescription = 'Website profil, potensi desa, dokumentasi KKN, dan monitoring demplot sawah terapung Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="hero">
    <div class="hero-media" aria-hidden="true">
      <span class="hero-slide is-active" style="background-image: url('assets/img/hero-demplot.svg');"></span>
      <span class="hero-slide" style="background-image: url('assets/img/gallery-3.svg');"></span>
      <span class="hero-slide" style="background-image: url('assets/img/doc-monitoring.svg');"></span>
    </div>
    <div class="container hero-grid">
      <div class="hero-copy">
        <p class="eyebrow">Profil dan Potensi Desa</p>
        <h1><?= e($site['name']); ?></h1>
        <p><?= e($site['tagline']); ?></p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="profil.php">Lihat Profil Desa</a>
          <a class="btn btn-secondary" href="monitoring.php">Monitoring Demplot</a>
        </div>
      </div>
      <aside class="hero-card">
        <p class="eyebrow">Ringkasan Desa</p>
        <h2><?= e($site['village']); ?></h2>
        <p><?= e($site['district']); ?>, <?= e($site['regency']); ?></p>
        <div class="stat-grid">
          <?php foreach ($content['stats'] as $stat): ?>
            <div>
              <strong><?= e($stat['value']); ?></strong>
              <span><?= e($stat['label']); ?></span>
              <small><?= e($stat['note']); ?></small>
            </div>
          <?php endforeach; ?>
        </div>
      </aside>
    </div>
  </section>

  <section class="section">
    <div class="container section-head">
      <p class="eyebrow">Menu Utama</p>
      <h2>Informasi desa dalam satu website yang ringan dan mudah dibuka lewat HP</h2>
      <p>Website ini menampilkan profil desa, UMKM, produk unggulan, dokumentasi KKN, peta potensi pertanian, dan monitoring demplot.</p>
    </div>
    <div class="container feature-grid">
      <a class="feature-card" href="umkm.php">
        <img src="assets/img/gallery-3.svg" alt="Ilustrasi UMKM Desa Waru Barat">
        <div>
          <span>01</span>
          <h3>UMKM Desa</h3>
          <p>Promosi usaha warga, pemilik, lokasi, kategori, dan deskripsi singkat produk.</p>
        </div>
      </a>
      <a class="feature-card" href="produk.php">
        <img src="assets/img/placeholder-dokumentasi.svg" alt="Ilustrasi produk unggulan desa">
        <div>
          <span>02</span>
          <h3>Produk Unggulan</h3>
          <p>Daftar potensi produk pertanian, perikanan, pupuk organik, dan olahan lokal.</p>
        </div>
      </a>
      <a class="feature-card" href="peta-potensi.php">
        <img src="assets/img/doc-lokasi.svg" alt="Ilustrasi peta potensi pertanian">
        <div>
          <span>03</span>
          <h3>Peta Potensi</h3>
          <p>Ringkasan titik potensi pertanian, UMKM, sumber air, dan demplot KKN.</p>
        </div>
      </a>
      <a class="feature-card" href="monitoring.php">
        <img src="assets/img/placeholder-monitoring.svg" alt="Ilustrasi monitoring demplot">
        <div>
          <span>04</span>
          <h3>Monitoring Demplot</h3>
          <p>Tabel dan grafik sederhana untuk perkembangan sawah terapung dan belut.</p>
        </div>
      </a>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container split-layout">
      <div>
        <p class="eyebrow">Fokus Program</p>
        <h2>Website desa yang tidak hanya monitoring, tapi juga mengenalkan potensi Waru Barat</h2>
        <p>Konten bisa diganti dengan data asli desa: foto UMKM, produk unggulan, lokasi potensi pertanian, serta dokumentasi kegiatan KKN.</p>
        <a class="btn btn-primary dark" href="dokumentasi.php">Lihat Dokumentasi</a>
      </div>
      <div class="flow-list">
        <div><span>1</span><p>Data profil desa dan identitas program KKN.</p></div>
        <div><span>2</span><p>Data UMKM, produk unggulan, dan potensi pertanian.</p></div>
        <div><span>3</span><p>Monitoring demplot sawah terapung sebagai program kerja KKN.</p></div>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
