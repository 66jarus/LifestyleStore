<?php
    if (!isset($_SESSION['email'])) {
        session_start();
    }
    $con = mysqli_connect("localhost", "root", "", "store")
    or die(mysqli_error($con));
?>