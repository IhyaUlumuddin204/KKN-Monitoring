<?php
$content = require __DIR__ . '/../data/content.php';
require_once __DIR__ . '/helpers.php';

$site = $content['site'];
$pageTitle = $pageTitle ?? $site['name'];
$currentPage = $currentPage ?? 'beranda';
$pageDescription = $pageDescription ?? $site['tagline'];

$navItems = [
    'beranda' => ['label' => 'Beranda', 'href' => 'index.php'],
    'profil' => ['label' => 'Profil Desa', 'href' => 'profil.php'],
    'umkm' => ['label' => 'UMKM', 'href' => 'umkm.php'],
    'produk' => ['label' => 'Produk', 'href' => 'produk.php'],
    'dokumentasi' => ['label' => 'Dokumentasi', 'href' => 'dokumentasi.php'],
    'peta' => ['label' => 'Peta Potensi', 'href' => 'peta-potensi.php'],
    'monitoring' => ['label' => 'Monitoring', 'href' => 'monitoring.php'],
    'kontak' => ['label' => 'Kontak', 'href' => 'kontak.php'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle); ?> | <?= e($site['short_name']); ?></title>
  <meta name="description" content="<?= e($pageDescription); ?>">
  <link rel="stylesheet" href="assets/css/desa.css">
</head>
<body class="page-<?= e($currentPage); ?>">
  <a class="skip-link" href="#main-content">Lewati ke konten</a>
  <header class="site-header">
    <nav class="navbar container" aria-label="Navigasi utama">
      <a class="brand" href="index.php">
        <span class="brand-mark">WB</span>
        <span><?= e($site['short_name']); ?></span>
      </a>
      <button class="nav-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="main-menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <ul class="nav-links" id="main-menu">
        <?php foreach ($navItems as $page => $item): ?>
          <li>
            <a class="<?= e(is_active($currentPage, $page)); ?>" href="<?= e($item['href']); ?>">
              <?= e($item['label']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>
