<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableStall = new TableManager('stall');
$tableStallCategory = new TableManager('stall_category');
$data = [];


if (isset($_POST['submit'])) {
    $data['name'] = $_POST['name'] ?? null;
    $data['stall_no'] = $_POST['stall_no'] ?? null;
    $data['category_id'] = $_POST['stall_category_id'] ?? null;

    $errors = [];
    $success = '';
    if (!$data['name']) {
        $errors['name'] = 'Name is required';
    }
    if (!$data['stall_no']) {
        $errors['stall_no'] = 'Stall no is required';
    }
    if (!$data['category_id']) {
        $errors['category_id'] = 'Category is required';
    }

    if (empty($errors)) {
        $result = $tableStall->insert($data);
        if ($result) {
            $success = 'Stall added successfully';
        } else {
            $errors['db_error'] = 'Failed to add stall';
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
            <label for="stall_no">Stall No</label>
            <input type="text" name="stall_no" id="stall_no">
            <?php if (isset($errors['stall_no'])) : ?>
                <p><?php echo $errors['stall_no'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="stall_category_id">Stall Category</label>
            <select name="stall_category_id" id="stall_category_id">
                <option value="">Select Stall Category</option>
                <?php foreach ($tableStallCategory->getAll() as $stallCategory) : ?>
                    <option value="<?php echo $stallCategory['id'] ?>"><?php echo $stallCategory['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($errors['category_id'])) : ?>
                <p><?php echo $errors['category_id'] ?></p>
            <?php endif; ?>
        </div>

        <div>
            <button type="submit" name="submit">Submit</button>
        </div>

    </form>
</body>

</html>