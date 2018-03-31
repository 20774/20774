<?php
  include("config.php");
  include('session_emp.php');
  $count = 0;
  $ucount = 0;
  $rcount = 0;
  $user = $_SESSION['user'];
  $designation = $_SESSION['designation'];
  $dept_id = $_SESSION['dept_id'];

  $sql = "SELECT * from dept_file";   
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

    if(isset($_POST['file']))
    {
      
      $file_no = $_POST['file'];
      echo $file_no."<br>";

      $sql = "SELECT file_no ,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status from dept_file WHERE file_no = '$file_no'";   
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      //echo $count."<br>";
    }
    if(isset($_POST['remark']))
    {
      echo "hi";
      $file_no = $_POST['id'];
      $dept_no = $_POST['dept'];
      $remark = $_POST['remark'];

      echo $file_no."<br>";
      echo $dept_no."<br>";
      //$sql_tranist = "INSERT INTO transit_table (file_no,prev_dept_id,emp_name,next_dept_id," 
      //$sql = "SELECT file_no //,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status from dept_file 
      //RE file_no = '$file_no'";   
      //$result = mysqli_query($conn,$sql);
      //$count = mysqli_num_rows($result);
      //echo $count."<br>";
    }
     if(isset($_POST['update_status']))
    {
      
      $file_no = $_POST['update_status'];
      echo $file_no."<br>";
      $sql = "SELECT file_no ,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status from dept_file WHERE file_no = '$file_no'";   
      $result = mysqli_query($conn,$sql);
      $ucount = mysqli_num_rows($result);
      //echo $count."<br>";
    }
    //if(isset($_POST['']))
    //{
      
     // $file_no = $_POST[''];
      //echo $file_no."<br>";
      //$sql = "SELECT file_no ,subject,applicant_name,applicant_contact,applicant_email,dept_incharge,start_timestamp,local_status from dept_file WHERE file_no = '$file_no'";   
      //$result = mysqli_query($conn,$sql);
      //$ucount = mysqli_num_rows($result);
      //echo $count."<br>";
    //}
  }
  $sql = "SELECT file_no from transit_table WHERE next_dept_id = '$dept_id'";   
  $result2 = mysqli_query($conn,$sql);
  $rcount = mysqli_num_rows($result2);
  

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
              <span id="style3">My Profile</span>
              <img src="images/down-arrow.png" class="img-responsive" id="down-arrow">

            </div>

          </div>          
        </div>
      </div>
    </div>
    <div id="profile-dropdown" class="dropdown">
      <span id="style3">Name</span>
      <br>
      <span id="style3">Designation</span>
      <br>
      <center>
        <a href="#logout"><button type="button" class="btn-xs btn-primary">Logout</button></a>  
      </center>
    </div>
    
    <div class="container" id="middle-section">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">View Files</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Receive File</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content" id="tab-content">
        <div id="home" class="container tab-pane active">
          <br>
          <span id="style4">View Files</span>
          <div class="row">
            <form method="POST" action="">
              <div class="input-group" id="search-bar">
                <input type="text" class="form-control" placeholder="Search for..." name="file" id="file">
                <span class="input-group-btn"></span>
                <button class="btn btn-secondary" type="submit">Go!</button>
              </div>
            </form>
          </div>

          <div class="row" >            
            <table class="table table-hover" id="view-files-list">
              <thead>
                <tr>
                  <th>File No.</th>
                  <th>Subject</th>
                  <th>Applicant</br>Name</th>
                  <th>Applicant</br>Contact</th>
                  <th>Local Status</th>
                  <th><center>Action</center></th>
                </tr>
              </thead>
              
              <tbody>
                <?php
                  if ($count>0) {
                    # code...
                    while($row = mysqli_fetch_assoc($result))
                    {
                    
                      $file_no = $row['file_no'];
                      $subject = $row['subject'];
                      $name = $row['applicant_name'];
                      $contact = $row['applicant_contact'];
                      $local_status = $row['local_status'];
                
                      
                      echo "<tr>";
                      echo "<td>".$file_no."</td>";
                      echo "<td>".$subject."</td>";
                      echo "<td>".$name."</td>";
                      echo "<td>".$contact."</td>";
                      echo "<td>".$local_status."</td>";
                      echo "<td><center><button id=\"".$file_no."\" class='btn-xs btn-success sendmodal' type='button' data-toggle='modal' data-target='#myModal1'>Send</button><button class='btn-xs btn-danger returnmodal' id=\"".$file_no."\" type='button' data-toggle='modal' data-target='#myModal2'>Return</button><button class='btn-xs btn-primary updatemodal' id=\"".$file_no."\" type='button' data-toggle='modal' data-target='#myModal3'>Update</button></center></td>";      
                      echo "</tr>";                
                  }                
                }
              ?>

              </tbody>
            
            </table>
          </div>

          <div class="modal fade" id="myModal1">
            <div class="modal-dialog">
              <div class="modal-content">
      
        <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Send File</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="send-file-form" class="form1" name="form1">
        <!-- Modal body -->
                  <div class="modal-body">
                    <div class="form-group" id="app-contact">
                      <label for="dept">Department:</label>
                      <select class="form-control" id="dept" name="dept">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="remark">Remarks: </label>
                      <input type="text" class="form-control" id="remark" name="remark" placeholder="Remarks">
                    </div>
                  </div>
                </form>
                    </div>
              </div>
          </div>
        </div>
          <!-- Modal footer -->
                <div class="modal-footer">
                  <button id="submit1" class="btn btn-primary" data-dismiss="modal">Update</button>
                </div>
<div id="menu1" class="container tab-pane fade"><br>
          <span id="style4">Receive File</span>
          <div class="row" id="view-files-list">            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>File Number</th>
                  <th>Subject</th>
                  <th>Applicant Name</th>
                  <th>Applicant Contact</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if($rcount > 0)
                  {
                     while($row2 = mysqli_fetch_assoc($result2))
                      {
                        $fileno = $row2['file_no'];
                        $sql2="SELECT subject, applicant_name, applicant_contact from file where file_no ='$fileno'";
                        $result3 = mysqli_query($conn,$sql2);
                        $row3 = mysqli_fetch_assoc($result3);

                        $filesubject = $row3['subject'];
                        $appname = $row3['applicant_name'];
                        $appcontact = $row3['applicant_contact'];
                    
                          echo "<tr>";
                          echo "<td>".$fileno."</td>";
                          echo "<td>".$filesubject."</td>";
                          echo "<td>".$appname."</td>";
                          echo "<td>".$appcontact."</td>";
                          echo "<td><center><button id=\"".$file_no."\" class='btn-xs btn-primary receivemodal' type='button' data-toggle='modal' data-target='#myModal4' name='submit4' id='submit4'>Receive</button></center></td>";
                          echo "</tr>";                           
                      }
                  }
                ?>
            
                
              </tbody>
            </table>
          </div>

          <div class="modal fade " id="myModal4">
            <div class="modal-dialog">
              <div class="modal-content">
        
          <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Are You Sure?</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="receive-file-form" class="form4" name="form4">
                  <div class="modal-body">
                    <button name="submit4" id="submit4" class="btn btn-primary" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <section id="bottom-section" class="footer">
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
      });

      $(".sendmodal").click(function () {
            var my_id_value = $(this).attr('id');
            $('#send-file-form').append('<input type="hidden" name="id" value="'+my_id_value+'" />');
      });

      $(".returnmodal").click(function () {
            var my_id_value = $(this).attr('id');
            $('#return-file-form').append('<input type="hidden" name="id" value="'+my_id_value+'" />');
      });

      $(".updatemodal").click(function () {
            var my_id_value = $(this).attr('id');
            $('#update-status-form').append('<input type="hidden" name="id" value="'+my_id_value+'" />');
      });
      $(".receivemodal").click(function () {
            var my_id_value = $(this).attr('id');
            $('#receive-file-form').append('<input type="hidden" name="id" value="'+my_id_value+'" />');
      });

      $("button#submit1").click(function(){
        $.ajax({
        type: "POST",
        url: "edashboard_action.php",
        data: $('form.form1').serialize(),
        success: function(message){
        alert(message);
        },
        error: function(){
          alert("Error");
        }
      });
    });
      $("button#submit2").click(function(){
        $.ajax({
        type: "POST",
        url: "edashboard_action.php",
        data: $('form.form2').serialize(),
        success: function(message){
        alert(message);
        },
        error: function(){
          alert("Error");
        }
      });
    });
      $("button#submit3").click(function(){
      
        $.ajax({
        type: "POST",
        url: "edashboard_action.php",
        data: $('form.form3').serialize(),
        success: function(message){
        alert(message);
        },
        error: function(){
          alert("Error");
        }
      });
    });
     $("button#submit4").click(function(){
        $.ajax({
        type: "POST",
        url: "edashboard_action.php",
        data: $('form.form4').serialize(),
        success: function(message){
          alert(message);
        },
        error: function(){
          alert("Error");
        }
      });
    });


    
    </script>
      
    </script>
  </body>

</html>
