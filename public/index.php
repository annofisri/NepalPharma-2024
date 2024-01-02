<?php
// Set Content Security Policy header
header("Content-Security-Policy: default-src 'self'; style-src 'self' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.googleapis.com; script-src 'self' https://ajax.googleapis.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; img-src 'self' https://cdnjs.cloudflare.com");

// Set session cookie parameters
$lifetime = 3600 * 24; // Lifetime in seconds (24 hours)
$path = '/';
$domain = ''; // Set to your domain
$secure = true; // Use true if using HTTPS
$httponly = true; // Set HttpOnly flag

session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);

session_start();
error_reporting(0);


// if(isset($_GET['demo'])){
//     $_SESSION['demo'] = true;
// }

// if(!isset($_SESSION['demo'])){
//     include('../coming_soon.html');
//     exit();
// }

require_once __DIR__ . '/../core/TableManager.php';

include_once './consoleLog.php';

$requestedPage = $_GET['page'] ?? 'home';

$availablePages = [
    'home' => 'home.php',
    'about-us' => 'about-us.php',
    'organizing-committee' => 'organizing-committee.php',
    'exhibitors-detail' => 'exhibitors-detail.php',
    'exhibitors-table' => 'exhibitors-table.php',
    'visitors-detail' => 'visitors-detail.php',
    'visitors-reg' => 'visitors-reg.php',
    'exhibitor-reg' => 'exhibitor-reg.php',
    'contact' => 'contact.php',
    'floor-plan' => 'floor-plan.php',
    'executive-members' => 'executive-members.php',
];

if (!array_key_exists($requestedPage, $availablePages)) {
    $requestedPage = 'home';
}

$page = 'pages/' . $availablePages[$requestedPage];

include_once $page;
