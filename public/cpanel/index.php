<?php
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
