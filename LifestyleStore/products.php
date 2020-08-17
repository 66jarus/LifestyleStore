<?php
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product Page</title>
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
          include 'includes/check_if_added.php';
        ?>
        
        <div class="margin"></div>
        
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/camera/Cannon_EOS.jpg" alt="Image Camera">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs. 36000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(1) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/camera/Sony_DSLR.jpg" alt="Image Camera">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs. 40000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(2) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/camera/Cannon.jpg" alt="Image Camera">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs. 50000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(3) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/camera/Olympus_DSLR.jpg" alt="Image Camera">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs. 80000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(4) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/watch/Titan_Model_301.jpg" alt="Image Watch">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price:Rs. 13000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(5) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/watch/Titan_Model_201.jpg" alt="Image Watch">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price:Rs. 3000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(6) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/watch/HMT_Milan.jpg" alt="Image Watch">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs. 8000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(7) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/watch/Faber_Luba_111.jpg" alt="Image Watch">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price:Rs. 18000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(8) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/shirt/H&W.jpg" alt="Image Shirt">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:Rs. 800.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(9) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/shirt/Luis_Phil.jpg" alt="Image Shirt">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs. 1000.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(10) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/shirt/John_Zok.jpg" alt="Image Shirt">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price:Rs. 1500.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                            if (check_if_added_to_cart(11) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="images/shirt/Jhalsani.jpg" alt="Image Shirt">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price:Rs. 1300.00</p>
                    </div>
                    <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                    <?php
                    } else {
                        if (check_if_added_to_cart(12) != 0) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                    ?> 
                        <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a> 

                    <?php
                        }
                    }
                    ?>
                </div>    
            </div>
        </div>
        <?php
          include 'includes/footer.php';
        ?>
    </body>
</html>
