<?php  

require("connection.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="myform">
            <form method="POST" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF'])?>" >
                <h2>USER LOGIN</h2>
                <input type="text" placeholder="User Name" name="UserName">
                <input type="password" placeholder="password" name="UserPass">
                <button type="submit" name="Login" class="btn" style="background-color : #1c1c1e;color : white; ">Login</button><br><br>
                 Don't have an account?
                <a href="register.php" style="text-decoration : none;">Register now!!</a><br>
                <a href="admin/Admin Login.php" style="text-decoration:none;">Admins Here!!</a>
            </form>
        </div>
        <div class="image">
            <img src="user-login.jpg" width="250px">
        </div>
    </div>

<?php

function input_filter($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if(isset($_POST['Login']))
{

    #filtering user input
    $UserName=input_filter($_POST['UserName']);
    $UserPass=input_filter($_POST['UserPass']);

    #escaping special symbols used in sql statement
    $UserName=mysqli_real_escape_string($con,$UserName);
    $UserPass=mysqli_real_escape_string($con,$UserPass);

    #query template
    $query="SELECT * FROM `user_login` WHERE `User_Name`=? AND `User_Password`=?";

    #prepared statement
   if($stmt=mysqli_prepare($con,$query))
   {
       mysqli_stmt_bind_param($stmt,"ss",$UserName,$UserPass);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_store_result($stmt);
       if(mysqli_stmt_num_rows($stmt)==1)
       {
           session_start();
           $_SESSION['UserLoginId']=$UserName;
           header("location: Home.php");
       }
       else
       {
            echo "<script>alert('invalid user name or password');</script>";
       }
       mysqli_stmt_close($stmt);
   }else
   {
        echo "<script>alert('SQL query Not prepared');</script>";
        echo "Not prepared";
   }
}



?>
</body>
</html>