
<?php
    include("config.php");
  //include("session.php");
   error_reporting(0);
   session_destroy();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $error = "";
      // username and password sent from form 
      
      //$myusername = mysqli_real_escape_string($db,$_POST['username']);
      //$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $mypassword = $_POST['inputPassword']; //sha1
      $myemail=$_POST['inputEmail'];
      echo  $myemail;
      echo  $mypassword;

      
      if(empty($myemail) || empty($mypassword))
      {
          $error = "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Login Name or Password is invalid(empty)<br>";
      }
      else{

        echo "\nIn not empty\n";

        $sql = "SELECT user_type, name FROM emp WHERE username = '$myemail' and passwrd = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        //echo $result;
        echo $count;
        echo $row;
        echo "Hello!";
        //$active = $row['active'];
        
        // If result matched $myusername and $mypassword, table row must be 1 row
      
        if($count == 1) {
  //         session_register("myusername");
           $_SESSION['emp_user'] = $row['name'];
           $_SESSION['login_user_username'] = $myemail;
           if($row['user_type']==1)
           {
                header("location: home.php");
           }
           else if($row['user_type']==2)
           {
                header("location: adashboard.php");
           }
           else
           {
               header("location: cdashboard.php"); 
           }

           //header("location: adashboard.php");
        }else {
           $error = "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Login Name or Password is invalid<br>";
        }
      }
   }
?>
<!doctype html>
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
    
    <section id="middle-section">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-1 col-md-1"></div>
          
          <div class="col-lg-5 col-md-5" id="login-info">
            <div class="card bg-light mb-3" id="info-card">
              <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-5 col-md-5" id="login-form">
            <div class="card bg-light mb-3" id="login-card">
              <div class="card-header">
                <h5><center>Please sign in</center></h5>
              </div>
              <div class="card-body">
                <form class="form-signin" method="POST" action="">
                  <label for="inputEmail" class="sr-only">Username</label>
                  <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Username" required autofocus>
                  <br>
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                  <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
              </div>
              <?php if(isset($error)){echo $error; echo $row['username'];}
                //echo $myemail;
                //echo $mypassword;
               ?>
            </div>  
          </div>

          <div class="col-lg-1 col-md-1"></div>

        </div>
      </div>
    </section>
  <?php
        include("config.php");
        

        $sql = "SELECT COUNT(dept_id) AS TOTAL from dept";   
        $result = mysqli_query($conn,$sql);
                echo "<table>";

            
        while($row=mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo $row['TOTAL']."<br";
            echo"</tr>";
        }
         echo "</table>";
       ?> 
        

    <section id="lower-middle-section" class="d-none d-md-block">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-1 col-md-1" >
          </div>
          
          <div class="col-lg-2 col-md-2" >
            <div class="box" id="box1">A Basic Panel</div> 
          </div>
          
          <div class="col-lg-2 col-md-2" >
            <div class="box" id="box2">A Basic Panel</div>
          </div>

          <div class="col-lg-2 col-md-2" >
              <div class="box" id="box3">A Basic Panel</div> 
          </div>
          
          <div class="col-lg-2 col-md-2" >
            <div class="box" id="box4">A Basic Panel</div>
          </div>

          <div class="col-lg-2 col-md-2" >
            <div class="box" id="box5">A Basic Panel</div>
          </div>

          <div class="col-lg-1 col-md-2" >
        
          </div>
          
       </div>
      </div>
    </section>

    <section id="bottom-section">
      <div class="container-fluid">
        <center><span id="style2">Copyright All Right Reserved</span></center>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>

