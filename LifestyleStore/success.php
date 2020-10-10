<?php
    require "includes/common.php";
    
    if (!isset($_SESSION['email'])) {
        header('location: home.php');
    }
    
    $user_id=$_SESSION['id'];
    $id= explode(",",$_GET['id']);
    $size=sizeof($id);
    
    $update_query=Null;
    $num=0;
    while($num<=$size AND isset($id[$num]))
    {   
        //write update query (Here we update status of products buy by user) as a string and store in $update_query variable
        $update_query ="update users_items SET status='Confirmed' WHERE user_id='$user_id' AND item_id='$id[$num]'";
        $delete_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
    
        $num++;
    }    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Order Confirmation</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="bootstrap/js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       <div class="container">
        <div class="row row_style">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <h4>Your order is confirmed.Thank you for shopping with us.</h4>
                            <h5><a href="products.php">Click here</a> to purchase any other item.</h5> 
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    function stringtoarray($str){
        
    }
?>