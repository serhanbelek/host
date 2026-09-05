<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$status = getServerStatus();
$basePath = '../';
$pageTitle = 'Sunucu Detayı | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main">
  <div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>NEXORA VPS PRO</h1></div>
  <article class="panel-card">
    <p class="status <?= statusClass($status['status']) ?>"><?= htmlspecialchars($status['status']) ?></p>
    <p>IP: 185.xxx.xxx.xxx</p><p>Lokasyon: <?= htmlspecialchars($status['location']) ?></p><p>İşletim Sistemi: <?= htmlspecialchars($status['os']) ?></p>
    <p>CPU: <?= htmlspecialchars($status['cpu']) ?> • RAM: <?= htmlspecialchars($status['ram']) ?> • Disk: <?= htmlspecialchars($status['disk']) ?> • Network: <?= htmlspecialchars($status['network']) ?></p>
    <div class="panel-actions">
      <button class="btn btn-ghost" data-confirm-action="Start" data-modal-body="Sunucuyu başlatmak istiyor musunuz?">Start</button>
      <button class="btn btn-ghost" data-confirm-action="Stop" data-modal-body="Sunucuyu durdurmak istiyor musunuz?">Stop</button>
      <button class="btn btn-primary" data-confirm-action="Restart" data-modal-body="Sunucuyu yeniden başlatmak istiyor musunuz?">Restart</button>
      <button class="btn btn-ghost" data-confirm-action="Reinstall" data-modal-body="Sunucuyu yeniden kurmak istiyor musunuz?">Reinstall</button>
      <button class="btn btn-ghost" data-demo-toast="Console API entegrasyonu sonrası aktif olacak.">Console</button>
      <button class="btn btn-ghost" data-demo-toast="Backup API entegrasyonu sonrası aktif olacak.">Backup</button>
    </div>
  </article>
  <section class="chart-grid" style="margin-top:12px">
    <article class="panel-card chart-box"><h3>CPU Usage</h3><canvas data-mini-chart data-values="20,25,18,31,36,30,23" width="380" height="160"></canvas></article>
    <article class="panel-card chart-box"><h3>RAM Usage</h3><canvas data-mini-chart data-values="35,38,40,43,42,44,41" width="380" height="160"></canvas></article>
    <article class="panel-card chart-box"><h3>Disk Usage</h3><canvas data-mini-chart data-values="25,28,30,34,33,36,38" width="380" height="160"></canvas></article>
    <article class="panel-card chart-box"><h3>Network Traffic</h3><canvas data-mini-chart data-values="10,22,16,28,19,33,26" width="380" height="160"></canvas></article>
  </section>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
