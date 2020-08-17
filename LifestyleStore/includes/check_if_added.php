<?php
function check_if_added_to_cart($item_id)
{
    include 'includes/common.php';
    
    $user_id=$_SESSION['id'];
    
    //Here we write query for selecting the items which are in cart(The items which user want to buy)
    $select_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));    
    $total_rows_fetched = mysqli_num_rows($select_query_result);
    
    if ($total_rows_fetched >=1) {
        return 1;
    } else {
        return 0;
    }
}
?>