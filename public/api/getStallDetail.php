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
  $stall = $_GET['stall_ids'] ?? '';

  $stallIds = explode(',', $stall);

  $stallsData = [];
  foreach ($stallIds as $stallId) {
    $stallDetails = $tableStall->getByName($stallId);
    $stallDetails['category_name'] = STALL_TYPES[$stallDetails['type']]['name'];
    $stallDetails['price'] = STALL_TYPES[$stallDetails['type']]['price'];
    $stallDetails['color'] = STALL_TYPES[$stallDetails['type']]['color'];
    $stallDetails['size'] = STALL_TYPES[$stallDetails['type']]['size'];
    $stallDetails['quantity'] = STALL_TYPES[$stallDetails['type']]['quantity'];
    $stallsData[] = $stallDetails;

  }
  $success = 'Stall data fetched successfully';
  $output['success'] = true;
  $output['data'] = $stallsData;
  $output['message'] = $success;

} else {
  $output['error'] = $errors;
  $output['message'] = 'Failed to fetch stall detail.';
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
