<?php
$pageTitle = 'Profil Desa';
$currentPage = 'profil';
$pageDescription = 'Profil singkat Desa Waru Barat dan identitas program KKN.';
require __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">Profil Desa</p>
        <h1><?= e($site['village']); ?></h1>
        <p><?= e($site['tagline']); ?></p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="peta-potensi.php">Lihat Peta Potensi</a>
        <a class="btn btn-secondary" href="kontak.php">Kontak KKN</a>
      </div>
    </div>
  </section>

  <section class="section section-compact">
    <div class="container stat-strip">
      <?php foreach ($content['stats'] as $stat): ?>
        <article class="stat-card reveal-on-scroll">
          <strong><?= e($stat['value']); ?></strong>
          <span><?= e($stat['label']); ?></span>
          <small><?= e($stat['note']); ?></small>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section">
    <div class="container split-layout">
      <div class="content-panel reveal-on-scroll">
        <p class="eyebrow">Identitas</p>
        <h2>Informasi dasar desa</h2>
        <dl class="info-list">
          <div><dt>Nama Desa</dt><dd><?= e($site['village']); ?></dd></div>
          <div><dt>Kecamatan</dt><dd><?= e($site['district']); ?></dd></div>
          <div><dt>Kabupaten</dt><dd><?= e($site['regency']); ?></dd></div>
          <div><dt>Kepala Desa</dt><dd><?= e($site['headman']); ?></dd></div>
          <div><dt>Program</dt><dd><?= e($site['program']); ?></dd></div>
        </dl>
      </div>
      <div class="content-panel reveal-on-scroll">
        <p class="eyebrow">Deskripsi</p>
        <h2>Profil singkat</h2>
        <p><?= e($content['profile']['summary']); ?></p>
        <ul class="check-list">
          <?php foreach ($content['profile']['focus'] as $focus): ?>
            <li><?= e($focus); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container cta-band reveal-on-scroll">
      <div>
        <p class="eyebrow">Catatan Pengisian</p>
        <h2>Lengkapi profil dengan data resmi desa</h2>
        <p>Tambahkan sejarah singkat, jumlah penduduk, jumlah dusun, batas wilayah, fasilitas umum, dan potensi utama agar halaman ini terasa lengkap.</p>
      </div>
      <a class="btn btn-primary dark" href="umkm.php">Lanjut ke UMKM</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
