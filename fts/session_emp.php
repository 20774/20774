<?php
   include('config.php');
   session_start();

   $user_check_login = $_SESSION['login_user_username'];
   $user_check_emp = $_SESSION['emp_user'];   
   $ses_sql = mysqli_query($conn,"SELECT name FROM emp WHERE username = '$user_check_login'");
   
   $row = mysqli_fetch_array($ses_sql);

   //echo $row['guide_name'];
   
   $login_user = $row['name'];
   
   if($login_user!=$user_check_emp){
      header("location: index.php");
   }
?>