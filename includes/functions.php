<?php
/**
 * Demo environment notice:
 * This file includes mock data and demo-only authentication.
 * Do NOT use these credentials or flows in production.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const DEMO_USER_EMAIL = 'demo@nexora.host';
const DEMO_ADMIN_EMAIL = 'admin@nexora.host';
const DEMO_PASSWORD = '123456';

function isPostRequest(): bool {
    return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
}

function authenticateDemoUser(string $email, string $password): ?array {
    if ($password !== DEMO_PASSWORD) {
        return null;
    }

    if ($email === DEMO_USER_EMAIL) {
        return ['role' => 'customer', 'name' => 'Serhan Demo', 'email' => DEMO_USER_EMAIL];
    }

    if ($email === DEMO_ADMIN_EMAIL) {
        return ['role' => 'admin', 'name' => 'NEXORA Admin', 'email' => DEMO_ADMIN_EMAIL];
    }

    return null;
}

function loginDemoUser(array $user): void {
    $_SESSION['demo_user'] = $user;
}

function logoutDemoUser(): void {
    unset($_SESSION['demo_user']);
}

function getCurrentUser(): ?array {
    return $_SESSION['demo_user'] ?? null;
}

function requireRole(string $role): void {
    $user = getCurrentUser();
    if (!$user || ($user['role'] ?? '') !== $role) {
        header('Location: /login.php');
        exit;
    }
}

function getUser(): array {
    return ['first_name' => 'Serhan', 'last_name' => 'Demo', 'email' => 'serhan@example.com', 'phone' => '+90 555 010 1010'];
}

function getUserServers(): array {
    return [
        ['name' => 'VPS-PRO-01', 'status' => 'ONLINE', 'ip' => '185.xxx.xxx.xxx', 'cpu' => 23, 'ram' => 41, 'disk' => 38, 'plan' => 'NEXORA VPS PRO'],
        ['name' => 'GAME-TR-05', 'status' => 'ONLINE', 'ip' => '185.xxx.xxx.221', 'cpu' => 34, 'ram' => 52, 'disk' => 29, 'plan' => 'NEXORA GAME SERVER']
    ];
}

function getOrders(): array {
    return [
        ['no' => 'NX10241', 'product' => 'VPS PRO', 'date' => '2026-09-01', 'amount' => '₺299', 'status' => 'Ödendi', 'provision' => 'COMPLETED'],
        ['no' => 'NX10242', 'product' => 'GAME SERVER', 'date' => '2026-09-02', 'amount' => '₺199', 'status' => 'Hazırlanıyor', 'provision' => 'CREATING'],
        ['no' => 'NX10243', 'product' => 'VPS ULTRA', 'date' => '2026-09-03', 'amount' => '₺549', 'status' => 'Aktif', 'provision' => 'COMPLETED']
    ];
}

function getServerStatus(): array {
    return ['status' => 'ONLINE', 'location' => 'İstanbul', 'os' => 'Ubuntu 24.04', 'cpu' => '23%', 'ram' => '41%', 'disk' => '38%', 'network' => '2 Gbps'];
}

function getTickets(): array {
    return [
        ['id' => '#1024', 'title' => 'Sunucum yeniden başlamıyor.', 'status' => 'Açık', 'last_reply' => 'AI Support', 'channel' => 'AI RESOLVED'],
        ['id' => '#1025', 'title' => 'CPU kullanımı yükseliyor', 'status' => 'CLOSED', 'last_reply' => 'Destek Ekibi', 'channel' => 'HUMAN REQUIRED']
    ];
}

function getProducts(): array {
    return [
        ['name' => 'NEXORA VPS PRO', 'price' => '₺299', 'stock' => 'Aktif'],
        ['name' => 'NEXORA GAME SERVER', 'price' => '₺199', 'stock' => 'Aktif']
    ];
}

function getDashboardStats(string $role = 'customer'): array {
    if ($role === 'admin') {
        return [
            'Toplam Kullanıcı' => '1,284',
            'Aktif Sunucu' => '637',
            'Aylık Gelir' => '₺284,500',
            'Açık Ticket' => '17',
            'Aktif Node' => '8'
        ];
    }

    return [
        'Aktif Sunucular' => '2',
        'Toplam Sipariş' => '7',
        'Açık Destek Talebi' => '1',
        'Hesap Bakiyesi' => '₺250'
    ];
}

function statusClass(string $status): string {
    $status = mb_strtolower($status);
    if (str_contains($status, 'online') || str_contains($status, 'aktif') || str_contains($status, 'ödendi') || str_contains($status, 'paid') || str_contains($status, 'completed')) {
        return 'ok';
    }
    if (str_contains($status, 'hazırlan') || str_contains($status, 'creating')) {
        return 'warn';
    }
    if (str_contains($status, 'error') || str_contains($status, 'offline') || str_contains($status, 'suspended') || str_contains($status, 'iptal')) {
        return 'bad';
    }
    return 'info';
}
