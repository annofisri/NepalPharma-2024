<?php

require_once __DIR__ . '/../../core/TableManager.php';


$tableExhibitor = new TableManager('exhibitor');
$tableStall = new TableManager('stall');
$data = [];

$output = [
    'success' => false,
    'error' => [],
    'data' => null,
    'message' => null
];


if (isset($_POST['stall_id']) AND isset($_POST['exhibitor_id']) AND isset($_POST['btnApproveBooking'])) {


    $errors = [];
    $success = '';

    $name = $_POST['stall_id'];
    $data['exhibitor_id'] = $_POST['exhibitor_id'];
    $data['status'] = 'booked';

    if (empty($errors)) {

      $stall = $tableStall->getByName($name);
      $data['id'] = $stall['id'];

        $result = $tableStall->update($data['id'], $data);
        if ($result) {
            $exhibitorStalls = $tableStall->getStallsByExhibitorId($data['exhibitor_id']);
            if(!empty($exhibitorStalls)){
              $tableExhibitor->update($data['exhibitor_id'], ['id'=>$data['exhibitor_id'], 'status'=>'active']);
            }else{
              $tableExhibitor->update($data['exhibitor_id'], ['id'=>$data['exhibitor_id'], 'status'=>'inactive']);
            }
            $success = 'Stall updated successfully';
            $output['success'] = true;
            $output['data'] = ['status'=>'booked'];
            $output['message'] = $success;
        } else {
            $errors['db_error'] = 'Failed to update stall';
            $output['error'] = $errors;
            $output['message'] = 'Failed to update stall';
        }
    } else {
        $output['error'] = $errors;
        $output['message'] = 'Failed to update stall';
    }

    header('Content-Type: application/json');
    echo json_encode($output, JSON_PRETTY_PRINT);
}


if (isset($_POST['stall_id']) AND isset($_POST['exhibitor_id']) AND isset($_POST['btnDeleteBooking'])) {


  $errors = [];
  $success = '';

  $name = $_POST['stall_id'];
  $exhibitor_id = $_POST['exhibitor_id'];
  
  if (empty($errors)) {
    
    $stall = $tableStall->getByName($name);
    
    // if this stall is booked to this exhibitor then reset status of stall to vacant and NULL exhibitor_id
    
    if($stall['exhibitor_id'] == $exhibitor_id){
      $data = [];
      $data['id'] = $stall['id'];
      $data['exhibitor_id'] = null;
      $data['status'] = 'vacant';
      $tableStall->update($data['id'], $data);
    }

    // remove stall from preferred stalls field of exhibitor
    $exhibitor = $tableExhibitor->getById($exhibitor_id);
    $old_preferred_stalls = $exhibitor['stall_ids'];
    $new_preferred_stalls = implode(',', array_diff(explode(',', $old_preferred_stalls), [$name]));
    $data = [];
    $data['id'] = $exhibitor_id;
    $data['stall_ids'] = $new_preferred_stalls;
    $tableExhibitor->update($exhibitor_id, $data);
    
    // after stall detail if no any stall is assigned to exhibitor then reset status to inactive

    $exhibitorStalls = $tableStall->getStallsByExhibitorId($exhibitor_id);

    if(!empty($exhibitorStalls)){
      $tableExhibitor->update($exhibitor_id, ['id'=>$exhibitor_id, 'status'=>'active']);
    }else{
      $tableExhibitor->update($exhibitor_id, ['id'=>$exhibitor_id, 'status'=>'inactive']);
    }

    $success = 'Stall deleted successfully';
    $output['success'] = true;
    $output['data'] = [];
    $output['message'] = $success;

  } else {
      $output['error'] = $errors;
      $output['message'] = 'Failed to delete stall';
  }

  header('Content-Type: application/json');
  echo json_encode($output, JSON_PRETTY_PRINT);
}