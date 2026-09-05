<?php
require_once __DIR__ . '/../includes/functions.php';
requireRole('customer');
$server = getServerStatus();
$basePath = '../';
$pageTitle = 'AI Destek | NEXORA HOST';
include __DIR__ . '/../includes/header.php';
?>
<div class="panel-layout"><?php include __DIR__ . '/../includes/sidebar.php'; ?>
<main class="panel-main"><div class="panel-top"><button class="btn btn-ghost hamburger" data-sidebar-toggle><i class="fa-solid fa-bars"></i></button><h1>NEXORA AI</h1></div>
<div class="ai-demo">
  <section class="panel-card">
    <p>Sunucunuzu ve hesabınızı analiz edebilen AI destek asistanı.</p>
    <div class="chat-box" id="panelAiOutput">
      <div class="chat-row"><strong>Kullanıcı</strong><p>Sunucum çok yavaş.</p></div>
      <div class="chat-row"><strong>NEXORA AI</strong><p>Sunucunuzun mevcut kaynak kullanımını kontrol ediyorum...</p></div>
    </div>
    <form data-ai-chat-form data-output-target="#panelAiOutput" style="margin-top:10px"><label for="panelAiInput">AI'ye Sor</label><input id="panelAiInput" type="text" placeholder="Örn: Ping neden yükseldi?"><button class="btn btn-primary" type="submit">Gönder</button></form>
  </section>
  <aside class="panel-card"><h3>SERVER STATUS</h3><p class="status <?= statusClass($server['status']) ?>"><?= htmlspecialchars($server['status']) ?></p><p>CPU <?= htmlspecialchars($server['cpu']) ?></p><p>RAM <?= htmlspecialchars($server['ram']) ?></p><p>DISK <?= htmlspecialchars($server['disk']) ?></p><p>AI STATUS: <span class="status ok">Operational</span></p></aside>
</div></main></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
