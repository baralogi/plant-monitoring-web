<?php
    include 'config.php';
    $id = $_GET['id'];
    $value = $_GET['value'];

    mysqli_query($mysqli, "UPDATE controls SET value = '$value' WHERE id = '$id'");
    header("location:index.php");

?>

