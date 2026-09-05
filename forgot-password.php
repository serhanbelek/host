<?php
$basePath = '';
$pageTitle = 'Şifre Sıfırla | NEXORA HOST';
$bodyClass = 'auth-shell';
require_once __DIR__ . '/includes/functions.php';
include __DIR__ . '/includes/header.php';
?>
<div class="auth-card">
  <p class="brand">NEXORA <span>HOST</span></p>
  <h1>Şifremi Unuttum</h1>
  <form onsubmit="event.preventDefault(); showToast('Şifre sıfırlama bağlantısı gönderildi (demo).', 'success');">
    <label for="resetMail">E-posta</label>
    <input id="resetMail" type="email" required>
    <button class="btn btn-primary" type="submit">Şifre sıfırlama bağlantısı gönder</button>
  </form>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
