<?php $site = $site ?? ($content['site'] ?? []); ?>
  <footer class="site-footer">
    <div class="container footer-layout">
      <div>
        <strong><?= e($site['name']); ?></strong>
        <p><?= e($site['tagline']); ?></p>
      </div>
      <div class="footer-meta">
        <p><?= e($site['program']); ?></p>
        <?php if (isset($navItems)): ?>
          <nav class="footer-links" aria-label="Navigasi footer">
            <?php foreach ($navItems as $item): ?>
              <a href="<?= e($item['href']); ?>"><?= e($item['label']); ?></a>
            <?php endforeach; ?>
          </nav>
        <?php endif; ?>
      </div>
    </div>
  </footer>

  <div class="toast" role="status" aria-live="polite"></div>
  <script src="assets/js/desa.js"></script>
</body>
</html>
