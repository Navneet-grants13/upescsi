<?php
require_once 'config.php';

if (isset($_POST["name"]) && isset($_POST["certnumber"])) {
    session_start();
    $name = $_POST["name"];
    $name = strtolower($name);
    $serial = $_POST["certnumber"];
    $event = $_POST["event"];
    $_SESSION['certnumber'] = $serial;
    $_SESSION['event'] = $event;
    
    $result = mysqli_query($con, "SELECT * FROM $event WHERE `name`= '".$name."' and `cert_number`='".$serial."'") or die("Cannot connect to databvbdfbase!");
    $user_count = mysqli_num_rows($result);
    if ($user_count==1) {
        header('location:success.php');
    } else {
        header('location:failure.php');
    }
}
?>
s