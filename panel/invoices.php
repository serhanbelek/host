<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$orders = getOrders();
$basePath = '../';
$pageTitle = 'Faturalar | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Faturalar</h1></div>
<div class="panel-card table-wrap"><table><thead><tr><th>Fatura No</th><th>Tarih</th><th>Tutar</th><th>Durum</th><th>İşlem</th></tr></thead><tbody>
<?php foreach ($orders as $order): ?><tr><td>INV-<?= htmlspecialchars($order['no']) ?></td><td><?= htmlspecialchars($order['date']) ?></td><td><?= htmlspecialchars($order['amount']) ?></td><td><span class="status <?= statusClass($order['status']) ?>"><?= htmlspecialchars($order['status']) ?></span></td><td><button class="btn btn-ghost" data-demo-toast="PDF görüntüleme özelliği yakında aktif olacak.">PDF Görüntüle</button></td></tr><?php endforeach; ?>
</tbody></table></div>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
