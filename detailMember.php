<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <title>Detail Member - WildWood Library</title><link rel="shortcut icon" href="img/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/clock.css">
    <link rel="stylesheet" type="text/css" href="css/clock.js">
    
   
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
            <!--logo start-->
            <a class="logo"><i class="glyphicon glyphicon-book"></i><b>&nbsp WildWood Library</b></a>
            <!--logo end-->
            
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspLogout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              <br>
                <p class="centered">
                  <?php 
                      include 'connection.php';
                      $query = "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['admin_id']."'"; 
                      $result = mysqli_query($conn, $query); 
                      $row = mysqli_fetch_array($result);  
                    ?>
                    <img src="<?php echo $row['photo_admin'];?>" class="img-circle" height="150px" width="150px" /></p>
                    <h5 class="centered">
                    <?php
                      echo $row['admin_name']; 
                      ?>
                    </h5>
                    <br>
                  <li class="mt">
                      <a  href="admin.php">
                          <i class="fa fa-user"></i>
                          <span>Administrator</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="member.php" >
                          <i class="fa fa-users"></i>
                          <span>Members Data</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="book.php" >
                          <i class="fa fa-book"></i>
                          <span>Books Data</span>
                      </a>
                  </li>

                   <li class="sub-menu">
                      <a href="borrow.php">
                          <i class="fa fa-upload"></i>
                          <span>Data Borrowed</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="return.php" >
                          <i class="fa fa-download"></i>
                          <span>Data Returned</span>
                      </a>
                      
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <section id="main-content">
        <div id="page-wrapper">
            <br>
            <br>
            <br>
            <br>
            <br>  
            <h1>Detail Member, 
            <strong>
              <?php 
                include 'connection.php';
                $query = "SELECT * FROM tb_member WHERE member_id = '".$_GET['member_id']."'"; 
                $result = mysqli_query($conn, $query); 
                $row = mysqli_fetch_array($result); 
        
                echo $row['member_name']; 
             ?> 
            </strong>
            </h1>
            <br>
            <br>
           
            <div class="container-fluid">
                <!-- .row -->
                <div class="row">
                    <?php
                      include 'connection.php';
                      $mId = $_GET['member_id'];
                      $query = "SELECT * FROM tb_member WHERE member_id='$mId'";
                      $exec = mysqli_query($conn, $query);
                      $no = 0;
                      while($data=mysqli_fetch_array($exec)){
                      $no++;
                    ?>
                        <div class="col-md-4 col-xs-12">
                          <div class="white-box">
                            <div class="user-bg"><img src="<?php echo $data['photo_members'];?>" width="100%" />
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <h4 class="text-white"><br>Contact:</h4>
                                        <h5 class="text-white">
                                          <?php 
                                            include 'connection.php';
                                            $query = "SELECT * FROM tb_member WHERE member_id = '".$_GET['member_id']."'"; 
                                            $result = mysqli_query($conn, $query); 
                                            $row = mysqli_fetch_array($result); 
                                    
                                            echo $row['e_mail']; 
                                         ?> 
                                        </h5> 
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Member ID</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['member_id']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                     <label class="col-md-12"><h5><b>Member Name</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['member_name']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Student ID</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['student_id']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Grade</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['class']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Address</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['address']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Phone Number</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['phone_number']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Birthday</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['birthday']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Gender</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['gender']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>E-mail Address</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['e_mail']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Total Borrow</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['total_borrowed']; ?></div>
                                </div>
                                
                            </form>
                            <?php } ?>
                        </div>
                        <center><a href="member.php"><button type="button" class="btn btn1-success" title="back">Back To Home</button></a></center>
                        <br>
                        <br>
                    </div>
                </div>

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>






       
     
                 
                            
                       

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             2017 &copy; Website by WildWood Library
          </div>
      </footer>
      <!--footer end-->
  </section>
<script src="css/clock.js"></script>
  </body>
</html>
