<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$basePath = '../';
$pageTitle = 'Admin AI Panel';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>AI Yönetim Paneli</h1></div>
<section class="admin-kpi">
  <article class="metric-card"><h3>AI tarafından cevaplanan ticket</h3><strong>1,248</strong></article>
  <article class="metric-card"><h3>Otomatik çözülen</h3><strong>934</strong></article>
  <article class="metric-card"><h3>İnsana aktarılan</h3><strong>314</strong></article>
  <article class="metric-card"><h3>AI başarı oranı</h3><strong>74.8%</strong></article>
  <article class="metric-card"><h3>AI Durumu</h3><strong>Operational</strong></article>
</section>
<section class="chart-grid" style="margin-top:12px">
  <article class="panel-card chart-box"><h3>AI Response Trend</h3><canvas data-mini-chart data-values="60,66,70,68,72,74,75" width="380" height="160"></canvas></article>
  <article class="panel-card chart-box"><h3>Escalation Rate</h3><canvas data-mini-chart data-values="40,35,32,31,29,26,25" width="380" height="160"></canvas></article>
</section>
<section class="panel-card" style="margin-top:12px"><h3>AI Settings</h3><p><label><input type="checkbox" checked> Otomatik ticket yanıtlarını aktif et</label></p><p><label><input type="checkbox" checked> Kritik durumlarda insana aktar</label></p><button class="btn btn-primary" data-demo-toast="AI ayarları kaydedildi (demo).">Ayarları Kaydet</button></section>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
