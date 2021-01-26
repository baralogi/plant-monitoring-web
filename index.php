<?php
include 'config.php';

$sql = 'SELECT * FROM controls';
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo 'id : ' . $row['id'] . ' - led : ' . $row['led'] . ' - nilai : ' . $row['value'] . '<br>'; 
    }
}
?>


