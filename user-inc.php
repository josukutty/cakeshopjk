<?php
require('connection.php');
echo "cancel";


$oid=$_POST["Order_Id"];  

$query="UPDATE `order_manager` SET `status`='2' WHERE `Order_id` = '$oid'";
$query_result=mysqli_query($con,$query);
if($query_result){
    echo"<script>
    alert('Order Cancelled');
    window.location.href='user.php';
    </script>";
}


?>