<?php
session_start();

unset($_SESSION['username']);
session_destroy();

echo "
	<script>
		alert('See You! Logout Success!!');location.href='index.php';
	</script>
	";
?>