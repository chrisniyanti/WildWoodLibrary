<?php
	session_start();
	include 'connection.php';
	
	if(isset($_POST["edit"])){
		  $admin_id     = $_POST['admin_id'];
          $name         = $_POST['admin_name'];
          $username     = $_POST['username'];
          $email        = $_POST['email'];
          $passwords    = md5($_POST['passwords']);
          $address      = $_POST['address'];
          $birthday     = $_POST['birthday'];
          $gender       = $_POST['gender'];
          $phonenumber  = $_POST['phonenumber'];
          if($passwords!=''){
          	$dir="upload/";
        	$extension  =$_FILES["photo_admin"]["type"];
        	$filename   =$_FILES["photo_admin"]["name"];
        	$filesize   =$_FILES["photo_admin"]["size"];
        	$tmpname    =$_FILES["photo_admin"]["tmp_name"];
        	$finalup = $dir.$filename;
        		if($extension=="image/jpeg" or $extension=="image/png")
        		{
        			if(move_uploaded_file($tmpname,$finalup)){
          	 $query = "UPDATE tb_admin SET admin_name = '$name'
		  , username = '$username'
		  , email = '$email'
		  , passwords = '$passwords'
		  , address = '$address'
		  , birthday = '$birthday'
		  , gender ='$gender'
		  , phonenumber = '$phonenumber'
		  , photo_admin = '$finalup' WHERE admin_id = '$admin_id'";
		  mysqli_query($conn, $query);
			echo "
	        <script>
	            alert('The Data Have Been Updated Successfully');location.href='admin.php';
	        </script>"; 
		
          }
          else{
          	 $query = "UPDATE tb_admin SET admin_name = '$name'
		  , username = '$username'
		  , email = '$email'
		  , address = '$address'
		  , birthday = '$birthday'
		  , gender ='$gender'
		  , phonenumber = '$phonenumber'
		  , photo_admin = '$finalup' WHERE admin_id = '$admin_id'";
		 mysqli_query($conn, $query);
		 echo
		
			 "
	        <script>
	            alert('The Data Have Been Updated Successfully');location.href='admin.php';
	        </script>"; 
		
          }
        }
       }
		 
		
	}
?>