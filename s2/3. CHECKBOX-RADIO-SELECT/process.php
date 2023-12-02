<?php include_once(__DIR__.'/templates/header.php');
 ?>
<?php
// YOUR CODE HERE (Include necessary PHP logic, if any)
?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo isset($_POST['province']) ? $_POST['province'] : ''; ?></h2>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $imageSrc = ($gender == "Male") ? "data:image/jpeg;base64,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" : "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrfVohsCIRTdNRmQ-04oOjHfL4wVMNHvLGDg&usqp=CAU";
        echo "<img src='$imageSrc' alt=''>";
        
        ?>
    </div>
</div>

<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
        foreach ($skills as $skill) {
            echo "<button class='btn bg-info me-2 text-light'>$skill</button>";
        }
        ?>
    </div>
</div>

<?php include_once(__DIR__.'/templates/footer.php');
?>
<?php
// YOUR CODE HERE (Include necessary PHP logic, if any)
?>
