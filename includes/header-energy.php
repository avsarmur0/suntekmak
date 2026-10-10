<div class="site-preloader" id="sitePreloader" aria-hidden="true">
  <div class="site-preloader-text">SUNTEK</div>
</div>

<header class="site-header" aria-label="Enerji üst menü">
  <div class="site-header-shell">
    <a class="detail-back logo-link" href="/" title="Anasayfaya Git">
      <img src="assets/img/logo.png" alt="Suntek Makine Logosu" class="topbar-logo">
    </a>

    <nav class="topbar-menu" aria-label="Sayfa navigasyonu">
      <a href="/kurumsal" class="topbar-link" data-i18n="nav.corporate">Kurumsal</a>
      <div class="topbar-dropdown">
        <button class="topbar-link dropdown-toggle" aria-expanded="false" aria-label="Hizmetler menüsü">
          <span data-i18n="nav.services">Hizmetlerimiz</span>
        </button>
        <div class="dropdown-menu">
          <a href="/guc-trafosu-imalati" class="dropdown-item" data-i18n="esvc.guc">Güç Trafosu İmalatı</a>
          <a href="/dagitim-trafosu-imalati" class="dropdown-item" data-i18n="esvc.dagitim">Dağıtım Trafosu İmalatı</a>
          <a href="/genlesme-deposu-imalati" class="dropdown-item" data-i18n="esvc.genlesme">Genleşme Deposu İmalatı</a>
          <a href="/kablo-kutusu-imalati" class="dropdown-item" data-i18n="esvc.kablo">Kablo Kutusu İmalatı</a>
          <a href="/yardimci-ekipman" class="dropdown-item" data-i18n="esvc.yardimci">Yardımcı Ekipman</a>
        </div>
      </div>
      <a href="/sertifikalar" class="topbar-link" data-i18n="nav.certificates">Sertifikalar</a>
      <a href="/referanslar" class="topbar-link" data-i18n="nav.references">Referanslar</a>
      <a href="/iletisim" class="topbar-link" data-i18n="nav.contact">İletişim</a>
    </nav>

    <select class="lang-switcher lang-select" aria-label="Dil seçin">
      <option value="tr">TR</option>
      <option value="en">EN</option>
      <option value="de">DE</option>
      <option value="fr">FR</option>
    </select>

    <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Menüyü Aç/Kapat" aria-expanded="false">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
  </div>
</header>

<!-- Mobile Nav Drawer -->
<div class="mobile-nav-drawer" id="mobileNavDrawer" aria-hidden="true">
  <div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
  <div class="mobile-nav-panel">
    <div class="mobile-nav-header">
      <a href="/" class="logo-link" title="Anasayfaya Git">
        <img src="assets/img/logo.png" alt="Suntek" class="topbar-logo">
      </a>
      <button class="mobile-nav-close" id="mobileNavClose" aria-label="Menüyü Kapat">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
          <path d="M1 1L13 13M13 1L1 13" stroke="#e8f2ff" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
    </div>
    <nav class="mobile-nav-links" aria-label="Mobil navigasyon">
      <a href="/kurumsal" class="mobile-nav-item" data-i18n="nav.corporate">Kurumsal</a>
      <div class="mobile-nav-accordion">
        <button class="mobile-nav-item mobile-nav-accordion-toggle" aria-expanded="false">
          <span data-i18n="nav.services">Hizmetlerimiz</span><span class="accordion-arrow">›</span>
        </button>
        <div class="mobile-nav-sub">
          <a href="/guc-trafosu-imalati" data-i18n="esvc.guc">Güç Trafosu İmalatı</a>
          <a href="/dagitim-trafosu-imalati" data-i18n="esvc.dagitim">Dağıtım Trafosu İmalatı</a>
          <a href="/genlesme-deposu-imalati" data-i18n="esvc.genlesme">Genleşme Deposu İmalatı</a>
          <a href="/kablo-kutusu-imalati" data-i18n="esvc.kablo">Kablo Kutusu İmalatı</a>
          <a href="/yardimci-ekipman" data-i18n="esvc.yardimci">Yardımcı Ekipman</a>
        </div>
      </div>
      <a href="/sertifikalar" class="mobile-nav-item" data-i18n="nav.certificates">Sertifikalar</a>
      <a href="/referanslar" class="mobile-nav-item" data-i18n="nav.references">Referanslar</a>
      <a href="/iletisim" class="mobile-nav-item" data-i18n="nav.contact">İletişim</a>
    </nav>
    <div class="mobile-nav-footer" data-i18n="mobile.footer">© Suntek Makine &amp; Enerji</div>
  </div>
</div>
<script>
  (function () {
    var header = document.querySelector('.site-header');
    function onScroll() {
      header.classList.toggle('scrolled', window.scrollY > 40);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  })();
</script>
