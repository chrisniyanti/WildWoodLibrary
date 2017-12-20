<?php 
    include 'connection.php';
    if(isset($_POST['add'])){
    	$name = $_POST['name'];
        $sId = $_POST['sId'];
        $class = $_POST['grade'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
    	$phonenumber = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $total = $_POST['total'];
        $dir="upload/";
        $extension  =$_FILES["photo_members"]["type"];
        $filename   =$_FILES["photo_members"]["name"];
        $filesize   =$_FILES["photo_members"]["size"];
        $tmpname    =$_FILES["photo_members"]["tmp_name"];
        $finalup = $dir.$filename;
        if($extension=="image/jpeg" or $extension=="image/png")
        {
        if(move_uploaded_file($tmpname,$finalup))
        {
    	$query = "INSERT INTO tb_member VALUES('', '$name', '$sId', '$class','$birthday', '$address', '$phonenumber', '$gender','email', '$total', '$finalup')";
    	mysqli_query($conn, $query );

    	echo "
        <script>
            alert('The Data Have Been Added Successfully');location.href='member.php';
        </script>";
         }
       }
    }
 ?>