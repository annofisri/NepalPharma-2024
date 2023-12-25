<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableLead = new TableManager('lead');
$data = [];

$output = [
    'success' => false,
    'error' => [],
    'data' => null,
    'message' => null
];

$errors = [];
$success = '';

if (empty($errors)) {
    $result = $tableLead->getAll();
    if ($result) {
        $success = 'Leads fetched successfully';
        $output['success'] = true;
        $output['data'] = $result;
        $output['message'] = $success;
    } else {
        $errors['db_error'] = 'Failed to fetch leads';
        $output['error'] = $errors;
        $output['message'] = 'Failed to fetch leads';
    }
} else {
    $output['error'] = $errors;
    $output['message'] = 'Failed to fetch leads';
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
