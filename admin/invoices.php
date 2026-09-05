<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$orders = getOrders();
$basePath = '../';
$pageTitle = 'Admin Faturalar';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Fatura Yönetimi</h1></div>
<div class="panel-card table-wrap"><table><thead><tr><th>Fatura No</th><th>Tarih</th><th>Tutar</th><th>Durum</th><th>İşlem</th></tr></thead><tbody><?php foreach($orders as $o): ?><tr><td>INV-<?= $o['no'] ?></td><td><?= $o['date'] ?></td><td><?= $o['amount'] ?></td><td><span class="status <?= statusClass($o['status']) ?>"><?= strtoupper($o['status']) ?></span></td><td><button class="btn btn-ghost" data-demo-toast="PDF export yakında aktif olacak.">PDF Görüntüle</button></td></tr><?php endforeach; ?></tbody></table></div>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
