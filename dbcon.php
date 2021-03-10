<?php
include 'dbcon.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>