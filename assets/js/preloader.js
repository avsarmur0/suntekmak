(function () {
  const preloader = document.getElementById("sitePreloader");
  if (!preloader) return;

  document.body.classList.add("preloader-active");

  const hidePreloader = function () {
    if (preloader.classList.contains("is-hidden")) return;
    preloader.classList.add("is-hidden");
    document.body.classList.remove("preloader-active");

    window.setTimeout(function () {
      if (preloader && preloader.parentNode) {
        preloader.parentNode.removeChild(preloader);
      }
    }, 420);
  };

  window.addEventListener(
    "load",
    function () {
      window.requestAnimationFrame(function () {
        window.setTimeout(hidePreloader, 120);
      });
    },
    { once: true }
  );

  window.setTimeout(hidePreloader, 2200);
})();
