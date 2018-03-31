<?php
include("config.php");
//include('session_admin.php');

$name = $_POST['emp_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$designation = $_POST['designation'];
$permission = $_POST['permission'];
$department = $_POST['department'];
$contact = $_POST['contact'];

echo $name."<br>";
echo $username."<br>";
echo $password."<br>";
echo $designation."<br>";
echo $contact."<br>";
echo $permission."<br>";
echo $department."<br>";

$sql = "SELECT dept_name FROM dept where dept_id='$department'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
$dept_name = mysqli_fetch_assoc($result);

$deptname = $dept_name['dept_name'];

echo $dept_name['dept_name']."<br>";
echo $count."<br>";

$sql = "INSERT into emp(name,dept_id,dept,username,passwrd,access,designation,contact) values ('$name','$department','$deptname','$username','$password','$permission','$designation','$contact') ";
$result = mysqli_query($conn,$sql);
header('Location: fts/adashboard.php');
?>
