<?php
$conn = mysqli_connect('cafeta.cnaea042gafi.us-west-1.rds.amazonaws.com', 'admin', 'daradk17', 'cafeta');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
