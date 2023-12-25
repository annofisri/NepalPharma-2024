<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableMembers = new TableManager('exhibitor_stalls');
$tableStall = new TableManager('stall');
$tableExhibitor = new TableManager('exhibitors');
$data = [];


if (isset($_POST['submit'])) {
    $data['exhibitor_id'] = $_POST['exhibitor_id'] ?? null;
    $data['stall_id'] = $_POST['stall_id'] ?? null;


    $errors = [];
    $success = '';
    if (!$data['exhibitor_id']) {
        $errors['exhibitor_id'] = 'Exhibitor is required';
    }
    if (!$data['stall_id']) {
        $errors['stall_id'] = 'Stall is required';
    }

    if (empty($errors)) {
        $result = $tableMembers->insert($data);
        if ($result) {
            $success = 'Exhibitor\'s stall added successfully';
        } else {
            $errors['db_error'] = 'Failed to add exhibitor\'s stall';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form enctype="multipart/form-data" method="POST">
        <?php if (isset($success)) : ?>
            <p><?php echo $success ?></p>
        <?php endif; ?>
        <div>
            <label for="exhibitor_id">Exhibitor</label>
            <select name="exhibitor_id" id="exhibitor_id">
                <option value="">Select exhibitor</option>
                <?php foreach ($tableMembers->getAll() as $member) : ?>
                    <option value="<?php echo $member['id'] ?>"><?php echo $member['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($errors['exhibitor_id'])) : ?>
                <p><?php echo $errors['exhibitor_id'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="stall_id">Stall</label>
            <select name="stall_id" id="stall_id">
                <option value="">Select stall</option>
                <?php foreach ($tableStall->getAll() as $stall) : ?>
                    <option value="<?php echo $stall['id'] ?>"><?php echo $stall['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($errors['stall_id'])) : ?>
                <p><?php echo $errors['stall_id'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>

    </form>
</body>

</html>