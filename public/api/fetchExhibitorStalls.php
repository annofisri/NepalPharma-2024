<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableExhibitor = new TableManager('stall');
$data = [];

$output = [
    'success' => false,
    'error' => [],
    'data' => null,
    'message' => null
];



$data['exhibitor_id'] = $_POST['id'] ?? null;

$errors = [];
$success = '';

if (!$data['id']) {
    $errors['id'] = 'Id is required';
}



if (empty($errors)) {
    $result = $tableExhibitor->getById($data['id']);
    if ($result) {
        $success = 'Exhibitor fetched successfully';
        $output['success'] = true;
        $output['data'] = $result;
        $output['message'] = $success;
    } else {
        $errors['db_error'] = 'Failed to fetch exhibitor';
        $output['error'] = $errors;
        $output['message'] = 'Failed to fetch exhibitor';
    }
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
