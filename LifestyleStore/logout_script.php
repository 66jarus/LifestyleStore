<?php
    session_start();
    session_unset();
    session_destroy();
    
    if($_SESSION['id']==Null)
    {
        header("location: index.php");
    }
?>