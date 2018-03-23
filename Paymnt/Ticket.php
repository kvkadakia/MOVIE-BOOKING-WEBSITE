 <?php 
 session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
<title>Ticket</title>
<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>


<body >



<!--header!-->
 <div id="header" align="center">
 <img src = "Title.png">
 <!--shortcuts!-->
<div id="nav" align="right">
<br>
<ul>
    <li><a href="http://localhost/Project/AboutUs/aboutUs.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">About Us</a></li>
    <li><a href="http://localhost/Project/Ratings/english.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">Ratings</a></li>
    <li><a href="sampleIndex.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">Bookings</a></li>
	<li><a href="http://localhost/Project/MainPage/MainPage.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">Home</a></li>
 </ul>
</div>
</div>

<!--log!-->
<div id="log">
<a href="http://localhost/Project/Registration/logOut.php" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;margin-left:20px;color:Orange;margin-left:20px;">Logout</a>

</div>

<div id="details">
<br>
<h2><u>Your Ticket</u></h2>

<form action="signUp.php" method="get" >

<label for="firstname">Customer name:</label><?php echo $_SESSION["fname"];?><br><br>
<label for="lastname">Ticket Row and number:</label><?php echo @$_SESSION["seat"];?><br><br>




</form>
</div>
<div id="footer">

Copyrights Reserved
</div>

</body>
</html>