<?php
// Set Content Security Policy header
header("Content-Security-Policy: default-src 'self'; style-src 'self' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.googleapis.com 'unsafe-inline'; script-src 'self' https://ajax.googleapis.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net 'unsafe-inline'; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; img-src 'self' https://cdnjs.cloudflare.com");

// Set session cookie parameters
$lifetime = 3600 * 24; // Lifetime in seconds (24 hours)
$path = '/';
$domain = ''; // Set to your domain
$secure = true; // Use true if using HTTPS
$httponly = true; // Set HttpOnly flag

session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);

session_start();

if (!isset($_SESSION['id'])) {
    header('location:login.php');
    exit;
}
if (isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
    exit;
}

require_once __DIR__ . '/../../core/TableManager.php';
require_once './../consoleLog.php';



$requestedPage = $_GET['section'] ?? 'dashboard';

$availablePages = [
    'dashboard' => './sections/dashboard/dashboard.php',
    'exhibitor' => './sections/exhibitor/exhibitor-list.php',
    'stall' => './sections/stall/stall-list.php',
    'leads' => './sections/leads/leads-list.php',
];

if (!array_key_exists($requestedPage, $availablePages)) {
    $requestedPage = 'dashboard';
}

include_once($availablePages[$requestedPage]);
