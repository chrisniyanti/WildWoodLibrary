<?php
	include 'connection.php';
	
	$delete=mysqli_query($conn, "DELETE FROM tb_databorrowed WHERE borrowing_code='$_GET[borrowing_code]'");
	echo "
	<script>
		alert('Delete Success');location.href='return.php';
	</script>
	";
?>

