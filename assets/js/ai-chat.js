(function () {
  const forms = document.querySelectorAll('[data-ai-chat-form]');
  if (!forms.length) return;

  const appendChatRow = (container, sender, message) => {
    const row = document.createElement('div');
    row.className = 'chat-row';
    const title = document.createElement('strong');
    title.textContent = sender;
    const body = document.createElement('p');
    body.textContent = message;
    row.append(title, body);
    container.appendChild(row);
    return row;
  };

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
      appendChatRow(output, 'Kullanıcı', msg);
      input.value = '';
      const pending = appendChatRow(output, 'NEXORA AI', 'Sunucu verileri analiz ediliyor...');
      const result = await api.post('/api/ai/chat', { message: msg });
      const pendingText = pending.querySelector('p');
      if (pendingText) pendingText.textContent = result.message;
      output.scrollTop = output.scrollHeight;
    });
  });
})();
