<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <title> Member - WildWood Library</title><link rel="shortcut icon" href="img/logo.png">

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
            <li><a class="logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspLogout</a></li>
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
                      <a href="admin.php">
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
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
                  <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">  
                            <h3>LIBRARY NOTES</h3>
                            <br>
                            <center><span class="badge bg-theme"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp Library Fine</span>  
                            <br>
                            <br>
                            <p>If the member didn't return the book to the library on time, they have to pay the fine.</p>
                            <h4> RM 5.00/day </h4></center>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3>LIBRARY CLOCK</h3>
                            <div class="wrapperc">
                                <div class="contentc">
                                    <h1 id="date" class="date"></h1>
                                    <h3 id="time" class="time"></h3>
                                </div>
                            </div> 
                        </div>
                    </div>
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">  
                            <h3>LIBRARY NOTES</h3>
                            <br>
                            <center><span class="badge bg-theme"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp Library Data Form</span>  
                            <br>
                            <br>
                            <p>Please fill up form with the correct data to make it easy while checking all the information</p>
                            <h4> Happy Working! </h4></center>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box"> 
                            <div class="topnav">
                              <div class="search-container">
                                <form method="POST" action="searchMember.php">
                                    <input type="text" placeholder="Enter Member ID or Name" name="search">
                                    <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                                </form>
                              </div>    
                              <h2>Data Members &nbsp
                              <a href="addNewMember.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i>&nbsp&nbspAdd New Member</button></a></h2>
                              <br>
                              <br> 
                              <?php
                              include 'connection.php';
                              ?>
                              <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Member ID</th>
                                          <th>Student Name</th>
                                          <th>Student ID</th>
                                          <th>Grade</th>
                                          <th>Phone Number</th>
                                          <th>Gender</th>
                                          <th>Total Borrow</th>
                                          <th>Action</th> 
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php


                                          $query = "SELECT * FROM tb_member";
                                          $exec = mysqli_query($conn, $query);
                                          $no = 0;
                                          while($data=mysqli_fetch_array($exec)){
                                            $no++;
                                        ?>
                                        <tr>
                                          <td><?php echo $no; ?></td>
                                          <td><?php echo $data['member_id']; ?></td>
                                          <td><?php echo $data['member_name']; ?></td>
                                          <td><?php echo $data['student_id']; ?></td>
                                          <td><?php echo $data['class']; ?></td>
                                          <td><?php echo $data['phone_number'];?></td>
                                          <td><?php echo $data['gender']; ?></td>
                                          <td><?php echo $data['total_borrowed']; ?></td>
                                          <td>
                                          <a href="detailMember.php?member_id=<?php echo $data['member_id']; ?>"><button type="button" class="btn btn1-success" title="detail"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i></button>

                                          <a href="editmember.php?member_id=<?php echo $data['member_id']; ?>"><button type="button" class="btn btn2-warning" title="edit"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></button></a>

                                          <a href="deleteMember.php?member_id=<?php echo $data['member_id']; ?>"><button onclick="return confirm('Are you sure want to delete this data?')" type="button" class="btn btn3-danger" title="delete"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button></a>
                                          </td>
                                        </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                    </div><!-- /row -->
                </div>                
          </section>
    </section>

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
