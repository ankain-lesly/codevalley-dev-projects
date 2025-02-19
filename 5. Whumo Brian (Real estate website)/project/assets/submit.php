<?php
session_start();
include_once "config.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);
$amount = mysqli_real_escape_string($conn, $_POST['price']);
$option1 = mysqli_real_escape_string($conn, $_POST['op1']);
$option2 = mysqli_real_escape_string($conn, $_POST['op2']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$noa = mysqli_real_escape_string($conn, $_POST['numA']);
$nor = mysqli_real_escape_string($conn, $_POST['bed']);
$height = mysqli_real_escape_string($conn, $_POST['hgt']);

if (!empty($amount) && !empty($option1) && !empty($option2) && !empty($address) && !empty($noa) && !empty($nor) && !empty($height)) {

        $sql = mysqli_query($connn, "SELECT user_id FROM users WHERE unique_id = '{$id}'");
        if (mysqli_num_rows($sql) === 0) {
            echo "$auth - this is not a valid authurisation code";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions = ['png', 'jpeg', 'jpg'];
                if (in_array($img_ext, $extensions) === true) {

                    $new_img_name =  $img_name;
                     

                    if (move_uploaded_file($tmp_name, "images2/" . $new_img_name)) {


                        $sql2 = mysqli_query($conn, "INSERT INTO info (unique_id, option1, option2,   amount, address, noa, nor, height, img)
                                                 VALUES ( '{$id}', '{$option1}', {$option2}, '{$amount}', {$address} , {$noa} , {$nor} , {$height} ,  '{$new_img_name}')");
                                                 
                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM info WHERE code = '{$auth}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                 
                                echo "success";
                            }
                        } else {
                            echo "something went wrong!";
                        }
                    }
                } else {
                    echo "please select an image file - jpeg, jpg, png";
                }

            } else {
                echo "please select an image file - jpeg, jpg, png";
            }
        }
    
} else {
    echo "All input fields are required";
}
?>