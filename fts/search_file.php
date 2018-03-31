<?php
include("config.php");
//include('session_emp.php');

$file = $_POST['file'];
echo $file."<br>";

//$user = $_SESSION['emp_user'];
//echo $user."<br>";

$sql = "SELECT file_no,subject,applicant_name,applicant_contact,applicant_email,system_entry_name,timestamp_,origin_dept_id,previous_dept_id,current_dept_id,urgent_bit FROM file WHERE file_no = '$file'";		
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

echo $row['file_no']."<br>";
echo $row['subject']."<br>";
echo $row['applicant_name']."<br>";
echo $row['applicant_email']."<br>";
echo $row['applicant_contact']."<br>";
echo $row['system_entry_name']."<br>";
//echo $row['timestamp_']."<br>";
echo $row['origin_dept_id']."<br>";
echo $row['previous_dept_id']."<br>";
echo $row['current_dept_id']."<br>";
echo $row['urgent_bit']."<br>";

$file_no = $row['file_no'];
$subject = $row['subject'];
$name = $row['applicant_name'];
$email = $row['applicant_email'];
$contact = $row['applicant_contact'];
$emp_name = $row['system_entry_name'];
$timestamp_ = $row['timestamp_'];
$origin_dept_id = $row['origin_dept_id'];
$previous_dept_id = $row['previous_dept_id'];
$current_dept_id = $row['current_dept_id'];
$urgent_bit = $row['urgent_bit'];

//header('Location: emp.php');
?>