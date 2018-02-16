 <?php 
 session_start();
?>

<?php

	$x = $_SESSION["flag"];
	if($x == 1)
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Project/Bookings/seats6.php' />";
	else
	{
		echo "Sign In first before booking.";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Project/Registration/signin.html' />";
}
?>