<?php
$pageTitle = 'Peta Potensi';
$currentPage = 'peta';
$pageDescription = 'Peta potensi pertanian, UMKM, sumber air, dan demplot Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">Peta Potensi Pertanian</p>
      <h1>Titik potensi Desa Waru Barat</h1>
      <p>Gunakan halaman ini untuk merangkum area pertanian, sentra UMKM, sumber air, dan lokasi demplot.</p>
    </div>
  </section>

  <section class="section">
    <div class="container map-layout">
      <div class="village-map" aria-label="Ilustrasi peta potensi desa">
        <span class="map-point point-farm">Pertanian</span>
        <span class="map-point point-water">Sumber Air</span>
        <span class="map-point point-umkm">UMKM</span>
        <span class="map-point point-demo">Demplot</span>
        <strong>Ilustrasi Peta Potensi</strong>
      </div>
      <div class="potential-list">
        <?php foreach ($content['potentials'] as $potential): ?>
          <article class="potential-item">
            <p class="tag"><?= e($potential['category']); ?></p>
            <h2><?= e($potential['name']); ?></h2>
            <p><?= e($potential['description']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
