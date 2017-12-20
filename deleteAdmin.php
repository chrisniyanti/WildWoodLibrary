<?php
	include 'connection.php';
	
	$delete=mysqli_query($conn, "DELETE FROM tb_admin WHERE admin_id='$_GET[admin_id]'");

	echo "
	<script>
		alert('Delete Success');location.href='admin.php';
	</script>
	";
?>

