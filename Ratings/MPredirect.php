 <?php 
 session_start();
?>

<?php

	$x = $_SESSION["flag"];
	if($x == 1)
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Project/MainPage/Main.php' />";
	else
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Project/MainPage/Mainpage.html' />";

?>