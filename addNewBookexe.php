<?php 
    include 'connection.php';
    if(isset($_POST['add'])){
    	$title = $_POST['title'];
        $author = $_POST['author'];
    	$publisher = $_POST['publisher'];
        $year = $_POST['year'];
        $category = $_POST['category'];
        $total = $_POST['total'];
        $about = $_POST['about'];
        $dir="upload/";
        $extension  =$_FILES["photo_book"]["type"];
        $filename   =$_FILES["photo_book"]["name"];
        $filesize   =$_FILES["photo_book"]["size"];
        $tmpname    =$_FILES["photo_book"]["tmp_name"];
        $finalup = $dir.$filename;
        if($extension=="image/jpeg" or $extension=="image/png")
        {
        if(move_uploaded_file($tmpname,$finalup))
        {
    	$query = "INSERT INTO tb_book VALUES('', '$title', '$author', '$publisher', '$year', '$category', '$total', '$about', '$finalup')";
    	mysqli_query($conn, $query);
    	echo "
        <script>
            alert('The Data Have Been Added Successfully');location.href='book.php';
        </script>";
        }
        } 
    }
 ?>