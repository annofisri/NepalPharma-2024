<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableStallCategory = new TableManager('stall_category');
$data = [];


if (isset($_POST['submit'])) {
    $data['name'] = $_POST['name'] ?? null;
    $data['area'] = $_POST['area'] ?? null;
    $data['custom_color'] = $_POST['custom_color'] ?? null;

    $errors = [];
    $success = '';

    if (!$data['name']) {
        $errors['name'] = 'Name is required';
    }
    if (!$data['area']) {
        $errors['area'] = 'Area is required';
    }
    if (!$data['custom_color']) {
        $errors['custom_color'] = 'Custom color is required';
    }

    if (empty($errors)) {
        $result = $tableStallCategory->insert($data);
        if ($result) {
            $success = 'Stall Category added successfully';
        } else {
            $errors['db_error'] = 'Failed to add stall category';
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
            <label for="area">Area</label>
            <input type="text" name="area" id="area">
            <?php if (isset($errors['area'])) : ?>
                <p><?php echo $errors['area'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="custom_color">Custom Color</label>
            <input type="text" name="custom_color" id="custom_color">
            <?php if (isset($errors['custom_color'])) : ?>
                <p><?php echo $errors['custom_color'] ?></p>
            <?php endif; ?>
        </div>

        <div>
            <button type="submit" name="submit">Submit</button>
        </div>

    </form>
</body>

</html>