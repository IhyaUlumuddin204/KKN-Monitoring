<?php
$pageTitle = 'UMKM Desa';
$currentPage = 'umkm';
$pageDescription = 'Daftar UMKM dan usaha warga Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">UMKM Desa</p>
      <h1>Usaha warga dan ekonomi lokal Waru Barat</h1>
      <p>Ganti data dummy ini dengan nama usaha, pemilik, foto, alamat, dan kontak UMKM asli.</p>
    </div>
  </section>

  <section class="section">
    <div class="container card-grid">
      <?php foreach ($content['umkm'] as $item): ?>
        <article class="data-card">
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
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
