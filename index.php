<?php
$pageTitle = 'Beranda';
$currentPage = 'beranda';
$pageDescription = 'Website profil, potensi desa, dokumentasi KKN, dan monitoring demplot sawah terapung Desa Waru Barat.';
require __DIR__ . '/includes/header.php';

$featuredProducts = array_slice($content['products'], 0, 3);
?>

<main id="main-content">
  <section class="hero">
    <div class="hero-media" aria-hidden="true">
      <span class="hero-slide is-active" style="background-image: url('assets/img/hero-demplot.svg');"></span>
      <span class="hero-slide" style="background-image: url('assets/img/gallery-3.svg');"></span>
      <span class="hero-slide" style="background-image: url('assets/img/doc-monitoring.svg');"></span>
    </div>
    <div class="container hero-grid">
      <div class="hero-copy reveal-on-scroll">
        <p class="eyebrow">Profil dan Potensi Desa</p>
        <h1><?= e($site['name']); ?></h1>
        <p><?= e($site['tagline']); ?></p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="profil.php">Lihat Profil Desa</a>
          <a class="btn btn-secondary" href="monitoring.php">Monitoring Demplot</a>
        </div>
      </div>
      <aside class="hero-card reveal-on-scroll">
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

  <section class="section section-compact">
    <div class="container quick-grid">
      <a class="quick-card reveal-on-scroll" href="umkm.php">
        <span>UMKM</span>
        <strong>Data usaha warga</strong>
      </a>
      <a class="quick-card reveal-on-scroll" href="produk.php">
        <span>Produk</span>
        <strong>Potensi unggulan desa</strong>
      </a>
      <a class="quick-card reveal-on-scroll" href="peta-potensi.php">
        <span>Peta</span>
        <strong>Titik potensi pertanian</strong>
      </a>
      <a class="quick-card reveal-on-scroll" href="dokumentasi.php">
        <span>KKN</span>
        <strong>Dokumentasi kegiatan</strong>
      </a>
    </div>
  </section>

  <section class="section">
    <div class="container section-head">
      <p class="eyebrow">Menu Utama</p>
      <h2>Informasi desa dalam satu website yang ringan dan mudah dibuka lewat HP</h2>
      <p>Website ini menampilkan profil desa, UMKM, produk unggulan, dokumentasi KKN, peta potensi pertanian, dan monitoring demplot.</p>
    </div>
    <div class="container feature-grid">
      <a class="feature-card reveal-on-scroll" href="profil.php">
        <img src="assets/img/doc-lokasi.svg" alt="Ilustrasi profil Desa Waru Barat">
        <div>
          <span>01</span>
          <h3>Profil Desa</h3>
          <p>Identitas desa, kepala desa, wilayah, dan ringkasan informasi utama.</p>
        </div>
      </a>
      <a class="feature-card reveal-on-scroll" href="umkm.php">
        <img src="assets/img/gallery-3.svg" alt="Ilustrasi UMKM Desa Waru Barat">
        <div>
          <span>02</span>
          <h3>UMKM Desa</h3>
          <p>Promosi usaha warga, pemilik, lokasi, kategori, dan deskripsi singkat produk.</p>
        </div>
      </a>
      <a class="feature-card reveal-on-scroll" href="produk.php">
        <img src="assets/img/placeholder-dokumentasi.svg" alt="Ilustrasi produk unggulan desa">
        <div>
          <span>03</span>
          <h3>Produk Unggulan</h3>
          <p>Daftar potensi produk pertanian, perikanan, pupuk organik, dan olahan lokal.</p>
        </div>
      </a>
      <a class="feature-card reveal-on-scroll" href="monitoring.php">
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
      <div class="section-copy reveal-on-scroll">
        <p class="eyebrow">Fokus Program</p>
        <h2>Website desa yang tidak hanya monitoring, tapi juga mengenalkan potensi Waru Barat</h2>
        <p>Konten bisa diganti dengan data asli desa: foto UMKM, produk unggulan, lokasi potensi pertanian, serta dokumentasi kegiatan KKN.</p>
        <a class="btn btn-primary dark" href="dokumentasi.php">Lihat Dokumentasi</a>
      </div>
      <div class="flow-list reveal-on-scroll">
        <div><span>1</span><p>Masukkan profil desa dan identitas program KKN.</p></div>
        <div><span>2</span><p>Lengkapi data UMKM, produk unggulan, dan potensi pertanian.</p></div>
        <div><span>3</span><p>Update monitoring demplot sawah terapung setiap minggu.</p></div>
      </div>
    </div>
  </section>

  <section class="section section-showcase">
    <div class="container section-intro reveal-on-scroll">
      <div>
        <p class="eyebrow">Sorotan Potensi</p>
        <h2>Konten lapangan yang siap kamu jadikan profil desa</h2>
        <p>Tampilkan potensi paling penting dari Waru Barat, mulai dari pertanian, perikanan, pupuk organik, sampai produk UMKM warga.</p>
      </div>
      <a class="btn btn-primary dark" href="produk.php">Lihat Semua Produk</a>
    </div>
    <div class="container card-grid">
      <?php foreach ($featuredProducts as $product): ?>
        <article class="data-card compact reveal-on-scroll">
          <img src="<?= e($product['image']); ?>" alt="<?= e($product['name']); ?>">
          <div>
            <p class="tag"><?= e($product['type']); ?></p>
            <h2><?= e($product['name']); ?></h2>
            <p><?= e($product['description']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
