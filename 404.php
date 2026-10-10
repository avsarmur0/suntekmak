<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 | Sayfa Bulunamadı</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body class="detail-page">
<?php include __DIR__ . '/includes/header-machine.php'; ?>
  <main class="detail-hero machine" aria-label="404 sayfası">
    <div class="detail-topbar">
      <a class="detail-back logo-link" href="/" title="Anasayfaya Git">
        <img src="assets/img/logo.png" alt="Suntek Makine Logosu" class="topbar-logo">
      </a>
    </div>

    <div class="detail-shell">
      <section class="detail-content">
        <p class="detail-kicker">Hata</p>
        <h1 class="detail-title">404</h1>
        <p class="detail-description">Aradığınız sayfa bulunamadı. Ana sayfaya dönerek devam edebilirsiniz.</p>
        <nav class="detail-nav" aria-label="404 menü">
          <a href="/">Ana Sayfa</a>
          <a href="/iletisim">İletişim</a>
        </nav>
      </section>
    </div>
  </main>
  <?php include __DIR__ . '/includes/footer-machine.php'; ?>
</body>
</html>


