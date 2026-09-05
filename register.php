<?php
$basePath = '';
$pageTitle = 'Hesap Oluştur | NEXORA HOST';
$bodyClass = 'auth-shell';
require_once __DIR__ . '/includes/functions.php';
include __DIR__ . '/includes/header.php';
?>
<div class="auth-card">
  <p class="brand">NEXORA <span>HOST</span></p>
  <h1>Hesap Oluştur</h1>
  <form>
    <div class="inline-grid">
      <div><label for="ad">Ad</label><input id="ad" required></div>
      <div><label for="soyad">Soyad</label><input id="soyad" required></div>
    </div>
    <label for="eposta">E-posta</label><input id="eposta" type="email" required>
    <label for="telefon">Telefon</label><input id="telefon" type="tel" required>
    <label for="sifre">Şifre</label><input id="sifre" type="password" required>
    <label for="sifre2">Şifre tekrar</label><input id="sifre2" type="password" required>
    <p><label><input type="checkbox" required> KVKK ve kullanım şartlarını kabul ediyorum.</label></p>
    <button type="button" class="btn btn-primary" data-demo-toast="Kayıt sistemi backend entegrasyonu sonrası aktif olacaktır.">Hesap Oluştur</button>
  </form>
  <p class="form-note">Zaten hesabınız var mı? <a class="btn-link" href="login.php">Giriş yapın</a></p>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
