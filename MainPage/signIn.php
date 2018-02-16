 <?php 
 session_start();
?>


<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'userauth');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



	
function SignIn()
{
if(isset($_GET['username'])&&isset($_GET['pwd']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{   $q= "SELECT * FROM userdet WHERE username = '$_GET[username]' AND password = '$_GET[pwd]'";
	$query = mysql_query($q);
    $row = mysql_num_rows($query);
	if($row==0 )
	{
		echo "Please register.";
		echo "<meta http-equiv='refresh' content='2;url=http://localhost/Project/Registration/register.html' />";
	}
	else
	{			
		$n = "SELECT fname FROM userdet WHERE username = '$_GET[username]'";
		$r=mysql_query($n);
		$nam = mysql_fetch_array($r);
		echo "Welcome "; 	
		$name = $nam['fname'];
		$_SESSION["fname"] = $name;
		$_SESSION["flag"] = 1;
		echo $_SESSION["fname"];
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Project/MainPage/Main.php' />";
		
	}
}
}
if(isset($_GET['signIn']))
{
	SignIn();
}	
?>