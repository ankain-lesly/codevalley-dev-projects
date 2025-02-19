<?php
$conn = mysqli_connect("localhost", "root", "", "project");
if (!$conn) {
    echo "Database connected" . mysqli_connect_error();

}
?>