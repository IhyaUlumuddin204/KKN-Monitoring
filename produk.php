<?php
$pageTitle = 'Produk Unggulan';
$currentPage = 'produk';
$pageDescription = 'Produk unggulan dan potensi ekonomi Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">Produk Unggulan</p>
        <h1>Potensi produk lokal desa</h1>
        <p>Halaman ini dapat diisi dengan produk pertanian, perikanan, olahan pangan, kerajinan, dan produk UMKM warga.</p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="umkm.php">Lihat UMKM</a>
        <a class="btn btn-secondary" href="peta-potensi.php">Peta Potensi</a>
      </div>
    </div>
  </section>

  <section class="section section-compact">
    <div class="container product-highlight reveal-on-scroll">
      <div>
        <p class="eyebrow">Sorotan Desa</p>
        <h2>Produk unggulan menjadi pintu masuk untuk mengenalkan potensi Waru Barat</h2>
        <p>Gunakan halaman ini untuk menampilkan produk yang paling mudah dikenalkan ke warga luar desa, mitra, atau dosen pembimbing.</p>
      </div>
      <div class="highlight-number">
        <strong><?= count($content['products']); ?></strong>
        <span>kategori contoh</span>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container card-grid">
      <?php foreach ($content['products'] as $product): ?>
        <article class="data-card reveal-on-scroll">
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

  <section class="section section-soft">
    <div class="container cta-band reveal-on-scroll">
      <div>
        <p class="eyebrow">Tips Konten</p>
        <h2>Lengkapi setiap produk dengan foto nyata dan cerita singkat</h2>
        <p>Foto proses produksi, bahan baku lokal, harga, kontak, dan manfaat produk akan membuat halaman ini jauh lebih kuat.</p>
      </div>
      <a class="btn btn-primary dark" href="dokumentasi.php">Lihat Dokumentasi</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
