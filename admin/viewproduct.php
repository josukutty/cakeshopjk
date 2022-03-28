<?php   
session_start();
if( !isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");
}

require("connection.php");



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
                        <th scope="col">Product_id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Weight(gm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $quey="SELECT * FROM `products`";
                            $user_result=mysqli_query($con,$quey);
                            while($user_fetch=mysqli_fetch_assoc($user_result))
                            {
                               
                                echo "
                                     <tr>       
                                    <td>$user_fetch[Product_Id]</td>
                                    <td>$user_fetch[P_Name]</td>
                                    <td>$user_fetch[P_Price]</td>
                                    <td>$user_fetch[P_weight]</td>
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