<?php require_once 'templates/header.php'; ?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $number = isset($_POST['number']) ? $_POST['number'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';
        $province = isset($_POST['province']) ? $_POST['province'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $subjects = isset($_POST['skills']) ? $_POST['skills'] : [];

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        echo "<td>$password</td>";
        echo "<td>$number</td>";
        echo "<td>$message</td>";
        echo "<td>$province</td>";
        echo "<td>$gender</td>";
        echo "<td>" . implode(', ', $subjects) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php require_once 'templates/footer.php'; ?>
