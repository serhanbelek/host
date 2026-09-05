(function () {
  const sidebar = document.querySelector('.sidebar');
  const burger = document.querySelector('[data-sidebar-toggle]');
  if (burger && sidebar) {
    burger.addEventListener('click', () => sidebar.classList.toggle('open'));
  }

  document.querySelectorAll('[data-confirm-action]').forEach((button) => {
    button.addEventListener('click', () => {
      const action = button.getAttribute('data-confirm-action');
      const title = button.getAttribute('data-modal-title') || 'İşlem Onayı';
      const body = button.getAttribute('data-modal-body') || 'Bu işlemi yapmak istediğinize emin misiniz?';
      window.showModal({
        title,
        body,
        confirmText: action,
        onConfirm: () => window.showToast('Bu özellik API entegrasyonu sonrası aktif olacaktır.', 'info')
      });
    });
  });

  const charts = document.querySelectorAll('[data-mini-chart]');
  charts.forEach((canvas) => {
    const ctx = canvas.getContext('2d');
    if (!ctx) return;
    const points = (canvas.getAttribute('data-values') || '22,34,28,45,38,42,36').split(',').map(Number);
    const w = canvas.width;
    const h = canvas.height;
    ctx.clearRect(0, 0, w, h);
    ctx.strokeStyle = '#22d3ee';
    ctx.lineWidth = 2;
    ctx.beginPath();
    points.forEach((value, index) => {
      const x = (w / (points.length - 1)) * index;
      const y = h - ((value / 100) * (h - 20)) - 10;
      if (index === 0) ctx.moveTo(x, y);
      else ctx.lineTo(x, y);
    });
    ctx.stroke();
  });
})();
