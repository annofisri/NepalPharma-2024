<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableExhibitor = new TableManager('exhibitor');
$data = [];
$data['status'] = $_POST['status'] ?? '';

$output = [
    'success' => false,
    'error' => [],
    'data' => null,
    'message' => null
];

$errors = [];
$success = '';

if (empty($errors)) {
    $result = $tableExhibitor->getAll();
    usort($result, function ($a, $b) {
        return $b['created_at'] <=> $a['created_at'];
    });
    if ($data['status'] == 'active') {
        $result = array_filter($result, function ($exhibitor) {
            return $exhibitor['status'] == 'active';
        });
        usort($result, function ($a, $b) {
            return $a['name'] <=> $b['name'];
        });
    }



    $success = 'Exhibitors fetched successfully';
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = $success;
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
