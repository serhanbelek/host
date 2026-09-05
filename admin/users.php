<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$users = [
  ['name' => 'Serhan Demo', 'email' => 'serhan@example.com', 'servers' => 2, 'spent' => '₺1,245', 'date' => '2026-05-20', 'status' => 'ACTIVE'],
  ['name' => 'Ayşe Yılmaz', 'email' => 'ayse@example.com', 'servers' => 1, 'spent' => '₺560', 'date' => '2026-06-11', 'status' => 'ACTIVE'],
  ['name' => 'Mert Aksoy', 'email' => 'mert@example.com', 'servers' => 0, 'spent' => '₺0', 'date' => '2026-08-02', 'status' => 'SUSPENDED']
];
$basePath = '../';
$pageTitle = 'Admin Kullanıcılar';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Kullanıcı Yönetimi</h1></div>
<div class="panel-card"><div class="filter-row"><input placeholder="Ad veya e-posta ile ara"></div>
<div class="table-wrap"><table><thead><tr><th>Ad</th><th>E-posta</th><th>Sunucu</th><th>Toplam Harcama</th><th>Kayıt</th><th>Durum</th><th>İşlem</th></tr></thead><tbody><?php foreach($users as $u): ?><tr><td><?= $u['name'] ?></td><td><?= $u['email'] ?></td><td><?= $u['servers'] ?></td><td><?= $u['spent'] ?></td><td><?= $u['date'] ?></td><td><span class="status <?= statusClass($u['status']) ?>"><?= $u['status'] ?></span></td><td><button class="btn btn-ghost" data-demo-toast="Kullanıcı detayı yakında.">Görüntüle</button> <button class="btn btn-ghost" data-demo-toast="Askıya alma API entegrasyonu sonrası aktif olacak.">Askıya Al</button></td></tr><?php endforeach; ?></tbody></table></div></div>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
