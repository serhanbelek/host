<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('admin');
$servers = [
  ['id' => 'SV-2041', 'customer' => 'Serhan Demo', 'ip' => '185.xxx.xxx.xxx', 'node' => 'TR-01', 'resource' => '4vCPU / 8GB / 100GB', 'status' => 'ONLINE'],
  ['id' => 'SV-2042', 'customer' => 'Ayşe Yılmaz', 'ip' => '185.xxx.xxx.54', 'node' => 'DE-02', 'resource' => '8vCPU / 16GB / 200GB', 'status' => 'CREATING'],
  ['id' => 'SV-2043', 'customer' => 'Ozan Kaya', 'ip' => '185.xxx.xxx.87', 'node' => 'NL-01', 'resource' => '2vCPU / 4GB / 50GB', 'status' => 'SUSPENDED']
];
$basePath = '../';
$pageTitle = 'Admin Sunucular';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/admin-sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>Sunucu Yönetimi</h1></div>
<div class="panel-card"><div class="filter-row"><input placeholder="Sunucu ID veya IP ile ara"><select><option>Tüm Durumlar</option><option>ONLINE</option><option>OFFLINE</option><option>SUSPENDED</option><option>CREATING</option><option>ERROR</option></select></div>
<div class="table-wrap"><table><thead><tr><th>Sunucu ID</th><th>Müşteri</th><th>IP</th><th>Node</th><th>Kaynak</th><th>Durum</th></tr></thead><tbody><?php foreach ($servers as $s): ?><tr><td><?= $s['id'] ?></td><td><?= $s['customer'] ?></td><td><?= $s['ip'] ?></td><td><?= $s['node'] ?></td><td><?= $s['resource'] ?></td><td><span class="status <?= statusClass($s['status']) ?>"><?= $s['status'] ?></span></td></tr><?php endforeach; ?></tbody></table></div></div>
</main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
