<?php
$pageTitle = 'Dokumentasi KKN';
$currentPage = 'dokumentasi';
$pageDescription = 'Dokumentasi kegiatan KKN dan program potensi desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">Dokumentasi KKN</p>
      <h1>Timeline kegiatan dan dokumentasi lapangan</h1>
      <p>Ganti foto, tanggal, dan deskripsi sesuai kegiatan asli kelompok KKN.</p>
    </div>
  </section>

  <section class="section">
    <div class="container timeline">
      <?php foreach ($content['documentation'] as $item): ?>
        <article class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-card">
            <img src="<?= e($item['image']); ?>" alt="<?= e($item['title']); ?>">
            <div>
              <p class="meta"><?= e($item['date']); ?></p>
              <h2><?= e($item['title']); ?></h2>
              <p><?= e($item['description']); ?></p>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
