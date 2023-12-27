<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableStall = new TableManager('stall');
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
    $result = $tableStall->getAllStallAndExhibitor();
    if ($result) {
        $success = 'Stall fetched successfully';
        $output['success'] = true;
        $output['data'] = $result;
        $output['message'] = $success;
    } else {
        $errors['db_error'] = 'Failed to fetch stall';
        $output['error'] = $errors;
        $output['message'] = 'Failed to fetch stall';
    }
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
