<?php
error_reporting(0);
session_start();

if(isset($_GET['demo'])){
    $_SESSION['demo'] = true;
}

if(!isset($_SESSION['demo'])){
    include('../coming_soon.html');
    exit();
}

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
