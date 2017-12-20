<?php

	session_start();
	include 'connection.php';

	$Cid              = $_POST['Cid'];
    $bId              = $_POST['bId'];
    $sId              = $_POST['sId'];
    $name             = $_POST['name'];
    $title            = $_POST['title'];
    $category         = $_POST['category'];
    $borrow_date      = $_POST['borrow_date'];
    $return           = $_POST['return'];
    $total            = $_POST['total'];
    $status           = $_POST['status'];
    $dir="upload/";
  	$extension  =$_FILES["photo_book"]["type"];
	$filename   =$_FILES["photo_book"]["name"];
	$filesize   =$_FILES["photo_book"]["size"];
	$tmpname    =$_FILES["photo_book"]["tmp_name"];
	$finalup = $dir.$filename;


	if($extension=="image/jpeg" or $extension=="image/png")
	{
		if(move_uploaded_file($tmpname,$finalup)){
	           mysqli_query($conn, "UPDATE tb_databorrowed SET 
	          book_id = '$bId',
	          student_id = '$sId',
	          member_name = '$name',
	          book_name = '$title',
	          category = '$category',
	          borrowed_date = '$borrow_date',
	          returndate = '$return',
	          total = '$total',
	          status = '$status',
	          photo_book ='$finalup'
	           WHERE borrowing_code = '$Cid'");
	     echo "
        <script>
            alert('The Data Have Been Updated Successfully');location.href='borrow.php';
        </script>";
		}

	}





?>