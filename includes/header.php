<?php
$basePath = $basePath ?? '';
$pageTitle = $pageTitle ?? 'NEXORA HOST';
$bodyClass = $bodyClass ?? '';
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="icon" type="image/svg+xml" href="<?= $basePath ?>assets/images/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= $basePath ?>assets/css/responsive.css">
  <link rel="stylesheet" href="<?= $basePath ?>assets/css/panel.css">
  <link rel="stylesheet" href="<?= $basePath ?>assets/css/admin.css">
</head>
<body class="<?= htmlspecialchars($bodyClass) ?>">
