<?php
if (isset($_POST["submit"]))
{
    echo "Form Submited";

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
            <input type="text" name="username">

            <label>Email</label>
            <input type="text" name="email">

            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>