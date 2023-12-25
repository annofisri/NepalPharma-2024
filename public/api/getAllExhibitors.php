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
    if ($result) {
        if ($data['status'] == 'approved') {
            $result = array_filter($result, function ($exhibitor) {
                return $exhibitor['status'] == 'approved';
            });
        }

        usort($result, function ($a, $b) {
            return $a['name'] <=> $b['name'];
        });

        $success = 'Exhibitors fetched successfully';
        $output['success'] = true;
        $output['data'] = $result;
        $output['message'] = $success;
    } else {
        $errors['db_error'] = 'Failed to fetch exhibitors';
        $output['error'] = $errors;
        $output['message'] = 'Failed to fetch exhibitors';
    }
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
