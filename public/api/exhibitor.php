<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableExhibitor = new TableManager('exhibitor');
$data = [];

$output = [
  'success' => false,
  'error' => [],
  'data' => null,
  'message' => null
];


if (isset($_POST['btnCreateExhibitor'])) {

  $data['name'] = $_POST['companyname'] ?? '';
  $data['country'] = $_POST['country'] ?? '';
  $data['chief_name'] = $_POST['chiefexecutive'] ?? '';
  $data['designation'] = $_POST['designation1'] ?? '';
  $data['contact_person'] = $_POST['contactperson'] ?? '';
  $data['contact_person_designation'] = $_POST['designation2'] ?? '';
  $data['address'] = $_POST['address'] ?? '';
  $data['city'] = $_POST['city'] ?? '';
  $data['pin'] = $_POST['pin'] ?? '';
  $data['phone_number'] = $_POST['phone'] ?? '';
  $data['email'] = $_POST['email'] ?? '';
  $data['website'] = $_POST['website'] ?? '';
  $product1 = $_POST['productname1'] ?? '';
  $product2 = $_POST['productname2'] ?? '';
  $product3 = $_POST['productname3'] ?? '';
  $product4 = $_POST['productname4'] ?? '';
  $data['product_names'] = $product1 . '|' . $product2 . '|' . $product3 . '|' . $product4;
  $selectedStalls = $_POST['selectedStalls'] ?? [];
  $data['stall_ids'] = implode(',', $selectedStalls);
  $data['status'] = 'inactive';

  $errors = [];
  $success = '';

  if (empty($data['name'])) {
    $errors['companyname'] = 'Company name is required';
  }
  if (empty($data['contact_person'])) {
    $errors['contactperson'] = 'Contact person is required';
  }
  if (empty($data['contact_person_designation'])) {
    $errors['designation2'] = 'Contact person designation is required';
  }
  if (empty($data['address'])) {
    $errors['address'] = 'Address is required';
  }
  if (empty($data['country'])) {
    $errors['country'] = 'Country is required';
  }
  if (empty($data['phone_number'])) {
    $errors['phone'] = 'Phone is required';
  }
  if (empty($product1)) {
    $errors['productname1'] = 'Product is required';
  }
  if (count($selectedStalls) < 1) {
    $errors['error'] = 'Atleast one stall must be selected.';
  }
  
  if (empty($errors)) {
    $result = $tableExhibitor->insert($data);
    if ($result) {
      $success = 'Exhibitor added successfully';
      $output['success'] = true;
      $output['data'] = $result;
      $output['message'] = $success;
    } else {
      $errors['db_error'] = 'Failed to add exhibitor';
      $output['error'] = $errors;
      $output['message'] = 'Operation failed';
    }
  }

  header('Content-Type: application/json');
  echo json_encode($output, JSON_PRETTY_PRINT);
}
