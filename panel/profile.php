<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$profile = getUser();
$basePath = '../';
$pageTitle = 'Profil | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Profil</h1></div>
<section class="panel-card"><h3>Kullanıcı Bilgileri</h3>
<form>
  <div class="inline-grid"><div><label for="first">Ad</label><input id="first" value="<?= htmlspecialchars($profile['first_name']) ?>"></div><div><label for="last">Soyad</label><input id="last" value="<?= htmlspecialchars($profile['last_name']) ?>"></div></div>
  <label for="mail">E-posta</label><input id="mail" type="email" value="<?= htmlspecialchars($profile['email']) ?>">
  <label for="phone">Telefon</label><input id="phone" value="<?= htmlspecialchars($profile['phone']) ?>">
  <label for="avatar">Profil fotoğrafı</label><input id="avatar" type="file" accept="image/*">
  <label for="pwd">Şifre değiştir</label><input id="pwd" type="password" placeholder="Yeni şifre">
  <button class="btn btn-primary" type="button" data-demo-toast="Profil güncelleme API entegrasyonu sonrası aktif olacak.">Kaydet</button>
</form></section></main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
