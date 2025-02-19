<?php
session_start();
include_once "config.php";
$admin_id = mysqli_real_escape_string($conn, $_POST['admin_id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($admin_id) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM `admin_hub` WHERE admin_id = '{$admin_id}' AND password = '{$password}'");
    $sql3 = mysqli_query($conn, "SELECT * FROM `admin_hub` WHERE admin_id = '{$admin_id}'");
    $sql4 = mysqli_query($conn, "SELECT * FROM `admin_hub` WHERE password = '{$password}'");
    $random_id = rand(time(), 10000000);

    if (mysqli_num_rows($sql3) > 0) {
        if (mysqli_num_rows($sql4) > 0) {
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
                if ($sql) {
                    $_SESSION['Admin'] = $row['admin_id'];
                    echo "success";
                }
            } else {
                echo "Admin_Id or Password is incorrect";
            }
        } else {
            echo "Admin Password is incorrect";
        }
    } else {
        echo "Admin_Id does not exist";
    }

} else {
    echo "all input fields are required";
}
?>