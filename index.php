<?php
    require('User_Validation.php');

    if (isset($_POST["submit"])) {
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP OOP tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="new_user">
        <h2>Create New User</h2>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? ''); ?>">
            <div class="errors">
                <?= $errors['username'] ?? '' ?>
            </div>

            <label>Email</label>
            <input type="text" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            <div class="errors">
                <?= $errors['email'] ?? '' ?>
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>