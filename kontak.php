<?php
$pageTitle = 'Kontak';
$currentPage = 'kontak';
$pageDescription = 'Kontak kelompok KKN dan tautan informasi Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">Kontak</p>
        <h1>Informasi kontak dan tautan resmi</h1>
        <p>Ganti placeholder dengan kontak asli kelompok KKN, perangkat desa, Google Form, dan media sosial.</p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="<?= e($site['whatsapp_link']); ?>" target="_blank" rel="noopener">WhatsApp</a>
        <a class="btn btn-secondary" href="<?= e($site['form_link']); ?>" target="_blank" rel="noopener">Form Monitoring</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container contact-layout">
      <div class="contact-grid">
        <article class="contact-card reveal-on-scroll">
          <p class="tag">Kelompok</p>
          <h2><?= e($site['group']); ?></h2>
          <p>Identitas kelompok atau tim pengelola website.</p>
        </article>
        <article class="contact-card reveal-on-scroll">
          <p class="tag">Desa</p>
          <h2><?= e($site['village']); ?></h2>
          <p><?= e($site['district']); ?>, <?= e($site['regency']); ?></p>
        </article>
        <article class="contact-card reveal-on-scroll">
          <p class="tag">Kepala Desa</p>
          <h2><?= e($site['headman']); ?></h2>
          <p>Nama dapat diganti sesuai data resmi desa.</p>
        </article>
        <article class="contact-card reveal-on-scroll">
          <p class="tag">WhatsApp</p>
          <h2><?= e($site['whatsapp']); ?></h2>
          <div class="button-row">
            <a class="btn btn-primary dark" href="<?= e($site['whatsapp_link']); ?>" target="_blank" rel="noopener">Hubungi</a>
            <button class="btn btn-ghost" type="button" data-copy="<?= e($site['whatsapp']); ?>">Salin</button>
          </div>
        </article>
        <article class="contact-card reveal-on-scroll">
          <p class="tag">Form Monitoring</p>
          <h2>Google Form</h2>
          <div class="button-row">
            <a class="btn btn-primary dark" href="<?= e($site['form_link']); ?>" target="_blank" rel="noopener">Buka Form</a>
            <button class="btn btn-ghost" type="button" data-copy="<?= e($site['form_link']); ?>">Salin</button>
          </div>
        </article>
        <article class="contact-card reveal-on-scroll">
          <p class="tag">Instagram</p>
          <h2><?= e($site['instagram']); ?></h2>
          <div class="button-row">
            <a class="btn btn-primary dark" href="<?= e($site['instagram_link']); ?>" target="_blank" rel="noopener">Buka</a>
            <button class="btn btn-ghost" type="button" data-copy="<?= e($site['instagram']); ?>">Salin</button>
          </div>
        </article>
      </div>
      <aside class="qr-panel reveal-on-scroll">
        <p class="eyebrow">QR Website</p>
        <div class="qr-placeholder">
          <span>QR Code Website Akan Ditempel di Sini</span>
        </div>
        <dl class="mini-list">
          <div><dt>Link Website</dt><dd><?= e($site['website_link']); ?></dd></div>
          <div><dt>Status</dt><dd>Ganti setelah domain aktif</dd></div>
        </dl>
        <button class="btn btn-primary dark full" type="button" data-copy="<?= e($site['website_link']); ?>">Salin Link Website</button>
      </aside>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
