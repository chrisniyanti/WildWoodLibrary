<?php 
    include 'connection.php';
    if(isset($_POST['add'])){
    	$name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
    	$password = md5($_POST['password']);
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
    	$gender = $_POST['gender'];
    	$phonenumber = $_POST['phonenumber'];
        
        $dir="upload/";
        $extension  =$_FILES["photo_admin"]["type"];
        $filename   =$_FILES["photo_admin"]["name"];
        $filesize   =$_FILES["photo_admin"]["size"];
        $tmpname    =$_FILES["photo_admin"]["tmp_name"];
        $finalup = $dir.$filename;
        if($extension=="image/jpeg" or $extension=="image/png")
        {
        if(move_uploaded_file($tmpname,$finalup))
        {
    	$query = "INSERT INTO tb_admin VALUES('', '$name', '$username', '$email', '$password', '$address', '$birthday', '$gender', '$phonenumber', '$finalup')";
    	mysqli_query($conn, $query);
        echo "
        <script>
            alert('The Data Have Been Added Successfully');location.href='admin.php';
        </script>"; 
            }
        }
    }
 ?>