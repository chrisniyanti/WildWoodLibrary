<?php
	session_start();
	include 'connection.php';
	
	if(isset($_POST["edit"])){
		  $mId     			= $_POST['mId'];
          $name         	= $_POST['name'];
          $sId              = $_POST['sId'];
          $class 			= $_POST['class'];
          $address          = $_POST['address'];
          $phonenumber      = $_POST['phonenumber'];
          $birthday         = $_POST['birthday'];
          $gender           = $_POST['gender'];
          $email            = $_POST['email'];
          $total_borrowed   = $_POST['total_borrowed'];
          
          
          	$dir="upload/";
          	$extension  =$_FILES["photo_members"]["type"];
        	$filename   =$_FILES["photo_members"]["name"];
        	$filesize   =$_FILES["photo_members"]["size"];
        	$tmpname    =$_FILES["photo_members"]["tmp_name"];
        	$finalup = $dir.$filename;
        	if($extension=="image/jpeg" or $extension=="image/png")
        		{
        			if(move_uploaded_file($tmpname,$finalup)){
				          $query = "UPDATE tb_member SET 
				          member_name = '$name', 
				          student_id = '$sId', 
				          class = '$class', 
				          address = '$address', 
				          phone_number = '$phonenumber', 
				          birthday = '$birthday', 
				          gender ='$gender',
				          e_mail = '$email',
				          total_borrowed = '$total_borrowed',
				          photo_members = '$finalup' WHERE member_id = '$mId'";
						  mysqli_query($conn, $query);
		echo "
	        <script>
	            alert('The Data Have Been Updated Successfully');location.href='member.php';
	        </script>"; 
				}
			}
	}
?>