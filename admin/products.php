<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$products = getProducts();
$basePath = '../';
$pageTitle = 'Admin Ürünler';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Ürünler</h1><button class="btn btn-primary" data-demo-toast="Yeni ürün ekleme yakında aktif olacak.">Sunucu Oluştur</button></div>
<section class="cards-grid"><?php foreach($products as $p): ?><article class="panel-card"><h3><?= $p['name'] ?></h3><p class="price"><?= $p['price'] ?> / ay</p><p>Durum: <span class="status ok"><?= $p['stock'] ?></span></p><button class="btn btn-ghost" data-demo-toast="Ürün düzenleme yakında aktif olacak.">Düzenle</button></article><?php endforeach; ?></section>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
