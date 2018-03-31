<?php
//include("session_emp.php");
include("config.php");
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
    
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>File Tracking System</title>
  </head>
  <!-- Custom CSS -->
    
    <title>File Tracking System</title>
  </head>
  
  <body id="login">
  	<nav class="container-fluid" id="topbar">
  		<div class="row">
  			<div class="col-lg-2" class="topbar-div">
  				<center>
  					<img src="images/emblem.png" class="img-responsive" id="emblem-img">	
  				</center>
  				
  			</div>
  			<div class="col-lg-8" class="topbar-div">
  				<center>
  					<span id="fontstyle1">FILE TRACKING SYSTEM<br></span>
  					<span id="fontstyle2">Government of Punjab</span>	<div class="row">
			<div class="col-lg-4" id="login-info">
				  			</div>
  			
  				</center>
  					
  			</div>
  			<div class="col-lg-2" class="topbar-div">
  				<center>
  					<img src="images/punjab.png" class="img-responsive" id="punjab-img">	
  				
  			</div>
</center>
  		</div>
	</nav>
	
	<div class="container-fluid">
	    <div class="row header">
				<div class="col-lg-8"><center><h3>Welcome User(User Name)</h3></div>
		</div>
    </div>


    <div class="borderexample">
    <ul>
          <li><a class="active" href="#new">Add New File</a></li>
          <li><a href="#add_department">Add New Department</a></li>
          <li><a href="#add_employee">Add New Employee</a></li>
          
        </ul>
    
    	<div class="container-fluid jumbotron">
    	 <div class="page-header">
                <h1>ADD NEW FILE</h1>      
              </div>
              <form method="POST" action="add_file.php">
				<div class="form-group">
					<label class="control-label col-sm-3">Name:</label>
					<div class="col-sm-9">
							<input type="text" name="name" class="form-control" >
					</div>
				</div>
<br><br>
		
				<div class="form-group">
					<label class="control-label col-sm-3">Contact:</label>
					<div class="col-sm-9">          
						<input type="text" name="contact" class="form-control" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label class="control-label col-sm-3">Email ID:</label>
					<div class="col-sm-6">          
						<input type="email" name="email" class="form-control" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label class="control-label col-sm-3">Subject:</label>
					<div class="col-sm-9">          
						<input type="text" name="subject" class="form-control">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3">Select Department:</label>
				<select  name="department"  id="department">
                  <option value="1">Department 1</option>
                  <option value="2">Department 2</option>
                  <option value="3">Department 3</option>
                  <option value="4">Department 4</option>
                </select> 
				</div>
				<div class="form-group">
				<center>
					<button class="button">ADD</button>
				</center>
				</div>              	
              </form>
				
				<hr size=2>
<br><br>	



            <div class="page-header">
                <h1>ADD NEW DEPARTMENT</h1>      
            </div>
            	<form method="POST" action="add_dept.php">
		            <div class="form-group">
							<label class="control-label col-sm-3">New Department Name:</label>
							<div class="col-sm-9">
									<input type="text" name="dept_name" class="form-control" >
							</div>
					</div>
					<br><br>
					<div class="form-group">
						<label class="control-label col-sm-3">Department Code:</label>
						<div class="col-sm-9">          
							<input type="text" name="dept_code" class="form-control" >
						</div>
					</div>
					<div class="form-group">
					<center>
						<button class="button">ADD</button>
						</center>
					</div>
				</form>



				<br><br><hr>
				<div class="page-header">
                <h1>ADD NEW EMPLOYEE</h1>      
	            </div>              	

	            <form method="POST" action="add_emp.php">
	            	<div class="form-group">
						<label class="control-label col-sm-3">Name:</label>
						<div class="col-sm-9">
								<input type="text" name="emp_name" class="form-control" >
						</div>
					</div>
	            	<div class="form-group">
						<label class="control-label col-sm-3">Contact:</label>
						<div class="col-sm-9">
								<input type="text" name="contact" class="form-control" >
						</div>
					</div>
	                <div class="form-group">
					<label class="control-label col-sm-3">Select Department:</label>
					<select id="department" name="department" >
	                  <option value="1">Department 1</option>
	                  <option value="2">Department 2</option>
	                  <option value="3">Department 3</option>
	                  <option value="4">Department 4</option>
	                </select> 
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Username:</label>
						<div class="col-sm-9">          
							<input type="text" name="username" class="form-control" >
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-sm-3">Password:</label>
						<div class="col-sm-9">          
							<input type="text" name="password" class="form-control" >
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-sm-3">Designation:</label>
						<div class="col-sm-9">          
							<input type="text" name="designation" class="form-control" >
						</div>
					</div>
					<div class="form-group">
					<h4>Permissions</h4>
				
					<input name="permission" type="radio" value=0 >Yes
						<input name="permission" type="radio" value=1 >No
						</div>
					<div class="form-group"><center>
						<input type="submit" name="submit" value="send" class="button"></input>
						</center>
					</div>	
	            </form>
	
					
             
         <br><br>
         
         </div>
  
  
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
