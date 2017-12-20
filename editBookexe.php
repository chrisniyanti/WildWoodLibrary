<?php
	session_start();
	include 'connection.php';
	
	if(isset($_POST["edit"])){
		  $Bid     			= $_POST['Bid'];
          $name         	= $_POST['name'];
          $author           = $_POST['author'];
          $publisher 		= $_POST['publisher'];
          $year_publisher   = $_POST['year_publisher'];
          $category     	= $_POST['category'];
          $total        	= $_POST['total'];
          $about           	= $_POST['about'];

          
          
          	$dir="upload/";
          	$extension  =$_FILES["photo_book"]["type"];
        	$filename   =$_FILES["photo_book"]["name"];
        	$filesize   =$_FILES["photo_book"]["size"];
        	$tmpname    =$_FILES["photo_book"]["tmp_name"];
        	$finalup = $dir.$filename;
        	if($extension=="image/jpeg" or $extension=="image/png")
        		{
        			if(move_uploaded_file($tmpname,$finalup)){
				          $query = "UPDATE tb_book SET 
				          book_name = '$name', 
				          author = '$author', 
				          publisher = '$publisher', 
				          year_publisher = '$year_publisher', 
				          category = '$category', 
				          Total = '$total', 
				          about ='$about',
				          photo_book = '$finalup' WHERE book_id = '$Bid'";
				mysqli_query($conn, $query);
			echo "
	        <script>
	            alert('The Data Have Been Updated Successfully');location.href='book.php';
	        </script>"; 
				}
			}
	}
?>