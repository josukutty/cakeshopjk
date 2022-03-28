<?php
    session_start();
    $user_Name=$_SESSION['UserLoginId'];
    $con=mysqli_connect("localhost","root","","miniprojectog");
    if(mysqli_connect_error())
    {
        echo"<script>
        alert('cannot connect to database');
        window.location.href='mycart.php';
        </script>";
        exit();
       
    }

    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['purchase']))
        {
            $query1="INSERT INTO `order_manager`(`User_Name`,`Full_name`, `Phone_no`, `H_Name`,`Place`,`Zip`, `Pay_mod`) VALUES ('$user_Name','$_POST[fullname]','$_POST[phone_no]','$_POST[H_Name]','$_POST[Place]','$_POST[Zip]','$_POST[pay_mod]')";
            if(mysqli_query($con,$query1))
            {
                $Order_Id=mysqli_insert_id($con);
               $query2="INSERT INTO `user_orders`(`Order_id`, `Item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
               $stmt=mysqli_prepare($con,$query2);
               if($stmt)
               {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed');
                window.location.href='home.php';
                </script>";
               }
               else
               {
                echo"<script>
                alert('SQL Quer prepare error');
                window.location.href='mycart.php';
                </script>";
               }
            }
            else
            {
                echo"<script>
                alert('SQL Error');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }

?>