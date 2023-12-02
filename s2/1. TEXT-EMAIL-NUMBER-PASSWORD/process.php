<?php include_once(__DIR__.'/templates/header.php'); ?>
<ul class="list-group">
<?php
   
?>
    <li class="list-group-item"><?php echo  $_POST['name']; ?></li>
    <li class="list-group-item"><?php echo  $_POST['email']; // email; ?></li>
    <li class="list-group-item"><?php echo  $_POST['password']; // password; ?></li>
    <li class="list-group-item"><?php echo  $_POST['number']; // number; ?></li>
    <li class="list-group-item"><?php echo  $_POST['message']; // message; ?></li>

</ul>
<?php include_once(__DIR__.'/templates/footer.php'); ?>