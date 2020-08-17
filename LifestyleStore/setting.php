<?php
    require "includes/common.php";
    
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
?>    
<!DOCTYPE html>

<html>
    <head>
        <title>Settings</title>
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
                            <h2>Change Password</h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="setting_script.php">
                                <div class="form-group">
                                    <input type="password"   name="oldPassword" placeholder="Old Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password must contain minimum 8 characterss includes UpperCase, LowerCase, Number / Special Character." required>
                                </div>
                                <div class="form-group">
                                    <input type="password"   name="newPassword" placeholder="New Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password must contain minimum 8 characterss includes UpperCase, LowerCase, Number / Special Character." required>
                                    <div><p style="color:red;font-size:10px">* Password must contain minimum 8 characterss includes UpperCase, LowerCase, Number, Special Character.</p></div>
                                </div>
                                <div class="form-group">
                                    <input type="password"   name="confirmNewPassword" placeholder="Re-type New Password">
                                </div>
                                <button class="btn btn-primary">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>
