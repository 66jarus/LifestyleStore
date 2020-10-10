<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
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
        <div id="banner_image">
            <div class= "container">
                <div id="banner_content​">
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
