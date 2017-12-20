<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <title>Detail Book - WildWood Library</title><link rel="shortcut icon" href="img/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/clock.css">
    <link rel="stylesheet" type="text/css" href="css/detail.js">
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
                      <a href="admin.php">
                          <i class="fa fa-user"></i>
                          <span>Administrator</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="member.php" >
                          <i class="fa fa-users"></i>
                          <span>Members Data</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="book.php" >
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
            <h1>Detail Book, 
            <strong>" 
            <?php 
                include 'connection.php';
                $query = "SELECT * FROM tb_book WHERE book_id = '".$_GET['book_id']."'"; 
                $result = mysqli_query($conn, $query); 
                $row = mysqli_fetch_array($result); 
                              
                echo $row['book_name']; 
                ?> "
            </strong>
            </h1>
            <br>
            <br>
           
            <div class="container-fluid">
                <!-- .row -->
                <div class="row">
                    <?php
                      include 'connection.php';
                      $Bid = $_GET['book_id'];
                      $query = "SELECT * FROM tb_book WHERE book_id='$Bid'";
                      $exec = mysqli_query($conn, $query);
                      $no = 0;
                      while($data=mysqli_fetch_array($exec)){
                      $no++;
                    ?>
                        <div class="col-md-4 col-xs-12">
                          <div class="white-box">
                            <div class="user-bg"><img src="<?php echo $data['photo_book'];?>" width="100%" />
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <h4 class="text-white"><br>A 

                                        <?php 
                                          include 'connection.php';
                                          $query = "SELECT * FROM tb_book WHERE book_id = '".$_GET['book_id']."'"; 
                                          $result = mysqli_query($conn, $query); 
                                          $row = mysqli_fetch_array($result); 
                                                        
                                          echo $row['category']; 
                                          ?>

                                         Book By</h4>
                                        <h5 class="text-white">
                                        <?php 
                                          include 'connection.php';
                                          $query = "SELECT * FROM tb_book WHERE book_id = '".$_GET['book_id']."'"; 
                                          $result = mysqli_query($conn, $query); 
                                          $row = mysqli_fetch_array($result); 
                                                        
                                          echo $row['author']; 
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
                                    <label class="col-md-12"><h5><b>Book ID</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['book_id']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                     <label class="col-md-12"><h5><b>Book Title</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['book_name']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Author</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['author']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Publisher</b></h5></label>
                                    <div class="col-md-12">
                                       <?php echo $data['publisher']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Year Published</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['year_publisher']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Category</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['category']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>Total Book</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['Total']; ?></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-12"><h5><b>About</b></h5></label>
                                    <div class="col-md-12">
                                        <?php echo $data['about']; ?></div>
                                </div>
                                
                            </form>
                            <?php } ?>
                        </div>
                        <center><a href="book.php"><button type="button" class="btn btn1-success" title="back">Back To Home</button></a></center>
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
