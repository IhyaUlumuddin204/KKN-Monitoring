<?php
$pageTitle = 'Monitoring Demplot';
$currentPage = 'monitoring';
$pageDescription = 'Monitoring sederhana demplot sawah terapung terintegrasi budidaya belut.';
require __DIR__ . '/includes/header.php';

$monitoring = $content['monitoring'];
$latest = $monitoring[count($monitoring) - 1];
?>

<main>
  <section class="page-header">
    <div class="container">
      <p class="eyebrow">Monitoring Demplot</p>
      <h1>Perkembangan sawah terapung dan belut</h1>
      <p>Data masih dummy dan dapat diganti di file <code>data/content.php</code>.</p>
    </div>
  </section>

  <section class="section">
    <div class="container monitor-summary">
      <article><p>Tinggi Terakhir</p><strong><?= e((string) $latest['tinggi']); ?> cm</strong></article>
      <article><p>Jumlah Daun</p><strong><?= e((string) $latest['daun']); ?></strong></article>
      <article><p>Belut Hidup</p><strong><?= e((string) $latest['hidup']); ?> ekor</strong></article>
      <article><p>Data Masuk</p><strong><?= count($monitoring); ?> minggu</strong></article>
    </div>

    <div class="container chart-card">
      <div class="section-head left">
        <p class="eyebrow">Grafik</p>
        <h2>Pertumbuhan tinggi padi dan jumlah daun</h2>
      </div>
      <canvas id="growthChart" class="chart-canvas" width="900" height="360"></canvas>
    </div>

    <div class="container table-card">
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
                <td><?= e($row['air']); ?></td>
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
</main>

<script>
window.monitoringData = <?= json_encode($monitoring, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
