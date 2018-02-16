 <?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="slideshow/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="slideshow/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
<title>Movie Center</title>


</head>

<body bgcolor=#F0F0F0 >

<!--header!-->
 <div id="header" align="center">
 <img src = "Title.png">
 <!--shortcuts!-->
<div id="nav" align="right">
<br>
<ul>
    <li><a href="http://localhost/Project/AboutUs/aboutUs.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">About Us</a></li>
    <li><a href="http://localhost/Project/Ratings/english.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">Ratings</a></li>
    <li><a href="#playing" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">Bookings</a></li>
	<li><a href="http://localhost/Project/MainPage/Main.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:Orange;">Home</a></li>
 </ul>
</div>
</div

<!--log!-->
<div id="log">

<a href="http://localhost/Project/Registration/logOut.php" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;margin-left:20px;color:Orange;margin-left:20px;">Logout</a>

<marquee style="color:Orange;">Welcome to Movie Center</marquee>
</div>
<br>

<div id="sign">
<p style="color:white; ";>Welcome <?php echo @$_SESSION["fname"];?></p>
<img src="User.jpg" style="max-width:100%;max-height:63%;">
<div id="name" style="background: url('sign.jpg');">

</div>
</div>

<div id="running" >
<div id="sliderFrame">
        <div id="slider">
            <img src="images/img1.jpg" alt="Welcome Back"/>   
            <img src="images/img2.jpg" alt="Biggest Upcoming Block Buster"/>
            <img src="images/img3.jpg" alt="Bookings opening soon"/>
            <img src="images/img4.jpg"/>
            <img src="images/img5.jpg"/>
        </div>
    </div>
</div>
<br><br>
<!--form

<div id="frm" style="width:35%;height:66%">
<h3>Quick Booking</h3>

<form id="radio-submit">

<fieldset>
<input type="radio" name="input"  checked>Movies
</fieldset>
<fieldset>
<input type="radio" name="input" onclick="document.getElementById('radio-submit').action='bookings.html'; document.getElementById('button-submit').value='Go to View Screens';"/>Screens
</fieldset>
<br>
<select>
  <option value="volvo">Select Movie</option>
  <option value="saab">Fantastic Four</option>
  <option value="opel">Phantom</option>
  <option value="audi">Jhaad pe chadha bihari</option>
    <option value="saab">Bahuballi</option>
</select>
<br><br><br>
<select>
  <option value="volvo">Select Date</option>
  <option value="saab">Today</option>
  <option value="opel">Tommorow</option>

</select>
<br><br>
<input type="submit" id="button-submit" value="Submit"/>
</form>
</div>!-->

<!--playing!-->
<div id="playing">



<h2 style="color:Orange;">Now Playing: </h2>

<div id="nwplyn"style="margin-left:40px;margin-top:20px;">
<a href="images/1.jpg" data-smoothzoom="group1"><img src="images/1-sm.jpg" alt="Screen1: Phantom"></a>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect1.php"style="color:red">Time 1: 12.30pm</a></div>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect2.php"style="color:red">Time 2: 5.30pm</a></div>

</div>

<div id="nwplyn" style="margin-left:400px;margin-top:20px;">
<a href="images/2.jpg" data-smoothzoom="group1"><img src="images/2-sm.jpg" alt="Screen2: Everest"></a>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect3.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Time 1: 12.30pm</a></div>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect4.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Time 2: 5.30pm</a></div>
</div>

<div id="nwplyn"style="margin-left:40px;margin-top:490px;">
<a href="images/3.jpg" data-smoothzoom="group1"><img src="images/3-sm.jpg" alt="Screen3: Brothers"></a>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect5.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Time 1: 12.30pm</a></div>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect6.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Time 2: 5.30pm</a></div>
</div>

<div id="nwplyn" style="margin-left:400px;margin-top:490px;">
<a href="images/4.jpg" data-smoothzoom="group1"><img src="images/4-sm.jpg" alt="Screen4: BahuBali"></a>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect7.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Time 1: 12.30pm</a></div>
<br>
<center><div id="bookin"><a href="http://localhost/Project/MainPage/signredirect8.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Time 2: 5.30pm</a></div>

</div>


</div>

<div id="linker">
<h2 style="margin-left:140px;color:Orange;">Movie Details</h2>

<div id="type">
<a href="http://localhost/Project/Ratings/english.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">English</a>
</div>
<br><br>
<div id="type">
<a href="http://localhost/Project/Ratings/hindi.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Hindi</a>
</div>
<br><br>
<div id="type">
<a href="http://localhost/Project/Ratings/marathi.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Marathi</a>
</div>
<br><br>
<div id="type">
<a href="http://localhost/Project/Ratings/gujarati.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Gujarati</a>
</div>
<br><br>
<div id="type">
<a href="http://localhost/Project/Ratings/punjabi.html"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:red">Punjabi</a>
</div>
 <br>
<img src="comingsoon.png" width="400" >
<marquee direction="up" height="330">
 <center><img src="lang.jpeg"  width="300"></center><br><br>
<center><img src="comingsoon1.jpg" height="250" width="300"  ></center><br><br>
<center><img src="comingsoon2.jpg" height="250" width="300"  ></center><br><br>
</marquee>
<br><br>
<br><br>
</div>


<div id="footer">

<p>Copyrights Reserved</p>
</div>

</body>
</html>