<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login Page</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="bootstrap/js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email"  class="form-control" name="email"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter correct email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <button class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
