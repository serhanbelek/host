(function () {
  const toggle = document.querySelector('#billingToggle');
  if (!toggle) return;
  const prices = document.querySelectorAll('[data-monthly]');

  const update = () => {
    prices.forEach((node) => {
      const monthly = Number(node.getAttribute('data-monthly'));
      const yearly = Math.round(monthly * 12 * 0.8);
      node.textContent = toggle.checked ? `₺${yearly} / yıl` : `₺${monthly} / ay`;
    });
  };

  toggle.addEventListener('change', update);
  update();
})();
