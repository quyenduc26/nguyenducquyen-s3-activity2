<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST['password'];

        // Validate the password
        if ($password == "1234") {
            echo '<div>This is sensitive data visible only if the user knows the correct password</div>';
        } else {
            echo '<div>Incorrect password</div>';
        }
    }
    ?>

    <form method="post" action="">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit">Log in</button>
    </form>
</body>
</html>
