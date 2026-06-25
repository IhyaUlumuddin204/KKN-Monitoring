<?php
$pageTitle = 'Monitoring Demplot';
$currentPage = 'monitoring';
$pageDescription = 'Monitoring sederhana demplot sawah terapung terintegrasi budidaya belut.';
require __DIR__ . '/includes/header.php';

$monitoring = $content['monitoring'];
$latest = $monitoring ? $monitoring[count($monitoring) - 1] : null;
$totalDead = array_sum(array_column($monitoring, 'mati'));
?>

<main id="main-content">
  <section class="page-header">
    <div class="container page-header-inner">
      <div>
        <p class="eyebrow">Monitoring Demplot</p>
        <h1>Perkembangan sawah terapung dan belut</h1>
        <p>Data masih dummy dan dapat diganti di file <code>data/content.php</code>.</p>
      </div>
      <div class="page-actions">
        <a class="btn btn-primary" href="#grafik">Lihat Grafik</a>
        <a class="btn btn-secondary" href="#tabel">Lihat Tabel</a>
      </div>
    </div>
  </section>

  <section class="section">
    <?php if ($latest): ?>
      <div class="container monitor-summary">
        <article class="reveal-on-scroll"><p>Tinggi Terakhir</p><strong><?= e((string) $latest['tinggi']); ?> cm</strong><small><?= e(format_date_id($latest['tanggal'])); ?></small></article>
        <article class="reveal-on-scroll"><p>Jumlah Daun</p><strong><?= e((string) $latest['daun']); ?></strong><small>Minggu ke-<?= e((string) $latest['minggu']); ?></small></article>
        <article class="reveal-on-scroll"><p>Belut Hidup</p><strong><?= e((string) $latest['hidup']); ?> ekor</strong><small>Kondisi air: <?= e($latest['air']); ?></small></article>
        <article class="reveal-on-scroll"><p>Belut Mati</p><strong><?= e((string) $totalDead); ?> ekor</strong><small>Akumulasi data dummy</small></article>
      </div>
    <?php endif; ?>

    <div class="container chart-card reveal-on-scroll" id="grafik">
      <div class="section-head left">
        <p class="eyebrow">Grafik</p>
        <h2>Pertumbuhan tinggi padi dan jumlah daun</h2>
        <p>Grafik ini dibuat dengan JavaScript vanilla dan HTML canvas, jadi tidak memakai library eksternal.</p>
      </div>
      <canvas id="growthChart" class="chart-canvas" width="900" height="360"></canvas>
    </div>

    <div class="container table-card reveal-on-scroll" id="tabel">
      <div class="table-head">
        <div>
          <p class="eyebrow">Tabel Monitoring</p>
          <h2>Catatan perkembangan mingguan</h2>
        </div>
        <span><?= count($monitoring); ?> data</span>
      </div>
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Minggu</th>
              <th>Tinggi</th>
              <th>Daun</th>
              <th>Kondisi Air</th>
              <th>Belut Hidup</th>
              <th>Belut Mati</th>
              <th>Catatan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($monitoring as $row): ?>
              <tr>
                <td><?= e(format_date_id($row['tanggal'])); ?></td>
                <td><?= e((string) $row['minggu']); ?></td>
                <td><?= e((string) $row['tinggi']); ?> cm</td>
                <td><?= e((string) $row['daun']); ?></td>
                <td><span class="status-pill"><?= e($row['air']); ?></span></td>
                <td><?= e((string) $row['hidup']); ?></td>
                <td><?= e((string) $row['mati']); ?></td>
                <td><?= e($row['catatan']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container cta-band reveal-on-scroll">
      <div>
        <p class="eyebrow">Cara Update</p>
        <h2>Tambah data baru di array monitoring</h2>
        <p>Buka <code>data/content.php</code>, cari komentar <code>GANTI DATA MONITORING DI SINI</code>, lalu tambah baris tanggal, minggu, tinggi padi, daun, kondisi air, dan catatan.</p>
      </div>
      <a class="btn btn-primary dark" href="kontak.php">Buka Form Monitoring</a>
    </div>
  </section>
</main>

<script>
window.monitoringData = <?= json_encode($monitoring, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
