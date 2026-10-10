(function () {
  'use strict';

  var toggle   = document.getElementById('mobileNavToggle');
  var drawer   = document.getElementById('mobileNavDrawer');
  var closeBtn = document.getElementById('mobileNavClose');
  var backdrop = document.getElementById('mobileNavBackdrop');

  if (!toggle || !drawer) return;

  function openNav() {
    drawer.classList.add('is-open');
    toggle.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    drawer.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeNav() {
    drawer.classList.remove('is-open');
    toggle.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    drawer.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', function () {
    if (drawer.classList.contains('is-open')) {
      closeNav();
    } else {
      openNav();
    }
  });

  if (closeBtn)  closeBtn.addEventListener('click', closeNav);
  if (backdrop)  backdrop.addEventListener('click', closeNav);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  // Accordion sub-menus
  var accordionBtns = document.querySelectorAll('.mobile-nav-accordion-toggle');
  accordionBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var sub    = this.nextElementSibling;
      var isOpen = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
      if (sub) sub.classList.toggle('is-open', !isOpen);
    });
  });
})();
