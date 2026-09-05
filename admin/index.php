<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$stats = getDashboardStats('admin');
$basePath = '../';
$pageTitle = 'NEXORA ADMIN Dashboard';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>NEXORA ADMIN</h1></div>
<section class="admin-kpi"><?php foreach ($stats as $title => $value): ?><article class="metric-card"><h3><?= htmlspecialchars($title) ?></h3><strong><?= htmlspecialchars($value) ?></strong></article><?php endforeach; ?></section>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
