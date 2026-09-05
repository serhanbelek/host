(function () {
  const header = document.querySelector('.site-header');
  const mobileToggle = document.querySelector('[data-mobile-toggle]');
  const mobileNav = document.querySelector('.mobile-nav');

  const onScroll = () => {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 8);
  };
  onScroll();
  window.addEventListener('scroll', onScroll);

  if (mobileToggle && mobileNav) {
    mobileToggle.addEventListener('click', () => {
      const expanded = mobileToggle.getAttribute('aria-expanded') === 'true';
      mobileToggle.setAttribute('aria-expanded', String(!expanded));
      mobileNav.classList.toggle('open');
    });
  }

  const observer = 'IntersectionObserver' in window
    ? new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) entry.target.classList.add('visible');
        });
      }, { threshold: 0.1 })
    : null;

  document.querySelectorAll('.fade-in').forEach((el) => {
    if (observer) observer.observe(el);
    else el.classList.add('visible');
  });

  const toastContainer = document.createElement('div');
  toastContainer.className = 'toast-container';
  document.body.appendChild(toastContainer);

  window.showToast = function (message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.textContent = message;
    toastContainer.appendChild(toast);
    setTimeout(() => toast.remove(), 3400);
  };

  const modalOverlay = document.createElement('div');
  modalOverlay.className = 'modal-overlay';
  modalOverlay.innerHTML = '<div class="modal" role="dialog" aria-modal="true"><h3 id="modalTitle"></h3><p id="modalBody"></p><div class="modal-actions"><button class="btn btn-ghost" data-modal-cancel>İptal</button><button class="btn btn-primary" data-modal-confirm>Onayla</button></div></div>';
  document.body.appendChild(modalOverlay);

  let onConfirmHandler = null;
  const closeModal = () => modalOverlay.classList.remove('open');
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay || e.target.hasAttribute('data-modal-cancel')) closeModal();
    if (e.target.hasAttribute('data-modal-confirm') && typeof onConfirmHandler === 'function') {
      onConfirmHandler();
      closeModal();
    }
  });

  window.showModal = function ({ title, body, confirmText = 'Onayla', onConfirm }) {
    const t = modalOverlay.querySelector('#modalTitle');
    const b = modalOverlay.querySelector('#modalBody');
    const c = modalOverlay.querySelector('[data-modal-confirm]');
    t.textContent = title;
    b.textContent = body;
    c.textContent = confirmText;
    onConfirmHandler = onConfirm;
    modalOverlay.classList.add('open');
  };

  document.querySelectorAll('[data-demo-toast]').forEach((btn) => {
    btn.addEventListener('click', () => {
      showToast(btn.getAttribute('data-demo-toast'), 'info');
    });
  });
})();
