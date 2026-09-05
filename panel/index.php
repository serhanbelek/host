<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$user = getCurrentUser();
$stats = getDashboardStats('customer');
$basePath = '../';
$pageTitle = 'Panel Dashboard | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout">
  <?php include __DIR__ . '/../includes/sidebar.php'; ?>
  <main class="panel-main">
    <div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Hoş geldiniz, <?= htmlspecialchars($user['name']) ?>.</h1></div>
    <section class="metric-grid">
      <?php foreach ($stats as $title => $value): ?><article class="metric-card"><h3><?= htmlspecialchars($title) ?></h3><strong><?= htmlspecialchars($value) ?></strong></article><?php endforeach; ?>
    </section>
  </main>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
