<?php
  session_start(); 
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Register - WildWood Library</title><link rel="shortcut icon" href="img/logo.png">
  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/register.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

  </head>

  <body>
    <section id="main-content">
        <div class="header">
            <center>
                <img src="img/logo.png" class="img-circle" height="250px" width="250px" />
            </center>
            <br>
            <div>Welcome<span>Admin</span></div>
        </div>
        <div class="col-lg-91">
        
        <br>
        <br>


 
      <section id="main-content form">     
             <div class="row">   
                <div class="white-box">
                    <center>
                        <h3>
                          <i class="glyphicon glyphicon-user"></i>&nbspForm Registration&nbsp<i class="glyphicon glyphicon-user"></i>
                        </h3>
                        <p>Please, fill up the registration form for new admin of WildWood Library</p>
                    </center>
                    <br>    
                    <form enctype="multipart/form-data" class="form-horizontal form-material" method="post" action="registerExe.php">
                        <div class="form-group">
                            <label class="col-md-12">Full Name</label>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Username</label>
                                <div class="col-md-12">
                                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>  
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">E-mail</label>
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" placeholder="E-mail Address"> 
                                </div>
                        </div>
                        <div class="form-group">
                              <label class="col-md-12">Address</label>
                              <div class="col-md-12">
                                  <input type="text" name="address" class="form-control" placeholder="Address" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Birthday</label>
                                  <div class="col-md-12">
                                      <input type="date" name="birthday" class="form-control" placeholder="MM/DD/YYYY" required>
                                  </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Gender</label>
                                  <div class="col-md-12">
                                      <select class="form-control" name="gender">
                                          <option>--- Gender ---</option>
                                          <option>Female</option>
                                          <option>Male</option>
                                          <option>Other...</option>
                                      </select>
                                  </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Phone Number</label>
                                  <div class="col-md-12">
                                      <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number" required>
                                  </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Photo</label>
                                  <div class="col-md-12">
                                      <input type="file" name="photo_admin" required>
                                  </div>
                          </div>
                      </div>
                            
                          <center><td><input type="submit" name="add" class="btn btn2-warning" value="Submit"></td>
                            <td><input type="reset" class="btn btn3-danger" value="Reset"></td></center> 
                            <br>
                            <br> 
                            <br>       
                          </form>
                    </div>
                </div>
              </div>           
        </div>               
  </section>
  </body>
</html>
