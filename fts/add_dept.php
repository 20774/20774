<?php
include("config.php");
//include('session_admin.php');
$dept_name = $_POST['dept_name'];
$dept_code = $_POST['dept_code'];
$sql = "INSERT into dept(dept_name,dept_code) values ('$dept_name','$dept_code') ";
$result = mysqli_query($conn,$sql);
header('Location: emp.php');
?>