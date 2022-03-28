<?php
require "connection.php";
session_start();
if( !isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");
}


if(isset($_POST['submit'])){
    $name=$_POST['P_name'];
    $weight=$_POST['weight'];
    $price=$_POST['price'];
    $imgp = $_POST['image'];
    /*if( empty($name) || empty($weight) || empty($price ) || empty($imgp)){
        echo"<script>
            alert('Empty Fields');
            window.location.href='addproduct.php';
            </script>";

    }else{*/
        $img= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));




        echo "<br>";
    
        $query="INSERT INTO `products`(`P_Name`, `P_weight`, `P_Price`, `P_image`) VALUES ('$name','$weight','$price','$img')";
        $user_result=mysqli_query($con,$query);
        if($user_result){
            echo"<script>
            alert('Product Added');
            window.location.href='addproduct.php';
            </script>";
        }else{
            echo"<script>
            alert('Product Adding failed');
            window.location.href='addproduct.php';
            </script>";
        }
    

    //}

    

   
}else{
    echo "Error";
}


?>