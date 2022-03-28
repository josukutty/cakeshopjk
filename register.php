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
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="myform">
            <form method="POST" action="register-inc.php" >
                <h2>REGISTER USER</h2>
                <input type="text" placeholder="User Name" name="UserName">
                <input type="password" placeholder="password" name="UserPass">
                <input type="password" placeholder="confirm password" name="ConfirmPass">
                <button type="submit" name="Register" style="background-color : #1c1c1e;color : white; ">Register</button><br><br>
                Already Have An account ? 
                 <a href="index.php" style="text-decoration : none;">Login Here!!</a>
            </form>
        </div>
        <div class="image">
            <img src="user-login.jpg" width="250px">
        </div>
    </div>
 







</body>
</html>