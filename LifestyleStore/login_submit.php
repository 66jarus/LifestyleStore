<?php
    require 'includes/common.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($con, $email);
    $password = md5(mysqli_real_escape_string($con, $password));

    //here we retrieve information of user by email address
    $select_query = "select id,email,password from users where email='$email'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    
    $total_rows_fetched = mysqli_num_rows($select_query_result);
            
    if ($total_rows_fetched == 0) {
        echo "<script>alert('No account with this Email');location.href='login.php'</script>";
    } else {
        $row = mysqli_fetch_array($select_query_result);
        if ($row['email'] == $email AND $row['password'] == $password) {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];
            if (isset($_SESSION['id'])) {
                header('location: products.php');
            }
        } else {
            echo "<script>alert('Wrong email and password combination');location.href='login.php'</script>";
        }
    }
?>