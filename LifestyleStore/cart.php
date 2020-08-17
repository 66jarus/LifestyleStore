<?php
    require 'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }

    $user_id = $_SESSION['id'];

    //select Product(id,name,price) from items table of current user 
    //here we use alihace for table names i for items table and ui is for users_items table
    $select_query = "select i.id,i.name,i.price FROM users_items ui INNER JOIN items i ON ui.status='Added to cart' AND ui.item_id = i.id And ui.user_id=$user_id order by i.id asc";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
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
            include "includes/header.php";
        ?>

        <div class="margin"></div>

        <div class="container">
            <table class="table">
                <tbody>
                    <?php
                        if ($total_rows_fetched == 0) {
                            echo 'Add items to the cart first!';
                        } else {
                    ?> 
                            <tr>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            
                            <?php
                                $total = 0;//$total variable is used for add the prices of items in while loop
                                $id=NULL;//$id variale is used for concatenation of ids of product
                                //While loop is used for display all items which are in cart
                                while ($row = mysqli_fetch_array($select_query_result)) { 
                            ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['price'];?></td>
                                        <td><a href="cart_remove.php?id=<?php echo $row['id'];?>" class="remove_item_link"> Remove</a> </td>
                                    </tr>
                            <?php
                                   if($id==NULL){
                                        $id=$row['id'];
                                    }else{
                                        $id="$id,".$row['id'];
                                    }
                                    $total=$total+$row["price"];
                                }
                            ?>

                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs <?php echo $total; ?>/-</td>
                            <td><a href="success.php?id=<?php echo "$id"; ?>" class="btn btn-primary">Confirm Order</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <?php
        include "includes/footer.php";
        ?>    
    </body>
</html>