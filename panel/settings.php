<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$basePath = '../';
$pageTitle = 'Ayarlar | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Ayarlar</h1></div>
<section class="panel-card"><form>
  <p><label><input type="checkbox" checked> E-posta bildirimleri</label></p>
  <p><label><input type="checkbox" checked> Sunucu bildirimleri</label></p>
  <p><label><input type="checkbox" checked> Fatura bildirimleri</label></p>
  <p><label><input type="checkbox" checked> AI destek bildirimleri</label></p>
  <label for="theme">Tema</label><select id="theme"><option>Dark</option></select>
  <label for="lang">Dil</label><select id="lang"><option>Türkçe</option></select>
  <button class="btn btn-primary" type="button" data-demo-toast="Ayarlar kaydedildi (demo).">Ayarları Kaydet</button>
</form></section></main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
