<?php
	include 'connection.php';
	
	$delete=mysqli_query($conn, "DELETE FROM tb_member WHERE member_id='$_GET[member_id]'");
	echo "
	<script>
		alert('Delete Success');location.href='member.php';
	</script>
	";

?>

