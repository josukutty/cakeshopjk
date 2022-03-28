<?php
        if(isset($_POST['Logout'])){
            unset($_SESSION["UserLoginId"]);
            header("location: index.php");
        }

    ?>