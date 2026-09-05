<?php
require_once __DIR__ . '/includes/functions.php';

if (isset($_GET['logout'])) {
    logoutDemoUser();
}

$error = null;
if (isPostRequest()) {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $user = authenticateDemoUser($email, $password);

    if ($user) {
        loginDemoUser($user);
        if ($user['role'] === 'admin') {
            header('Location: /admin/index.php');
            exit;
        }
        header('Location: /panel/index.php');
        exit;
    }

    $error = 'Geçersiz demo giriş bilgileri. Demo kullanıcı: demo@nexora.host / 123456, admin@nexora.host / 123456';
}

$basePath = '';
$pageTitle = 'Giriş Yap | NEXORA HOST';
$bodyClass = 'auth-shell';
include __DIR__ . '/includes/header.php';
?>
<div class="auth-card">
  <p class="brand">NEXORA <span>HOST</span></p>
  <h1>Giriş Yap</h1>
  <p class="form-note">Bu ekran demo kimlik doğrulama içindir, production güvenliği içermez.</p>
  <?php if ($error): ?><p class="status bad"><?= htmlspecialchars($error) ?></p><?php endif; ?>
  <form method="post">
    <label for="email">E-posta</label>
    <input id="email" name="email" type="email" required>
    <label for="password">Şifre</label>
    <input id="password" name="password" type="password" required>
    <p><label><input type="checkbox" name="remember"> Beni hatırla</label></p>
    <button class="btn btn-primary" type="submit">Giriş Yap</button>
  </form>
  <p><a class="btn-link" href="forgot-password.php">Şifremi unuttum</a></p>
  <p><button type="button" class="btn btn-ghost" data-demo-toast="Google OAuth entegrasyonu yakında aktif olacaktır.">Google ile giriş (demo)</button></p>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
