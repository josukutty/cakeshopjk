<?php   
session_start();
require("connection.php");

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
<div class="container mt-5" style="margin-left:200px;">

    <div class="row">
        <form action="productinsert.php" method="post" enctype="multipart/form-data" >
            <div class="col-9 " >
                
                <div class="input-group input-group-lg" style="margin-left:10px;">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Name</span>
                    <input type="text" name="P_name"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"><br>
                </div>
                
            </div>
            <div class="col-9 mt-3" >
            
                <div class="input-group input-group-lg " style="margin-left:10px;">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Weight</span>
                    <input type="text" name="weight"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"><br>
                </div>
            
            </div>
            <div class="col-9 mt-3" >
            
                <div class="input-group input-group-lg " style="margin-left:10px;">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Price</span>
                    <input type="text" name="price"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"><br>
                </div>
            
            </div>
            <div class="col-9 mt-3">
                <div class="input-group mb-3 input-group-lg" style="margin-left:10px;">
                    <input type="file" name="image" class="form-control" id="inputGroupFile02" >
                                      
                </div>
                
            </div>
            <div class="col-3 mt-3">
                <div class="input-group mb-3 input-group-lg" style="margin-left: 840px;">
                    <input class="btn btn-primary"type="submit" name="submit" value="Add Product" style="">
                </div>
            </div>
            
        </form>
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