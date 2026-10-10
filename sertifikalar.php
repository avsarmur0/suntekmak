<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Suntek | Sertifikalar</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body class="detail-page certificates-page">
  <?php include __DIR__ . '/includes/header-machine.php'; ?>
  <main class="detail-hero energy" aria-label="Sertifikalar sayfası giriş alanı">
    <section class="contact-hero-fullscreen" aria-label="Sertifikalar üst alanı">
      <header class="contact-hero-header">
        <p class="detail-kicker" data-i18n="sertifikalar.kicker">Kalite Sertifikaları</p>
        <h1 class="detail-title" data-i18n="sertifikalar.title">Sertifikalar</h1>
        <p class="detail-description" data-i18n="sertifikalar.desc">Aşağıdaki sertifikalar, SUNTEK'in kalite yönetimi, iş güvenliği, çevre yaklaşımı
          ve teknik üretim kabiliyetini belgelemektedir.</p>
      </header>

      <div class="contact-fullscreen-grid">
        <section class="detail-sections">
          <div class="detail-shell">
            <section class="detail-section">
              <p class="detail-section-kicker" data-i18n="sertifikalar.sec.kicker">Sertifika Galerisi</p>
              <h2 class="detail-section-title" data-i18n="sertifikalar.sec.title">Belgelendirilmiş kalite standartları</h2>

              <div class="certificates-gallery" aria-label="Sertifika görselleri galerisi">
                <figure class="certificate-card" data-fullscreen-image>
                  <img src="assets/img/certificates/ISO-9001.jpg" alt="ISO 9001" loading="lazy" />
                  <figcaption>ISO 9001</figcaption>
                </figure>
                <figure class="certificate-card" data-fullscreen-image>
                  <img src="assets/img/certificates/ISO-14001.jpg" alt="ISO 14001" loading="lazy" />
                  <figcaption>ISO 14001</figcaption>
                </figure>
                <figure class="certificate-card" data-fullscreen-image>
                  <img src="assets/img/certificates/ISO-45001.jpg" alt="ISO 45001" loading="lazy" />
                  <figcaption>ISO 45001</figcaption>
                </figure>
                <figure class="certificate-card" data-fullscreen-image>
                  <img src="assets/img/certificates/ISO-10002.jpg" alt="ISO 10002" loading="lazy" />
                  <figcaption>ISO 10002</figcaption>
                </figure>
                <figure class="certificate-card" data-fullscreen-image>
                  <img src="assets/img/certificates/ISO-EN-3834-scaled.jpg" alt="ISO EN 3834" loading="lazy" />
                  <figcaption>ISO EN 3834</figcaption>
                </figure>
                <figure class="certificate-card" data-fullscreen-image>
                  <img src="assets/img/certificates/EN-1090.jpg" alt="EN 1090" loading="lazy" />
                  <figcaption>EN 1090</figcaption>
                </figure>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
  </main>

  <div class="certificate-lightbox" id="certificateLightbox" aria-hidden="true" role="dialog"
    aria-label="Sertifika tam ekran görünüm">
    <button class="lightbox-close" type="button" aria-label="Tam ekranı kapat">Kapat</button>
    <img class="lightbox-image" src="" alt="" />
  </div>

  <script>
    (function () {
      const lightbox = document.getElementById("certificateLightbox");
      const lightboxImg = lightbox.querySelector(".lightbox-image");
      const closeBtn = lightbox.querySelector(".lightbox-close");
      const cards = document.querySelectorAll("[data-fullscreen-image]");
      const quickTiles = document.querySelectorAll("[data-certificate-src]");

      function openLightbox(src, alt) {
        lightboxImg.src = src;
        lightboxImg.alt = alt || "Sertifika";
        lightbox.classList.add("is-open");
        lightbox.setAttribute("aria-hidden", "false");
        document.body.classList.add("no-scroll");
      }

      function closeLightbox() {
        lightbox.classList.remove("is-open");
        lightbox.setAttribute("aria-hidden", "true");
        document.body.classList.remove("no-scroll");
        lightboxImg.src = "";
      }

      cards.forEach((card) => {
        card.tabIndex = 0;
        card.addEventListener("click", () => {
          const img = card.querySelector("img");
          if (!img) return;
          openLightbox(img.src, img.alt);
        });

        card.addEventListener("keydown", (event) => {
          if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            const img = card.querySelector("img");
            if (!img) return;
            openLightbox(img.src, img.alt);
          }
        });
      });

      quickTiles.forEach((tile) => {
        tile.addEventListener("click", () => {
          const src = tile.getAttribute("data-certificate-src");
          const alt = tile.getAttribute("data-certificate-alt") || "Sertifika";
          if (!src) return;
          openLightbox(src, alt);
        });
      });

      closeBtn.addEventListener("click", closeLightbox);
      lightbox.addEventListener("click", (event) => {
        if (event.target === lightbox) closeLightbox();
      });

      document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && lightbox.classList.contains("is-open")) {
          closeLightbox();
        }
      });
    })();
  </script>
  <?php include __DIR__ . '/includes/footer-machine.php'; ?>
</body>

</html>