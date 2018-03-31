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
          <a class="nav-link" data-toggle="tab" href="#menu1">Add New File</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content" id="tab-content">
        <div id="home" class="container tab-pane active"><br>
          <span id="style4">View Files</span>
          <div class="row">
            <div class="input-group" id="search-bar">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn"></span>
              <button class="btn btn-secondary" type="button">Go!</button>
            </div>
          </div>
          <div class="row" id="view-files-list">            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>File Number</th>
                  <th>Subject</th>
                  <th>Applicant Name</th>
                  <th>Applicant Contact</th>
                  <th>Local Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>QWERT</td>
                  <td>PQR</td>
                  <td>123</td>
                  <td>XYZ</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>QWERT</td>
                  <td>PQR</td>
                  <td>123</td>
                  <td>XYZ</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>QWERT</td>
                  <td>PQR</td>
                  <td>123</td>
                  <td>XYZ</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>  
          
        <div id="menu1" class="container tab-pane fade"><br>
          <span id="style4">Add New File</span>

          <div id="add-file">
            <form action="/action_page.php"> 
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="name">Applicant Name: </label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                  </div>
                </div>
              </div>
            
              <div class="row">
              
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group" id="app-contact">
                    <label for="contact">Applicant Contact: </label>
                    <input type="text" class="form-control" id="contact" placeholder="Enter Contact">
                  </div>
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="email">Applicant Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                </div> 
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="subject">File Subject: </label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter File Subject">
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="dept">Department:</label>
                    <select class="form-control" id="dept1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row" id="file-submit">
                
                  <button type="submit" class="btn btn-primary">Submit</button>

              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    
    <footer>
      <section id="bottom-section" >
        <div class="container-fluid">
          <center><span id="style2">Copyright All Right Reserved</span></center>
        </div>
      </section>  
    </footer>
    
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