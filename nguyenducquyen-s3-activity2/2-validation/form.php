<?php

function validate_message($message)
{
    // function to check if message is correct (must have at least 10 caracters (after trimming))
    return strlen(trim($message)) >= 10;

}

function validate_username($username)
{
    // function to check if username is correct (must be alphanumeric => Use the function 'ctype_alnum()')
    return ctype_alnum($username);

}

function validate_email($email)
{
    // function to check if email is correct (must contain '@')
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

}


$user_error = "";
$email_error = "";
$terms_error = "";
$message_error = "";
$username = "";
$email = "";
$message = "";

$form_valid = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate username
    if (empty($username)) {
        $user_error = "Please enter a username";
    } elseif (!validate_username($username)) {
        $user_error = "Username should contain only letters and numbers";
    }

    // Validate email
    if (empty($email)) {
        $email_error = "Please enter an email";
    } elseif (!validate_email($email)) {
        $email_error = "Email must match this template 'example@gmail.com'";
    }

    // Validate message
    if (!validate_message($message)) {
        $message_error = "Message must be at least 10 characters long";
    }

    // Validate terms checkbox
    if (!isset($_POST['terms'])) {
        $terms_error = "You must accept the Terms of Service";
    }

    // Check if all validations passed
    if (empty($user_error) && empty($email_error) && empty($message_error) && empty($terms_error)) {
        $form_valid = true;
    }
}
?>

<form action="#" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username">
            <small class="form-text text-danger"> <?php echo $user_error; ?></small>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter email" name="email">
            <small class="form-text text-danger"> <?php echo $email_error; ?></small>
        </div>
    </div>
    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"></textarea>
        <small class="form-text text-danger"> <?php echo $message_error; ?></small>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" name="terms" id="terms" value="terms"> <label for="terms">I accept the Terms of Service</label>
        <small class="form-text text-danger"> <?php echo $terms_error; ?></small>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<hr>

<?php
if ($form_valid) :
?>
    <div class="card">
        <div class="card-header">
            <p><?php echo htmlspecialchars($username); ?></p>
            <p><?php echo htmlspecialchars($email); ?></p>

        </div>
        <div class="card-body">
            <p class="card-text"><?php echo htmlspecialchars($message);  ?></p>
        </div>
    </div>
<?php
endif;
?>