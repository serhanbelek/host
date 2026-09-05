<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$basePath = '../';
$pageTitle = 'Admin Ayarlar';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Admin Ayarlar</h1></div>
<section class="panel-card"><form>
  <label for="lang">Panel Dili</label><select id="lang"><option>Türkçe</option><option>English</option></select>
  <label for="timezone">Saat Dilimi</label><select id="timezone"><option>Europe/Istanbul</option><option>Europe/Berlin</option></select>
  <p><label><input type="checkbox" checked> Sistem bakım bildirimlerini e-posta ile gönder</label></p>
  <p><label><input type="checkbox" checked> AI log raporlarını günlük oluştur</label></p>
  <button class="btn btn-primary" type="button" data-demo-toast="Admin ayarları kaydedildi (demo).">Kaydet</button>
</form></section>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
