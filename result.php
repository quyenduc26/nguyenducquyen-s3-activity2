<?php echo "<div style = 'width :600px;padding: 30px;border: 5px solid blue ;display: grid;justify-content: center; align-items: center;'>" ?>

<?php 
    echo "<img src='https://vbsp.org.vn/wp-content/uploads/2012/11/Huan-chuong-doc-lap-hang-2.2.png' alt='Hình ảnh huy chương'/>";
    if(isset($_POST['name'])){
        // echo "Thax you " . $_POST['name'] . "!!!"; 
        echo "<h1> Thx you "  . $_POST['name'] . '!!!' .  "</h1>";
    }
    echo "<br>";
    echo "<br>";
    if (isset($_POST['club'])){
        echo "We received your application for the " . $_POST['club'];
    }
    echo "<br>";
    echo "<br>";
    $checkbox_value = array();
    if(isset($_POST['checkbox_arr'])){
        $checkbox_arr = $_POST['checkbox_arr'];
        foreach($checkbox_arr as $value){
            array_push($checkbox_value,$value);
        }
    }
    $string_value = implode(" and " , $checkbox_value);
    echo "You are " . $string_value;

    echo "<br>";
    echo "<br>";
    if (isset($_POST['time'])){
        echo "You will you available on " . $_POST['time'];
    }
?>
<?php echo "</div>" ?>