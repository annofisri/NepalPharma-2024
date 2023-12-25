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


if (isset($_POST['updateExhibitor'])) {



    $data['name'] = $_POST['name'] ?? null;
    $data['contact_person'] = $_POST['contact_person'] ?? null;
    $data['contact_person_designation'] = $_POST['contact_person_designation'] ?? null;
    $data['chief_name'] = $_POST['chief_name'] ?? null;
    $data['designation'] = $_POST['designation'] ?? null;
    $data['email'] = $_POST['email'] ?? null;
    $data['phone_number'] = $_POST['phone_number'] ?? null;
    $data['country'] = $_POST['country'] ?? null;
    $data['city'] = $_POST['city'] ?? null;
    $data['address'] = $_POST['address'] ?? null;
    $data['pin'] = $_POST['pin'] ?? null;
    $data['website'] = $_POST['website'] ?? null;
    $data['id'] = $_POST['id'] ?? null;




    $errors = [];
    $success = '';

    if ($data['name'] == '' || $data['name'] == null) {
        $errors['name'] = 'Name is required';
    }
    if ($data['contact_person'] == '' || $data['contact_person'] == null) {
        $errors['contact_person'] = 'Contact person is required';
    }
    if ($data['contact_person_designation'] == '' || $data['contact_person_designation'] == null) {
        $errors['contact_person_designation'] = 'Contact person designation is required';
    }
    if ($data['email']  == '' || $data['email'] == null) {
        $errors['email'] = 'Email is required';
    }
    if ($data['phone_number'] == '' || $data['phone_number'] == null) {
        $errors['phone_number'] = 'Phone number is required';
    }
    if ($data['country'] == '' || $data['country'] == null) {
        $errors['country'] = 'Country is required';
    }
    if ($data['address'] == '' || $data['address'] == null) {
        $errors['address'] = 'Address is required';
    }



    if ($data['id'] == '' || $data['id'] == null) {
        $errors['id'] = 'Id is required';
    }
    // var_dump($errors);



    if (empty($errors)) {

        $result = $tableExhibitor->update($data['id'], $data);
        if ($result) {
            $success = 'Exhibitor updated successfully';
            $output['success'] = true;
            $output['data'] = $result;
            $output['message'] = $success;
        } else {
            $errors['db_error'] = 'Failed to update exhibitor';
            $output['error'] = $errors;
            $output['message'] = 'Failed to update exhibitor';
        }
    } else {
        $output['error'] = $errors;
        $output['message'] = 'Failed to update exhibitor';
    }




    header('Content-Type: application/json');
    echo json_encode($output, JSON_PRETTY_PRINT);
}
