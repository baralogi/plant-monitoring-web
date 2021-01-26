<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'ikanhiu123B@$';
$dbname = 'db_iot';

$mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

echo (mysqli_connect_errno()) ? mysqli_connect_error() : '';