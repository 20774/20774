<?php
include("config.php");
error_reporting(0);
include('session.php');

$count = 0;

$sql = "SELECT dept_id,dept_name,dept_code FROM dept ORDER BY dept_id ASC";   
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

$user = $_SESSION['user'];
$designation = $_SESSION['designation'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

    if(isset($_POST['dept']))
    {
      $local_status_bit = 0;
      $dept = $_POST['dept'];
      $sql = "SELECT dept_id,dept_name,dept_code FROM dept where dept_name='$dept' or dept_code='$dept'";   
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
    }
  }
  else
 {
    $_SESSION['dept']='NULL';
    $_SESSION['submit_emp']='NULL';
    $_SESSION['submit_dept']='NULL';
 }
//header('Location: emp.php');

?>

<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <title>File Tracking System</title>
    <link rel="shortcut icon" type="image/png" href="images/fts-icon.ico">
  
  </head>
  
  <body>

    <nav class="container-fluid" id="navbar">
      <div class="row">
        <div class="col-lg-12">
          <div id="navbar-img" class="d-none d-sm-block">
            <img src="images/emblem.png" class="img-responsive" id="nav-logo">
          </div>
          <div id="navbar-line">
          </div>  
          <div id="navbar-txt">
            <span id="style1">File Tracking System</span> 
            <br> 
            <span id="style2">Government of Punjab</span>
          </div>
        </div>
      </div>
    </nav>

    <div class="clear"></div>
  
    <div class="container-fluid" id="topbar">
      <div class="row">

        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <div id="myprofile-section">

            <div id="myprofile">
              <span id="style3"><?php echo $user; ?></span>
              <img src="images/down-arrow.png" class="img-responsive" id="down-arrow">

            </div>

          </div>          
        </div>
      </div>
    </div>
    <div id="profile-dropdown" class="dropdown">
      <span id="style3"><center><?php echo $designation; ?></center></span>
      <br>
      <center>
        <a href="logout.php"><button type="button" class="btn-xs btn-primary">Logout</button></a>  
      </center>
    </div>
    
    <div class="container" id="middle-section">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">View Departments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Add New Department</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Add Employee</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content" id="tab-content">
        <div id="home" class="container tab-pane active"><br>
        <form method="POST" action="">
          <span id="style4">View Departments</span>
          <div class="row">
            <div class="input-group" id="search-bar">
              <input type="text" class="form-control" name="dept" id="dept" placeholder="Search for..." required>
              <span class="input-group-btn"></span>
              <button name="submit" class="btn btn-secondary" type="submit">Go!</button>
            </div>
          </div>
          <div class="row" id="view-dept-list">            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th >Sr. No</th>
                  <th>Department Name</th>
                  <th>Department Code</th>
                </tr>
              </thead>
              <tbody>
                <?php
              if ($count>0) {
                # code...
                while($row = mysqli_fetch_assoc($result))
                {
                    $sr_no = $row['dept_id'];
                    $department_code = $row['dept_name'];
                    $name = $row['dept_code'];
                    
                    echo "<tr>";
                    echo "<td>".$sr_no."</td>";
                    echo "<td>".$department_code."</td>";
                    echo "<td>".$name."</td>";
                    echo "</tr>";                
                }                
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>  
          </form>
        <div id="menu1" class="container tab-pane fade"><br>
          <span id="style4">Add New Department</span>

          <div id="add-dept">
            <form action="" method="POST"> 

              <div class="row">
              
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group" id="dept-name">
                    <label for="dname">Department Name:</label>
                    <input type="text" class="form-control" id="dname" placeholder="Enter Dept. Name" name="dept_name" required>
                  </div>
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="dcode">Department Code:</label>
                    <input type="text" class="form-control" id="dcode" placeholder="Enter Dept. Code" name="dept_code" required>
                  </div>
                </div> 
              </div>

              <div class="row" id="file-submit">
                
                  <button type="submit" class="btn btn-primary" name="submit_dept">Submit</button>

              </div>
            </form>
            <?php
            //include("config.php");
            if(isset($_POST['submit_dept']))
            {   
                //include('session_admin.php');
                $dept_name = strtolower($_POST['dept_name']);
                $dept_code = $_POST['dept_code'];
                $sql = "INSERT into dept(dept_name,dept_code) values ('$dept_name','$dept_code') ";
                $result = mysqli_query($conn,$sql);
                
                $sql_create_table = "CREATE table $dept_code (file_no varchar(100),subject varchar(100), applicant_name varchar(100), applicant_contact bigint(10),applicant_email varchar(100),dept_incharge varchar(100), start_timestamp bigint(10), local_status varchar(100))";
                $result = mysqli_query($conn,$sql_create_table);
                
                //header('Location: emp.php');
            }
            else
            {
                $_SESSION['submit_dept']='NULL';
            }
            ?>
          </div>
        </div>

        <div id="menu2" class="container tab-pane fade"><br>
          <span id="style4">Add New Employee</span>

          <div id="add-file">
            <form action="" method ="POST"> 
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="ename">Employee Name: </label>
                    <input type="text" class="form-control" id="ename" placeholder="Enter name" name="emp_name" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="econtact">Employee Contact: </label>
                    <input type="text" class="form-control" id="econtact" placeholder="Enter Contact" name="contact" required>
                  </div>
                </div>
              </div>
            
              <div class="row">
              
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group" id="app-contact">
                    <!--<label for="dept">Department: </label>-->
                   <!-- <input type="text" class="form-control" id="dept" placeholder="Enter Department" name="department">-->
                    <label for="dept">Department:</label>
                    <select class="form-control" id="department" name ="department">
                    <?php
                    $sql = "SELECT dept_name,dept_id FROM dept";
                    $result = mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($result); 
                    if ($count>0) {
                      # code...
                      while ($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "<option value=".$row['dept_id'].">".ucfirst($row['dept_name'])."</option>";
                      }

                    }
                    ?>
                    <!--
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    -->
                    </select>
                   </div>
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="desig">Designation:</label>
                    <input type="text" class="form-control" id="desig" placeholder="Designation" name="designation" required>
                  </div>
                </div> 
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="email">Employee Email: </label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="username" required> 
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="pwd">Set Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    Permission:
                    <label class="radio-inline">
                      <input type="radio" name="permission" value =0>Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="permission" value=1>No
                    </label>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group" id="app-contact">
                    
                    <label for="dept">User Type:</label>
                     <select class="form-control" id="user_type" name ="user_type">
                      <option value=2>Employee</option>
                      <option value=1>Admin</option>
                      <option value=3>File Adder</option>
                      
                    </select>
                    </div>
                
                  </div>
                </div>
                   
              <div class="row" id="file-submit"">
                  <button type="submit" class="btn btn-primary" name="submit_emp">Submit</button>

              </div>
            </form>
          </div>
        </div>
        <?php
        //include("config.php");
        //include('session_admin.php');
        if(isset($_POST['submit_emp']))
        {
        $name = strtolower($_POST['emp_name']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $designation = strtolower($_POST['designation']);
        $permission = $_POST['permission'];
        $department = $_POST['department'];
        $contact = $_POST['contact'];
        $user_type = $_POST['user_type'];
        
        //echo $name."<br>";
        //echo $username."<br>";
        //echo $password."<br>";
        //echo $designation."<br>";
        //echo $contact."<br>";
        //echo $permission."<br>";
        //echo $department."<br>";

        $sql = "SELECT dept_name FROM dept where dept_id='$department'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        $dept_name = mysqli_fetch_assoc($result);

        $deptname = strtolower($dept_name['dept_name']);

        //echo $dept_name['dept_name']."<br>";
        //echo $count."<br>";

        $sql = "INSERT into emp(name,dept_id,dept,username,passwrd,access,designation,contact,user_type) values ('$name','$department','$deptname','$username','$password','$permission','$designation','$contact','$user_type') ";
        $result = mysqli_query($conn,$sql);
        //header('Location: /adashboard.php');
        
        }
         else
         {
            $_SESSION['submit_emp']='NULL';
         }
        ?>

      </div>
    </div>
    

    <section id="bottom-section" style="margin-top: 10%;">
      <div class="container-fluid">
        <center><span id="style2">Copyright All Right Reserved</span></center>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('#myprofile').click(function(){
        if($('#profile-dropdown').is(":visible")){
          $('#profile-dropdown').hide();
        }
        else{
          $('#profile-dropdown').show();  
        }
      })
      
    </script>
  </body>

</html>
