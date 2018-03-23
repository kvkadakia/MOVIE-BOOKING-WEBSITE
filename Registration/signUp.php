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



	
	
function NewUser()
{
	$t1=$_GET['firstname'];
	$t2=$_GET['lastname'];
	$t3=$_GET['mobileno'];
	$t4=$_GET['username'];
	$t5=$_GET['pwd2'];
	$t6=$_GET['bkup'];
	
	$query = "INSERT INTO userdet (fname,lname,mobile,username,password,backup) VALUES ('$t1','$t2',$t3,'$t4','$t5','$t6')";
	$data = mysql_query ($query);
	if($data)
	{
		echo "YOUR REGISTRATION IS COMPLETED...";
		echo "<meta http-equiv='refresh' content='2;url=http://localhost/Project/MainPage/MainPage.html' />";
	}
	else
	{	
		echo "<meta http-equiv='refresh' content='2;url=http://localhost/Project/Registration/MainPage.html' />";
		echo "REGISTRATION FAILED";
	}
}	
	
function SignUp()
{
if(isset($_GET['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{   $q= "SELECT * FROM userdet WHERE username = '$_GET[username]' AND password = '$_GET[pwd2]'";
	$query = mysql_query($q);
    $row = mysql_num_rows($query);
	if($row==0 )
	{
		newuser();
	}
	else
	{
		echo "<meta http-equiv='refresh' content='2;url=http://localhost/Project/Registration/signIn.html' />";
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_GET['reg']))
{
	SignUp();
}	
?>