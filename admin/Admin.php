<?php   
session_start();
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
            background-color: #0c0d0e;
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

        <div class="container">
            <div class="row mt-5 ">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card bg-dark" style="width: 20rem;">
                        <img src="../images/cake1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-light bg-dark">
                            <h5 class="card-title">View Products</h5><br>
                            <p class="card-text">View Current Product List</p><br><br>
                            <a href="viewproduct.php" class="btn btn-primary">Products</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card bg-dark" style="width: 20rem;">
                        <img src="../images/orders.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-light bg-dark">
                            <h5 class="card-title">Manage Orders</h5>
                            <p class="card-text">Verify Orders</p>
                            <a href="Admin Panel.php" class="btn btn-primary">Orders</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card bg-dark" style="width: 20rem;">
                        <img src="../images/cake1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-light bg-dark">
                            <h5 class="card-title">Add Products</h5><br>
                            <p class="card-text">Add More Products</p><br><br>
                            <a href="addproduct.php" class="btn btn-primary">Add</a>
                        </div>
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
