<?php
$pageTitle = 'Profil Desa';
$currentPage = 'profil';
$pageDescription = 'Profil singkat Desa Waru Barat dan identitas program KKN.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">Profil Desa</p>
      <h1><?= e($site['village']); ?></h1>
      <p><?= e($site['tagline']); ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container split-layout">
      <div class="content-panel">
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
      <div class="content-panel">
        <p class="eyebrow">Deskripsi</p>
        <h2>Profil singkat</h2>
        <p>Desa Waru Barat memiliki potensi lokal di bidang pertanian, ekonomi warga, UMKM, dan inovasi demplot KKN. Bagian ini dapat diganti dengan sejarah singkat desa, kondisi wilayah, jumlah dusun, dan potensi utama desa.</p>
        <p>Website ini disiapkan sebagai media informasi publik agar warga, perangkat desa, dan pengunjung dapat melihat profil desa dan dokumentasi program dengan mudah.</p>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
