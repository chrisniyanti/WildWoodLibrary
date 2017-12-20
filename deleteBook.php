<?php
	include 'connection.php';
	
	$delete=mysqli_query($conn, "DELETE FROM tb_book WHERE book_id='$_GET[book_id]'");


	echo "
	<script>
		alert('Delete Success');location.href='book.php';
	</script>
	";
?>

