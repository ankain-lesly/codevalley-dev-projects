<?php
session_start();
if (isset($_SESSION['user_id'])) {
    include_once "config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if (isset($logout_id)) {

        
            session_unset();
            session_destroy();
            header("location: ../signin.php");
           
    } else {
        header("location: ../index.php.php");
    }
} else {
    header("location: ../signin.php");
}

?>