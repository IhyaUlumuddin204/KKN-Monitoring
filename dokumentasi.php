<?php
$pageTitle = 'Dokumentasi KKN';
$currentPage = 'dokumentasi';
$pageDescription = 'Dokumentasi kegiatan KKN dan program potensi desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">Dokumentasi KKN</p>
        <h1>Timeline kegiatan dan dokumentasi lapangan</h1>
        <p>Ganti foto, tanggal, dan deskripsi sesuai kegiatan asli kelompok KKN.</p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="#timeline">Timeline</a>
        <a class="btn btn-secondary" href="#galeri">Galeri</a>
      </div>
    </div>
  </section>

  <section class="section section-compact">
    <div class="container quick-grid">
      <article class="quick-card reveal-on-scroll">
        <span>Kegiatan</span>
        <strong><?= count($content['documentation']); ?> catatan</strong>
      </article>
      <article class="quick-card reveal-on-scroll">
        <span>Galeri</span>
        <strong><?= count($content['gallery']); ?> foto dummy</strong>
      </article>
      <article class="quick-card reveal-on-scroll">
        <span>Fokus</span>
        <strong>Profil desa dan demplot</strong>
      </article>
      <article class="quick-card reveal-on-scroll">
        <span>Output</span>
        <strong>Arsip kegiatan KKN</strong>
      </article>
    </div>
  </section>

  <section class="section" id="timeline">
    <div class="container section-intro reveal-on-scroll">
      <div>
        <p class="eyebrow">Timeline</p>
        <h2>Urutan kegiatan program KKN</h2>
        <p>Isi bagian ini dengan progres mingguan, kunjungan lapangan, pendataan UMKM, dan aktivitas monitoring demplot.</p>
      </div>
      <div class="summary-badge">
        <strong><?= count($content['documentation']); ?></strong>
        <span>catatan kegiatan</span>
      </div>
    </div>
    <div class="container timeline">
      <?php foreach ($content['documentation'] as $item): ?>
        <article class="timeline-item reveal-on-scroll">
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

  <section class="section section-soft" id="galeri">
    <div class="container section-intro reveal-on-scroll">
      <div>
        <p class="eyebrow">Galeri</p>
        <h2>Foto kegiatan pilihan</h2>
        <p>Ganti gambar placeholder dengan foto asli kegiatan KKN, UMKM, produk desa, dan demplot sawah terapung.</p>
      </div>
      <div class="summary-badge water">
        <strong><?= count($content['gallery']); ?></strong>
        <span>foto dummy</span>
      </div>
    </div>
    <div class="container gallery-grid">
      <?php foreach ($content['gallery'] as $photo): ?>
        <figure class="gallery-card reveal-on-scroll">
          <img src="<?= e($photo['image']); ?>" alt="<?= e($photo['caption']); ?>">
          <figcaption><?= e($photo['caption']); ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
