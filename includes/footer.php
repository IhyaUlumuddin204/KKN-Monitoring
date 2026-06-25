<?php $site = $site ?? ($content['site'] ?? []); ?>
  <footer class="site-footer">
    <div class="container footer-layout">
      <div>
        <strong><?= e($site['name']); ?></strong>
        <p><?= e($site['tagline']); ?></p>
      </div>
      <p><?= e($site['program']); ?></p>
    </div>
  </footer>

  <script src="assets/js/desa.js"></script>
</body>
</html>
