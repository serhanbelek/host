<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$servers = getUserServers();
$basePath = '../';
$pageTitle = 'Sunucularım | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main">
  <div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Sunucularım</h1></div>
  <section class="server-grid">
    <?php foreach ($servers as $server): ?>
      <article class="panel-card">
        <h3><?= htmlspecialchars($server['name']) ?></h3>
        <p class="status <?= statusClass($server['status']) ?>"><?= htmlspecialchars($server['status']) ?></p>
        <p>IP: <?= htmlspecialchars($server['ip']) ?></p>
        <p><?= htmlspecialchars($server['plan']) ?></p>
        <p>CPU: <?= $server['cpu'] ?>%</p><div class="progress"><span style="width: <?= $server['cpu'] ?>%"></span></div>
        <p>RAM: <?= $server['ram'] ?>%</p><div class="progress"><span style="width: <?= $server['ram'] ?>%"></span></div>
        <p>Disk: <?= $server['disk'] ?>%</p><div class="progress"><span style="width: <?= $server['disk'] ?>%"></span></div>
        <div class="panel-actions" style="margin-top:10px">
          <a class="btn btn-ghost" href="/panel/server-details.php">Yönet</a>
          <button class="btn btn-ghost" data-demo-toast="Web console entegrasyonu yakında aktif olacak.">Konsol</button>
          <button class="btn btn-primary" data-confirm-action="Yeniden Başlat" data-modal-title="Sunucu yeniden başlatma" data-modal-body="Sunucuyu yeniden başlatmak istediğinize emin misiniz?">Yeniden Başlat</button>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
