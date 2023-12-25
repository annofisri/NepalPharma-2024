<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableStall = new TableManager('stall');
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
    $result = $tableStall->getBookedStalls();
    if ($result) {

        $data = [];
        foreach ($result as  $value) {
            $data[] = $value['name'];
        }
        $success = 'Booked stalls fetched successfully';
        $output['success'] = true;
        $output['data'] = $data;
        $output['message'] = $success;
    } else {
        $errors['db_error'] = 'Failed to fetch booked stalls';
        $output['error'] = $errors;
        $output['message'] = 'Failed to fetch booked stalls';
    }
} else {
    $output['error'] = $errors;
    $output['message'] = 'Failed to fetch booked stalls';
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
