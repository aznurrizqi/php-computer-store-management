<?php
session_start();
session_destroy();
	echo "<script>alert('Terima kasih sudah berkunjung')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
?>