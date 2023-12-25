<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableExhibitor = new TableManager('exhibitor');
$data = [];


if (isset($_POST['submit'])) {
    $data['name'] = $_POST['name'] ?? null;
    $data['country'] = $_POST['country'] ?? null;
    $data['chief_name'] = $_POST['chief_name'] ?? null;
    $data['designation'] = $_POST['designation'] ?? null;
    $data['contact_person'] = $_POST['contact_person'] ?? null;
    $data['contact_person_designation'] = $_POST['contact_person_designation'] ?? null;
    $data['address'] = $_POST['address'] ?? null;
    $data['city'] = $_POST['city'] ?? null;
    $data['pin'] = $_POST['pin'] ?? null;
    $data['phone_number'] = $_POST['phone_number'] ?? null;
    $data['email'] = $_POST['email'] ?? null;
    $data['website'] = $_POST['website'] ?? null;
    $data['product_names'] = $_POST['product_names'] ?? null;
    $data['status'] = $_POST['status'] ?? null;



    $errors = [];
    $success = '';
    if (!$data['name']) {
        $errors['name'] = 'Name is required';
    }
    if (!$data['country']) {
        $errors['country'] = 'Country is required';
    }

    if (!$data['contact_person']) {
        $errors['contact_person'] = 'Contact person is required';
    }
    if (!$data['contact_person_designation']) {
        $errors['contact_person_designation'] = 'Contact person designation is required';
    }
    if (!$data['address']) {
        $errors['address'] = 'Address is required';
    }

    if (!$data['phone_number']) {
        $errors['phone_number'] = 'Phone number is required';
    }
    if (!$data['email']) {
        $errors['email'] = 'Email is required';
    }
    if (!$data['product_names']) {
        $errors['product_names'] = 'Product names is required';
    }
    if (!$data['status']) {
        $errors['status'] = 'Status is required';
    }


    if (empty($errors)) {
        $result = $tableExhibitor->insert($data);
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
            <label for="country">Country</label>
            <input type="text" name="country" id="country">
            <?php if (isset($errors['country'])) : ?>
                <p><?php echo $errors['country'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="chief_name">Chief Name</label>
            <input type="text" name="chief_name" id="chief_name">
            <?php if (isset($errors['chief_name'])) : ?>
                <p><?php echo $errors['chief_name'] ?></p>
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
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" id="contact_person">
            <?php if (isset($errors['contact_person'])) : ?>
                <p><?php echo $errors['contact_person'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="contact_person_designation">Contact Person Designation</label>
            <input type="text" name="contact_person_designation" id="contact_person_designation">
            <?php if (isset($errors['contact_person_designation'])) : ?>
                <p><?php echo $errors['contact_person_designation'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <?php if (isset($errors['address'])) : ?>
                <p><?php echo $errors['address'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city">
            <?php if (isset($errors['city'])) : ?>
                <p><?php echo $errors['city'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="pin">Pin</label>
            <input type="text" name="pin" id="pin">
            <?php if (isset($errors['pin'])) : ?>
                <p><?php echo $errors['pin'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number">
            <?php if (isset($errors['phone_number'])) : ?>
                <p><?php echo $errors['phone_number'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <?php if (isset($errors['email'])) : ?>
                <p><?php echo $errors['email'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="website">Website</label>
            <input type="text" name="website" id="website">
            <?php if (isset($errors['website'])) : ?>
                <p><?php echo $errors['website'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="product_names">Product Names</label>
            <input type="text" name="product_names" id="product_names">
            <?php if (isset($errors['product_names'])) : ?>
                <p><?php echo $errors['product_names'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" id="status">
            <?php if (isset($errors['status'])) : ?>
                <p><?php echo $errors['status'] ?></p>
            <?php endif; ?>
        </div>


        <div>
            <button type="submit" name="submit">Submit</button>
        </div>

    </form>
</body>

</html>