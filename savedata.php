<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

include 'config.php';
$sql = "insert into student(sname,saddress,sclass,sphone) values ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}' )";  //query run in the connection
$result = mysqli_query($conn, $sql) or die("failed");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
?>