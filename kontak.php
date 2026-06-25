<?php
$pageTitle = 'Kontak';
$currentPage = 'kontak';
$pageDescription = 'Kontak kelompok KKN dan tautan informasi Desa Waru Barat.';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">Kontak</p>
      <h1>Informasi kontak dan tautan resmi</h1>
      <p>Ganti placeholder dengan kontak asli kelompok KKN dan perangkat desa.</p>
    </div>
  </section>

  <section class="section">
    <div class="container contact-layout">
      <div class="contact-grid">
        <article class="contact-card">
          <p class="tag">Kelompok</p>
          <h2><?= e($site['group']); ?></h2>
          <p>Identitas kelompok atau tim pengelola website.</p>
        </article>
        <article class="contact-card">
          <p class="tag">Desa</p>
          <h2><?= e($site['village']); ?></h2>
          <p><?= e($site['district']); ?>, <?= e($site['regency']); ?></p>
        </article>
        <article class="contact-card">
          <p class="tag">Kepala Desa</p>
          <h2><?= e($site['headman']); ?></h2>
          <p>Nama dapat diganti sesuai data resmi desa.</p>
        </article>
        <article class="contact-card">
          <p class="tag">WhatsApp</p>
          <h2><?= e($site['whatsapp']); ?></h2>
          <a class="btn btn-primary dark" href="<?= e($site['whatsapp_link']); ?>" target="_blank" rel="noopener">Hubungi WhatsApp</a>
        </article>
        <article class="contact-card">
          <p class="tag">Form Monitoring</p>
          <h2>Google Form</h2>
          <a class="btn btn-primary dark" href="<?= e($site['form_link']); ?>" target="_blank" rel="noopener">Buka Form</a>
        </article>
        <article class="contact-card">
          <p class="tag">Instagram</p>
          <h2><?= e($site['instagram']); ?></h2>
          <a class="btn btn-primary dark" href="<?= e($site['instagram_link']); ?>" target="_blank" rel="noopener">Buka Instagram</a>
        </article>
      </div>
      <aside class="qr-panel">
        <p class="eyebrow">QR Website</p>
        <div class="qr-placeholder">
          <span>QR Code Website Akan Ditempel di Sini</span>
        </div>
        <p>Setelah website online di hosting PHP, buat QR Code dari link website dan tempel di bagian ini.</p>
      </aside>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
