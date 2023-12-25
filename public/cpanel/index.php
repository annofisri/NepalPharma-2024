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
    'exhibitor-details' => './sections/exhibitor/exhibitor-details.php',
    'edit-exhibitor-details' => './sections/exhibitor/edit-exhibitor.php',
    'add-exhibitor-stall' => './sections/exhibitor/add-stall.php',
    'admin' => './sections/admin/admin-list.php',
    'add-admin' => './sections/admin/add-admin.php',
    'edit-admin' => './sections/admin/edit-admin.php',


    'leads' => './sections/leads/leads-list.php',

];

if (!array_key_exists($requestedPage, $availablePages)) {
    $requestedPage = 'dashboard';
}

include_once($availablePages[$requestedPage]);