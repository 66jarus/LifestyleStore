<?php
    require "includes/common.php";
    
    $user_id=$_SESSION['id'];
    $item_id=$_GET['id'];
    
    //On the request of user we delete the unwanted items from cart(i.e from users_items table)   
    $delete_query ="delete from users_items where user_id='$user_id' And item_id='$item_id'";
    $delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
    
    
    if($delete_query_result==TRUE)
    {
        header('location: cart.php');
    }
?>