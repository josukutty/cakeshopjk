<?php
include 'header.php';
require("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php
        $query="SELECT `Product_Id`, `P_Name`, `P_weight`, `P_Price` FROM `products` WHERE `Product_Id`='1' ";
        $user_result=mysqli_query($con,$query);
        $user_fetch=mysqli_fetch_assoc($user_result);
        $value=$user_fetch['P_Price'];

        $query1="SELECT `Product_Id`, `P_Name`, `P_weight`, `P_Price` FROM `products` WHERE `Product_Id`='2' ";
        $user_result1=mysqli_query($con,$query1);
        $user_fetch1=mysqli_fetch_assoc($user_result1);
        $value1=$user_fetch1['P_Price'];

        $query2="SELECT `Product_Id`, `P_Name`, `P_weight`, `P_Price` FROM `products` WHERE `Product_Id`='3' ";
        $user_result2=mysqli_query($con,$query2);
        $user_fetch2=mysqli_fetch_assoc($user_result2);
        $value2=$user_fetch2['P_Price'];

        $query3="SELECT `Product_Id`, `P_Name`, `P_weight`, `P_Price` FROM `products` WHERE `Product_Id`='4' ";
        $user_result3=mysqli_query($con,$query3);
        $user_fetch3=mysqli_fetch_assoc($user_result3);
        $value3=$user_fetch3['P_Price'];
    ?>
   


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img src="images/images/cake4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">B4U Premium Frosting Cake</h5>
                            <p class="card-text">Rejoice the taste of yummilicious Chocolate with Premium frosting, this Delicious Chocolate Cake with Premium Frosting (Half Kg) can turn any event into a sweeter one.</p>
                            <p class="card-text">Weight = 500g.</p>
                            <p class="card-text">Price - 700Rs.</p>
                            <button type="submit" name="addtocart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="item_name" value="B4U Premium Frosting Cake">
                            <input type="hidden" name="price" value="  <?php echo "$value"; ?>   ">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img src="images/images/cake8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">B4U Chocolate Cake (1 Kg)</h5>
                            <p class="card-text">Your party table will turn into a celebration of taste and beauty with this 1 Kg Roses & Pearls Chocolate Cake. The delicious roses and tiny pearls with deliciousness</p>
                            <p class="card-text">Weight = 1Kg.</p>
                            <p class="card-text">Price - 500Rs.</p>
                            <button type="submit" name="addtocart"  class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="item_name" value="B4U Chocolate Cake">
                            <input type="hidden" name="price" value=" <?php echo "$value1"; ?>">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img src="images/images/cake9.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">B4U Finest Vanilla Cake</h5>
                            <p class="card-text">Here is a treat that nobody can say 'no' to; this Finest Vanilla Cake can turn any regular day into a feast or any celebration to a tastier and better one.</p>
                            <p class="card-text">Weight = 2Kg.</p>
                            <p class="card-text">Price - 1000Rs.</p>
                            <button type="submit" name="addtocart"  class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="item_name"  value="B4U Finest Vanilla Cake">
                            <input type="hidden" name="price" value="<?php echo "$value2"; ?>">
                            
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img src="images/images/cake10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">B4U Marble Cake (1 Kg)</h5>
                            <p class="card-text">Your party table will turn into a celebration of taste and beauty with this 1 Kg Roses & Pearls Chocolate Cake. The delicious roses and tiny pearls with deliciousness</p>
                            <p class="card-text">Weight = 1kg</p>
                            <p class="card-text">Price - 250Rs.</p>
                            <button type="submit" name="addtocart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="item_name" value="B4U Marble Cake">
                            <input type="hidden" name="price" value="<?php echo "$value3"; ?>">
                        </div>
                    </div>
                </form>

            </div>
            
        </div>
    </div>
    
   
    
    
</body>
</html>