<?php
    require "includes/common.php";
    
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
    
    $user_id=$_SESSION['id'];
    
    //Retrieve password from users table using id 
    $select_query = "select password from users where id='$user_id'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    
    $row = mysqli_fetch_array($select_query_result);
    $password=$row['password'];

    $oldPassword = md5($_POST['oldPassword']);
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];
   
    if(strlen($newPassword)!=strlen($confirmNewPassword) || $newPassword!=$confirmNewPassword)
    {
        echo "<script>alert('New password and Retype new password are not matched.');location.href='setting.php'</script>";
    }
    $setNewPassword=md5($newPassword);
    if($password==$oldPassword)
    {
        //Update password of current user
        $update_query = "UPDATE users SET password='$setNewPassword' WHERE Id='$user_id'";
        $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
        echo "<script>alert('Password changes successfully.');location.href='products.php'</script>";
    } else {
        echo "<script>alert('Enter correct old password.');location.href='setting.php'</script>";
    }
    
?>