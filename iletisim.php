<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Suntek | İletişim</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body class="detail-page contact-page">
<?php include __DIR__ . '/includes/header-machine.php'; ?>
  <main class="detail-hero contact" aria-label="İletişim sayfası giriş alanı">
    <div class="detail-topbar">
      <a class="detail-back logo-link" href="/" title="Anasayfaya Git">
        <img src="assets/img/logo.png" alt="Suntek Makine Logosu" class="topbar-logo">
      </a>
      <nav class="topbar-menu" aria-label="Sayfa navigasyonu">
        <a href="/kurumsal" class="topbar-link">Kurumsal</a>
        <div class="topbar-dropdown">
          <button class="topbar-link dropdown-toggle" aria-expanded="false" aria-label="Hizmetler menüsü">
            Hizmetlerimiz
          </button>
          <div class="dropdown-menu">
            <a href="guc-trafosu-imalati" class="dropdown-item">Guc Trafosu Imalati</a>
            <a href="dagitim-trafosu-imalati" class="dropdown-item">Dagitim Trafosu Imalati</a>
            <a href="genlesme-deposu-imalati" class="dropdown-item">Genlesme Deposu Imalati</a>
            <a href="kablo-kutusu-imalati" class="dropdown-item">Kablo Kutusu Imalati</a>
            <a href="yardimci-ekipman" class="dropdown-item">Yardımcı Ekipman</a>
          </div>
        </div>
        <a href="sertifikalar" class="topbar-link">Sertifikalar</a>
        <a href="referanslar" class="topbar-link">Referanslar</a>
        <a href="iletisim" class="topbar-link">İletişim</a>
      </nav>
    </div>

    <section class="contact-hero-fullscreen" aria-label="İletişim bilgileri">
      <header class="contact-hero-header">
        <p class="detail-kicker" data-i18n="iletisim.kicker">Bize Ulaşın</p>
        <h1 class="detail-title" data-i18n="iletisim.title">İletişim</h1>
        <p class="detail-description" data-i18n="iletisim.desc">Sorularınız, önerileriniz ve iş birliği talepleriniz için departmanlarımızla doğrudan iletişime geçebilirsiniz.</p>
      </header>

      <div class="contact-fullscreen-grid">
        <section class="contact-fullscreen-block" aria-label="Departmanlarımız">
          <p class="detail-section-kicker" data-i18n="iletisim.dept.kicker">Departmanlarımız</p>
          <h2 class="detail-section-title" data-i18n="iletisim.dept.title">Birimlerimizle iletişime geçin</h2>
          <div class="contact-grid" aria-label="Departman iletişim kutuları">
            <article class="contact-card">
              <h3 class="contact-title" data-i18n="iletisim.dept.satis">Satış</h3>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.email">E-Posta</p>
                <a href="mailto:satis@suntekmak.com" class="contact-link">satis@suntekmak.com</a>
              </div>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.phone">Telefon</p>
                <a href="tel:+905309309901" class="contact-link">+90 530 930 99 01</a>
              </div>
            </article>

            <article class="contact-card">
              <h3 class="contact-title" data-i18n="iletisim.dept.muhasebe">Muhasebe</h3>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.email">E-Posta</p>
                <a href="mailto:muhasebe@suntekmak.com" class="contact-link">muhasebe@suntekmak.com</a>
              </div>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.phone">Telefon</p>
                <a href="tel:+905312614186" class="contact-link">+90 531 261 41 86</a>
              </div>
            </article>

            <article class="contact-card">
              <h3 class="contact-title" data-i18n="iletisim.dept.ik">İnsan Kaynakları</h3>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.email">E-Posta</p>
                <a href="mailto:ik@suntekmak.com" class="contact-link">ik@suntekmak.com</a>
              </div>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.phone">Telefon</p>
                <a href="tel:+905312614197" class="contact-link">+90 531 261 41 97</a>
              </div>
            </article>

            <article class="contact-card">
              <h3 class="contact-title" data-i18n="iletisim.dept.finans">Finans</h3>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.email">E-Posta</p>
                <a href="mailto:finans@suntekmak.com" class="contact-link">finans@suntekmak.com</a>
              </div>
              <div class="contact-info">
                <p class="contact-label" data-i18n="iletisim.label.phone">Telefon</p>
                <a href="tel:+905312614198" class="contact-link">+90 531 261 41 98</a>
              </div>
            </article>
          </div>
        </section>

        <section class="contact-fullscreen-block" aria-label="Genel bilgiler">
          <p class="detail-section-kicker" data-i18n="iletisim.info.kicker">Genel Bilgiler</p>
          <h2 class="detail-section-title" data-i18n="iletisim.info.title">Suntek Makine ve Enerji İletişim</h2>
          <div class=" " style="margin-top:10px;">
            <article class="company-info-card">
              <h3 class="info-card-title" data-i18n="iletisim.office.title">Merkez Ofis</h3>
              <div class="info-item">
                <p class="info-label" data-i18n="iletisim.label.address">Adres</p>
                <p class="info-value">Türkmen Beldesi, Cumhuriyet Mah. 907. Sk, No.:3 Toprakkale/Osmaniye, Türkiye</p>
              </div>
              <div class="info-item">
                <p class="info-label" data-i18n="iletisim.label.phone">Telefon</p>
                <a href="tel:+903288255515" class="contact-link">+90 (328) 825 55 15</a>
              </div>
              <div class="info-item">
                <p class="info-label" data-i18n="iletisim.label.email">E-Posta</p>
                <a href="mailto:info@suntekmak.com" class="contact-link">info@suntekmak.com</a>
              </div>
              <div class="info-item">
                <p class="info-label" data-i18n="iletisim.label.tax">Vergi Numarası</p>
                <p class="info-value">6190527826</p>
              </div> 
            </article> 
          </div>
        </section>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/includes/footer-machine.php'; ?>
</body>

</html>




