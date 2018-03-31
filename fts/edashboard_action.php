<?php
include("config.php");
	if(isset($_POST['dept']))//Send
    {
      $dept_no = $_POST['dept'];
      $remark = $_POST['remark'];
      $id=$_POST['id'];
      echo $id;
      echo $dept_no;
      $sql_tranist = "INSERT INTO transit_table (file_no,prev_dept_id,emp_name,next_dept_id,timestamp_,subject) VALUES ('$id','6','rajas','$dept_no','123654','Road')";
      //$sql_tranist = "INSERT INTO transit_table (file_no,prev_dept_id,emp_name,next_dept_id," 
      //$sql = "SELECT file_no //,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status from dept_file 
      //RE file_no = '$file_no'";   
      $result = mysqli_query($conn,$sql_tranist);
      //$count = mysqli_num_rows($result);
      //echo $count."<br>";
    }
  
  else if(isset($_POST["new_status"]))//Update Status
  {
    $id=$_POST['id'];
    //$dept_no = $_POST['dept'];
    $status = $_POST['new_status'];
      echo $id;
      $sql_dept="SELECT dept_name from dept WHERE dept_id='2'";
        $result = mysqli_query($conn,$sql_dept);
        while ($row = $result->fetch_assoc()) {
    echo $row['dept_name']."<br>";
}
       // echo $result;
        //$dep_name=$result['dept_name'];
        //echo $dep_name;
        $sql_update="UPDATE $dept_name SET local_status= $status WHERE file_no= $id";
        $result_update = mysqli_query($conn,$sql_dept);
        //echo $result."<br>";    
  }
  else//Return
  {
    $id=$_POST['id'];
    $sql_find_prev="SELECT applicant_name,applicant_contact,applicant_email,timestamp_,subject,previous_dept_id from file WHERE file_no='$id'";
    $result = mysqli_query($conn,$sql_find_prev);
    //$row = $result->fetch_assoc();
    $row = mysqli_fetch_assoc($result);
       //while ($row = mysqli_fetch_assoc($result)) {
    echo $row['previous_dept_id']."<br>";
    echo $row['subject']."<br>";
    echo $row['applicant_name']."<br>";
    echo $row['applicant_email']."<br>";
    echo $row['applicant_contact']."<br>";
    echo $row['timestamp_']."<br>";
    //}
   $previous_dept_id = $row['previous_dept_id'];
   $subject = $row['subject'];
   $applicant_name = $row['applicant_name'];
   $applicant_email =$row['applicant_email'];
   $applicant_contact = $row['applicant_contact'];
   $timestamp_ = $row['timestamp_'];
   $sql_dept1="SELECT dept_code from dept WHERE dept_id='$previous_dept_id'";
        $result1 = mysqli_query($conn,$sql_dept1);
       // $row1 = $result1->fetch_assoc();
       $row1 = mysqli_fetch_assoc($result1);
        //while ($row1 = mysqli_fetch_assoc($result1)) {
    echo $row1['dept_code']."<br>";
    $dept_name = $row1['dept_code'];
    //}
    
    $sql_insert="INSERT INTO $dept_name (file_no,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status) VALUES ('$id','$subject','$applicant_name','$applicant_contact','$applicant_email','Rajas','$timestamp_','Doings')";
    //$sql_insert="INSERT INTO Water (file_no,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status) VALUES ('FA_123456_rajas','The Road Construction','Rajas','123654789','er@gmail.com','Rajas','123658','Doings')";
        $result = mysqli_query($conn,$sql_insert);
        echo $result;
      echo $id;
  }
?>
