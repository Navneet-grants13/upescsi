<?php
$con = mysqli_connect('localhost', 'root', '') or die("Could not connect to MySQL");
mysqli_select_db($con, 'upes') or die("Could not select db");
?>
