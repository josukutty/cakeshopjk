<?php
include 'header.php';
require("connection.php");

?>

<div class='container mt-5'>
    <div class='row'>
<?php
    $quey="SELECT * FROM `products` ";
    $user_result=mysqli_query($con,$quey);
    while($user_fetch=mysqli_fetch_assoc($user_result)){
        $name=$user_fetch['P_Name'];
        $weight=$user_fetch['P_weight'];
        $price=$user_fetch['P_Price'];

       echo " 
      
       <div class='col-lg-3 mt-3 shadow-sm p-3 mb-5 bg-body rounded'>
        <form action='manage_cart.php' method='POST'>
            <div class='card' style='width: 18rem;'>
            <img src='data:image/jpeg;base64,".base64_encode( $user_fetch['P_image'] )."'/>
                <div class='card-body'>
                    <h5 class='card-title'>$name</h5>
                    <p class=card-text'>Rejoice the taste of yummilicious Chocolate with Premium frosting, this Delicious Chocolate Cake with Premium Frosting (Half Kg) can turn any event into a sweeter one.</p>
                    <p class=card-text'>Weight = $weight gm.</p>
                    <p class='card-text'>Price - $price Rs.</p>
                    <button type='submit' name='addtocart' class='btn btn-info'>Add to cart</button>
                    <input type='hidden' name='item_name' value='$name'>
                    <input type='hidden' name='price' value='$price'>
                </div>
            </div>
        </form>
        </div>
        ";
    }

?>
</div>
</div>