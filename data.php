<?php
$conn = mysqli_connect('localhost', 'admnin', 'daradk17', 'cafe_ta');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
