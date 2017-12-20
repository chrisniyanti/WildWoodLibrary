<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <title>Add New Book - WildWood Library</title><link rel="shortcut icon" href="img/logo.png">

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
      <!--main content start-->
      <section id="main-content">
          <div class="wrapper"> 
                    <div class="col-lg-3 ds"> 
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                  <div class="wrapperc">
                      <div class="contentc">
                          <h1 id="date" class="date"></h1>
                          <h3 id="time" class="time"></h3>
                      </div>
                  </div> 
              </div> 
                <div class="col-lg-9">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <center><h1>Add New Book</h1></center>
                  <br>
                  <br>
<!--main content start-->
      <section id="main-content form">     
             <div class="row">   
                        <div class="white-box">
                            <center><h3><i class="glyphicon glyphicon-book"></i>&nbspForm New Book&nbsp<i class="glyphicon glyphicon-book"></i></h3><p>Please, input the correct and valid data</p></center>
                            <br>    
                            <form enctype="multipart/form-data" class="form-horizontal form-material" method="post" action="addNewBookexe.php">
                                <div class="form-group">
                                    <label class="col-md-12">Book Title</label>
                                    <div class="col-md-12">
                                        <input type="text" name="title" class="form-control" placeholder="book title" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Author</label>
                                      <div class="col-md-12">
                                          <input type="text" name="author" class="form-control" placeholder="author name" required>
                                      </div>  
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Publisher</label>
                                    <div class="col-md-12">
                                      <input type="text" name="publisher" class="form-control" placeholder="publiser (company, business, etc.)" required>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Year Published</label>
                                    <div class="col-md-12">
                                        <input type="text" name="year" class="form-control" placeholder="book year published" required></div>
                                </div>
                                
                                  <div class="form-group">
                                      <label class="col-md-12">About</label>
                                      <div class="col-md-12">
                                          <input type="text" name="about" class="form-control" placeholder="stroy about the book (optional)">
                                      </div>
                                  </div>
                                  
                                <div class="form-group">
                                      <label class="col-md-12">Category</label>
                                      <div class="col-md-12">
                                          <select class="form-control" name="category">
                                              <option>--- Category ---</option>
                                              <option>Adventure</option>
                                              <option>Comedy</option>
                                              <option>Crime</option>
                                              <option>Drama</option>
                                              <option>Education</option>
                                              <option>Fairytale</option>
                                              <option>Fantasy</option>
                                              <option>Fiction</option>
                                              <option>Historical Fiction</option>
                                              <option>Historical Romance</option>
                                              <option>History</option>
                                              <option>Horror Fiction</option>
                                              <option>Horror</option>
                                              <option>Mystery</option>
                                              <option>Romance</option>
                                              <option>Science Fiction</option>
                                              <option>Suspense</option>
                                              <option>Thriller</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-12">Total</label>
                                      <div class="col-md-12">
                                          <select class="form-control" name="total">
                                              <option>--- Total ---</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>
                                              <option>9</option>
                                              <option>10</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-12">Photo</label>
                                      <div class="col-md-12">
                                          <input type="file" name="photo_book" required>
                                      </div>
                                  </div>
                              </div>
                            
                          <center><td><input type="submit" name="add" class="btn btn2-warning" value="Add"></td>
                            <td><input type="reset" class="btn btn3-danger" value="Reset"></td></center>  
                            <br>   
                          </form>
                    </div>
                </div>
                <!-- /.row -->
              <div class="col-lg-3 ds">
                  <br>
                  <br>
                  <!-- First Action -->
                  <div class="desc">
                      <h3>LIBRARY NOTES</h3>
                      <br>
                      <center><span class="badge bg-theme"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp Library Fine</span>
                      <div class="details">
                        <br>
                        <p>If the member didn't return the book to the library on time, they have to pay the fine.</p>
                        <h4> RM 5.00/day </h4>
                      </div> </center>
                  </div>
                  <br>
                  <br>
                  <br>
                <div class="desc">
                      <h3>LIBRARY NOTES</h3>
                            <br>
                            <center><span class="badge bg-theme"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp Library Data Form</span>  
                            <br>
                            <br>
                            <p>Please fill up form with the correct data to make it easy while checking all the information</p>
                            <h4> Happy Working! </h4>
                      </div> </center>
                  </div>

              </div><!-- /col-lg-3 -->        
        </div>               
                   
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
