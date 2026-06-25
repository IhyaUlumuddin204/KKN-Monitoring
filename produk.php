<?php
$pageTitle = 'Produk Unggulan';
$currentPage = 'produk';
$pageDescription = 'Produk unggulan dan potensi ekonomi Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">Produk Unggulan</p>
      <h1>Potensi produk lokal desa</h1>
      <p>Halaman ini dapat diisi dengan produk pertanian, perikanan, olahan pangan, kerajinan, dan produk UMKM warga.</p>
    </div>
  </section>

  <section class="section">
    <div class="container card-grid">
      <?php foreach ($content['products'] as $product): ?>
        <article class="data-card">
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
