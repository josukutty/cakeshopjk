<?php
require("connection.php");
session_start();

session_regenerate_id(true);


if( !isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <style>
        body{
            margin:0;
        }
        div.header{
            color: #f0f0f0;
            font-family: poppins;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            background-color: #1c1c1e;
        }
        div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Panel - <?php echo $_SESSION['AdminLoginId'];   ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>"   method="post">
            <button type="submit" name="Logout">Log out</button>
        </form>
    </div>
    

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center table-dark table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Order_id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Address Line 1</th>
                         <th scope="col">Address Line 2</th>
                         <th scope="col">Zip</th>
                        <th scope="col">Pay Mode</th>
                        <th scope="col">Orders</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $quey="SELECT * FROM `order_manager` WHERE `status` = 0";
                            $user_result=mysqli_query($con,$quey);
                            while($user_fetch=mysqli_fetch_assoc($user_result))
                            {
                               
                                echo "
                                     <tr>       
                                    <td>$user_fetch[Order_id]</td>
                                    <td>$user_fetch[Full_Name]</td>
                                    <td>$user_fetch[Phone_no]</td>
                                    <td>$user_fetch[H_Name]</td>
                                     <td>$user_fetch[Place]</td>
                                     <td>$user_fetch[Zip]</td>
                                    <td>$user_fetch[Pay_mod]</td>
                                    <td>
                                        <table class='table text-center table-dark table-hover'>
                                            <thead>
                                                <tr>
                                                <th scope='col'>Item Name</th>
                                                <th scope='col'>Price</th>
                                                <th scope='col'>Quantity</th>
                                               
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                    ";
                                    
                                    $order_query="SELECT * FROM `user_orders` WHERE  `Order_id` = $user_fetch[Order_id]";
                                    $order_result=mysqli_query($con,$order_query);
                                    while($order_fetch=mysqli_fetch_assoc($order_result))
                                    {
                                        echo "
                                        <tr>
                                        <td>$order_fetch[item_name]</td>
                                        <td>$order_fetch[Price]</td>
                                        <td>$order_fetch[Quantity]</td>
                                        </tr>
                                        ";
                                    }
                                     echo " 
                                                               
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <form action='adminverify.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-outline-success'>Accept</button>
                                            <input type='hidden' name='Order_Id' value='$user_fetch[Order_id]'>
                                        </form><br>

                                        <form action='adminreject.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-outline-danger'>Reject</button>
                                            <input type='hidden' name='Order_Id' value='$user_fetch[Order_id]'>
                                        </form>
                                    </td>   
                                    </tr>
                                ";
                            }
                        ?>
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php
        if(isset($_POST['Logout'])){
            session_destroy();
            header("location: Admin Login.php");
        }

    ?>
</body>
</html>