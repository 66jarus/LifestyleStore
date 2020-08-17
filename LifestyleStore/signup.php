<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>SignUp Page</title>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>SIGNUP</h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="signup_script.php">
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="name"  placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email"  class="form-control" name="email"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter correct email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="password" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password must contain minimum 8 characterss includes UpperCase, LowerCase, Number, Special Character." required>
                                    <div><p style="color:red;font-size:10px">* Password must contain minimum 8 characterss includes UpperCase, LowerCase, Number / Special Character.</p></div>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="confirmpassword" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="contact"  placeholder="Contact" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="city"  placeholder="City" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="address"  placeholder="Address" required>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
