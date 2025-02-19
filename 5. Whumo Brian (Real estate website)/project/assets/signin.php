<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '{$email}' AND password = '{$password}'");
    $sql3 = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '{$email}'");
    $sql4 = mysqli_query($conn, "SELECT * FROM `users` WHERE password = '{$password}'");
    $random_id = rand(time(), 10000000);

    if (mysqli_num_rows($sql3) > 0) {
        if (mysqli_num_rows($sql4) > 0) {
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
                if ($sql) {
                    $_SESSION['user_id'] = $row['user_id'];
                    echo "success";
                }
            } else {
                echo "Email or Password is incorrect";
            }
        } else {
            echo "Your Password is incorrect";
        }
    } else {
        echo "Email does not exist";
    }

} else {
    echo "all input fields are required";
}
?>