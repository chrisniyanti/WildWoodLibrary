<?php 
  include "connection.php";
  $borrowing_code = $_GET['borrowing_code'];
  $query = mysqli_query($conn, "UPDATE tb_databorrowed SET status = 'returned' WHERE borrowing_code = '$borrowing_code'" );
  $query2 = mysqli_query($conn, "SELECT * FROM tb_databorrowed WHERE borrowing_code = '$borrowing_code' ");
  $data= mysqli_fetch_array($query2);
  $borrowing_code = $data['borrowing_code'];
  $book_id = $data['book_id'];
  $book_name = $data['book_name'];
  $category =  $data['category'];
  $student_id = $data['student_id'];
  $member_name = $data['member_name'];

  $query3 = "INSERT INTO tb_datareturn VALUES('', '$borrowing_code', '$book_id', '$book_name', '$category', '$student_id', '$member_name')";
  mysqli_query ($conn, $query3); 

  $query5 = "SELECT total_borrowed FROM tb_member WHERE student_id = '$student_id'";
  $data= mysqli_fetch_array(mysqli_query($conn, $query5));
  $databorrowed = $data['total_borrowed'];

  $kurangsatu = $data['total_borrowed'] -1;

  $query4 = "UPDATE tb_member SET total_borrowed = '$kurangsatu' WHERE student_id = '$student_id'";
  mysqli_query ($conn, $query4); 

  echo "
        <script>
            alert('Your process is done!');location.href='borrow.php';
        </script>"; 
      
?>