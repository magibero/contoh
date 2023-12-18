<?php
$conn = mysqli_connect("localhost", "root", "", "mhs_1");
if (!$conn){
    die("connection failed: " .mysqli_connect_error());
}else {
    echo"connected successfully";
}

?>