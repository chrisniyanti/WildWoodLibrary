<?php
	session_start();
	include 'connection.php';

	$uname = $_POST['username'];
	$pwd   = md5($_POST['passwords']);
	
	$sql = "SELECT * FROM tb_admin WHERE passwords = '$pwd' AND username = '$uname'" ;
	
	
	
	$result= $conn->query($sql);
	
	if(!$row = mysqli_fetch_assoc($result)){
		echo "<script>alert('Your user ID or password is incorrect!');location.href='index.php';</script>";
		
	}else{
			$_SESSION['admin_id'] = $row['admin_id'];
			echo "<script>
			alert('Hi Admin, Welcome To WildWood Library');location.href='admin.php';</script>";
			$_SESSION['notice'] = 0;
		}


?>