<?php

if (isset($_POST['Register'])) {
    require "connection.php";


$username = $_POST['UserName'];
$password = $_POST['UserPass'];
$confirmPass = $_POST['ConfirmPass'];

if (empty($username) || empty($password) || empty($confirmPass)) {
    header("Location: register.php?error=emptyfields&username=".$username);
    exit();
} elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
    header("Location: register.php?error=invalidusername&username=".$username);
    exit();
} elseif($password !== $confirmPass) {
    header("Location: register.php?error=passwordsdonotmatch&username=".$username);
    exit();
}

else {
    $sql = "SELECT User_Name FROM user_login WHERE User_Name = ?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: register.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);

        if ($rowCount > 0) {
            echo"<script>
            alert('Username Taken');
            window.location.href='register.php';
           
            </script>";
           
        } else {
            $sql = "INSERT INTO user_login (User_Name, User_Password) VALUES (?, ?)";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: register.php?error=sqlerror");
                exit();
            } else {
               

                mysqli_stmt_bind_param($stmt, "ss", $username, $password);
                mysqli_stmt_execute($stmt);
                echo"<script>
                alert('User Registered');
                window.location.href='register.php';
               
                </script>";
            }
        }
    }
}
mysqli_stmt_close($stmt);
mysqli_close($con);
}
?>
