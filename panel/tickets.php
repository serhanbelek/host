<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$tickets = getTickets();
$basePath = '../';
$pageTitle = 'Destek Talepleri | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Destek Talepleri</h1><button class="btn btn-primary" data-demo-toast="Yeni destek talebi formu yakında aktif olacak.">Destek Talebi Oluştur</button></div>
<section class="cards-grid">
<?php foreach ($tickets as $ticket): ?><article class="panel-card"><h3><?= htmlspecialchars($ticket['title']) ?></h3><p>Ticket ID: <?= htmlspecialchars($ticket['id']) ?></p><p>Durum: <span class="status <?= statusClass($ticket['status']) ?>"><?= htmlspecialchars($ticket['status']) ?></span></p><p>Son cevap: <?= htmlspecialchars($ticket['last_reply']) ?></p><span class="pill"><?= htmlspecialchars($ticket['channel']) ?></span></article><?php endforeach; ?>
</section></main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
