(function () {
  const forms = document.querySelectorAll('[data-ai-chat-form]');
  if (!forms.length) return;

  const api = {
    post: async (endpoint, payload) => {
      await new Promise((r) => setTimeout(r, 600));
      if (endpoint === '/api/ai/chat') {
        return { message: `Analiz tamamlandı: "${payload.message}" için kaynak kullanımını inceledim. Gerekirse yeniden başlatma adımı önerebilirim.` };
      }
      return { message: 'İstek alındı. Bu özellik API entegrasyonu sonrası aktif olacaktır.' };
    }
  };

  forms.forEach((form) => {
    const input = form.querySelector('input, textarea');
    const output = document.querySelector(form.getAttribute('data-output-target'));
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      if (!input || !output || !input.value.trim()) return;
      const msg = input.value.trim();
      output.insertAdjacentHTML('beforeend', `<div class="chat-row"><strong>Kullanıcı</strong><p>${msg}</p></div>`);
      input.value = '';
      output.insertAdjacentHTML('beforeend', '<div class="chat-row"><strong>NEXORA AI</strong><p>Sunucu verileri analiz ediliyor...</p></div>');
      const result = await api.post('/api/ai/chat', { message: msg });
      output.lastElementChild.querySelector('p').textContent = result.message;
      output.scrollTop = output.scrollHeight;
    });
  });
})();
