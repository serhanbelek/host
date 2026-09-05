<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$tickets = getTickets();
$basePath = '../';
$pageTitle = 'Admin Ticketlar';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Ticket Yönetimi</h1></div>
<div class="panel-card"><div class="filter-row"><span class="pill">AI RESOLVED</span><span class="pill">HUMAN REQUIRED</span><span class="pill">OPEN</span><span class="pill">CLOSED</span></div>
<div class="table-wrap"><table><thead><tr><th>Ticket ID</th><th>Başlık</th><th>Durum</th><th>Kategori</th><th>Son Cevap</th></tr></thead><tbody><?php foreach($tickets as $t): ?><tr><td><?= $t['id'] ?></td><td><?= $t['title'] ?></td><td><span class="status <?= statusClass($t['status']) ?>"><?= strtoupper($t['status']) ?></span></td><td><?= $t['channel'] ?></td><td><?= $t['last_reply'] ?></td></tr><?php endforeach; ?></tbody></table></div></div>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
