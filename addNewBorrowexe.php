<?php 
    include 'connection.php';
    if(isset($_POST['add'])){
    	$book = $_POST['book'];
        $mId = $_POST['mId'];
        $sId = $_POST['sId'];
    	$name = $_POST['name'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $borrowdate = $_POST['borrowdate'];
        $return_date = $_POST['return_date'];
        $total = $_POST['total'];
        $status = 'borrowed';
    	
        
        $query2 = "SELECT * FROM tb_member WHERE student_id = '$sId'";
        while($data=mysqli_fetch_array(mysqli_query ($conn, $query2))){
            if($data['student_id'] == $sId){
                $tambahSatu = $data['total_borrowed'] + 1;
                $qUpdate = "UPDATE tb_member SET total_borrowed = '$tambahSatu' WHERE student_id = '$sId'";
                mysqli_query($conn, $qUpdate);
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
                $query = "INSERT INTO tb_databorrowed VALUES('', '$book', '$sId', '$name', '$title', '$category', '$borrowdate',  '$return_date', '$total', '$status', '$finalup')";
                mysqli_query($conn, $query);
                break;
            }
            else{
                $query = "INSERT INTO tb_databorrowed VALUES('', '$book', '$sId', '$name', '$title', '$category', '$borrowdate',  '$return_date', '$total', '$status', '$finalup')";
                mysqli_query($conn, $query);
            } 
        }
         }
        }
        echo "
        <script>
            alert('The Data Have Been Added Successfully');location.href='borrow.php';
        </script>";
    }
 ?>