<?php
    require 'includes/common.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $email = mysqli_real_escape_string($con, $email);
    $password = md5(mysqli_real_escape_string($con, $password));
    $confirm_password = md5(mysqli_real_escape_string($con, $confirm_password));
    $address = mysqli_real_escape_string($con, $address);
    
    //we find that email given by user is already in database or not
    $select_query = "select id from users where email='$email'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

    if (mysqli_num_rows($select_query_result) > 0) {
        echo "<script>alert('Email is already associated with another account');location.href='signup.php'</script>";
    } else if($password!=$confirm_password){
        echo "<script>alert('Password And Confirm password are not matched');location.href='signup.php'</script>";
    }else if(strlen($contact)!=10)
    {
        echo "<script>alert('Contact number is exactly 10 digit');location.href='signup.php'</script>";
    }else {
        //insert the details of new user in users table 
        $insert_query = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES (NULL, '$name', '$email', '$password', '$contact', '$city', '$address');";
        $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));

        $id = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        if (isset($_SESSION['id'])) {
            header('location: products.php');
        }
    }
?>