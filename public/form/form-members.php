<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableMembers = new TableManager('members');
$data = [];


if (isset($_POST['submit'])) {
    $data['name'] = $_POST['name'] ?? null;
    $data['designation'] = $_POST['designation'] ?? null;
    $data['image'] = $tableMembers->uploadImage($_FILES['image']);

    $errors = [];
    $success = '';
    if (!$data['name']) {
        $errors['name'] = 'Name is required';
    }
    if (!$data['designation']) {
        $errors['designation'] = 'Designation is required';
    }

    if (empty($errors)) {
        $result = $tableMembers->insert($data);
        if ($result) {
            $success = 'Member added successfully';
        } else {
            $errors['db_error'] = 'Failed to add member';
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
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <?php if (isset($errors['name'])) : ?>
                <p><?php echo $errors['name'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation">
            <?php if (isset($errors['designation'])) : ?>
                <p><?php echo $errors['designation'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <?php if (isset($errors['image'])) : ?>
                <p><?php echo $errors['image'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>

    </form>
</body>

</html>