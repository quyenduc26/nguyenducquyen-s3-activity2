<?php include_once(__DIR__.'/templates/header.php');
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $_POST['color']; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $_POST['rangeValue']; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $_POST['selectedDate']; ?></span>
    </div>


<?php include_once(__DIR__.'/templates/footer.php');
 ?>