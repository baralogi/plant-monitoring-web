<?php
    include 'config.php';
    $id = $_GET['id'];
    $value = mysqli_query($mysqli, "SELECT value FROM controls WHERE id = '$id'");
    if($val = mysqli_fetch_array($nilai)){
        echo $val['value'];
    }

?>