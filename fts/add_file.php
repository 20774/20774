<?php
//include("config.php");
include('session_emp.php');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$department = $_POST['department'];
$contact = $_POST['contact'];

echo $name."<br>";
echo $email."<br>";
echo $subject."<br>";
echo $department."<br>";
echo $contact."<br>";

$timestamp_=time();

$sql = "SELECT dept_code FROM dept where dept_id='$department'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
$dept_name = mysqli_fetch_assoc($result);

$dept_code = $dept_name['dept_code'];

$user = $_SESSION['emp_user'];
echo $user."<br>";

$file = $dept_code."/".$timestamp_."/".$user;
echo $file;

$sql = "INSERT into file(file_no,subject,applicant_name,applicant_contact,applicant_email,system_entry_name,timestamp_,origin_dept_id,previous_dept_id,current_dept_id,urgent_bit) values ('$file','$subject','$name','$contact','$email','$user','$timestamp_','$department',0,0,0) ";		
//,current_dept_incharge
$result = mysqli_query($conn,$sql);
header('Location: emp.php');
?>