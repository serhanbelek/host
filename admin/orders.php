<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$orders = getOrders();
$basePath = '../';
$pageTitle = 'Admin Siparişler';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Sipariş Yönetimi</h1></div>
<div class="panel-card table-wrap"><table><thead><tr><th>Sipariş</th><th>Kullanıcı</th><th>Ürün</th><th>Tutar</th><th>Durum</th><th>Provision</th></tr></thead><tbody>
<?php foreach ($orders as $o): ?><tr><td>#<?= $o['no'] ?></td><td>Demo User</td><td><?= $o['product'] ?></td><td><?= $o['amount'] ?></td><td><span class="status <?= statusClass($o['status']) ?>"><?= strtoupper($o['status']) ?></span></td><td><span class="status <?= statusClass($o['provision']) ?>"><?= $o['provision'] ?></span></td></tr><?php endforeach; ?>
</tbody></table></div>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
