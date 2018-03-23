 <?php 
 session_start();
?>

<html>
<head>

<link href="booking.css" rel="stylesheet" type="text/css"/>
<title>Movie Center</title>

	<title>Tickets</title>
	<style>
	*{font-size: 11px;
    font-family: arial;
	}
	h1{
		font-size: 20px;
		
	}
	#bookin{
	background-color:white;
	float:center;
	width:20%;
	height:30px;
	text-align:center;

	

}
#bookin a:link, a:visited {

    display: block;
    width: 100%;
	height:30px;
    color:  #101010;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
	border-style: outset;
	border-width: 2px;
	
}

 
#bookin a:hover {
    background-color: #D8D8D8;

	color: #101010;
	text-align: center;
    text-decoration: none;
    text-transform: uppercase;
} 
#bookin a:active{
	border-style: inset;
	
	  
	</style>
	<script>

		function reserveSeats() {
			
			var selectedList = getSelectedList('Reserve Seats');
			
			if (selectedList) {
				if (confirm('Do you want to reserve selected seat/s ' + selectedList + '?')) {
					document.forms[0].oldStatusCode.value=0;
					document.forms[0].newStatusCode.value=1;
					
					document.forms[0].action='bookseats4.php'; //Change
					
					document.forms[0].submit();
					
				} else {
					clearSelection();
				}
			}
		}


		function cancelSeats() {
			
			var selectedList = getSelectedList('Cancel Reservation');
			
			if (selectedList) {
				if (confirm('Do you want to cancel reserved seat/s ' + selectedList + '?')) {
					document.forms[0].oldStatusCode.value=1;
					document.forms[0].newStatusCode.value=0;
					document.forms[0].action='bookseats4.php'; //Change
					document.forms[0].submit();
				} else {
					clearSelection();
				}
			}
		}


		function confirmSeats() {
			
			var selectedList = getSelectedList('Confirm Reservation');
			
			if (selectedList) {
				if (confirm('Do you want to confirm reserved seat/s ' + selectedList + '?')) {
					document.forms[0].oldStatusCode.value=1;
					document.forms[0].newStatusCode.value=2;
					
					document.forms[0].action='bookseats4.php';//Change
					document.forms[0].submit();
				} else {
					clearSelection();
				}
			}
		}


		function getSelectedList(actionSelected) {
			
			// get selected list
			var obj = document.forms[0].elements;
			var selectedList = '';
			for (var i = 0; i < obj.length; i++) {
				if (obj[i].checked && obj[i].name == 'seats[]') {
					selectedList += obj[i].value + ', ';
				}
			}
			
			// no selection error
			if (selectedList == '') {
				alert('Please select a seat before clicking ' + actionSelected);
				return false;
			} else {
				return selectedList;
			}

		}
		
		function clearSelection() {
			var obj = document.forms[0].elements;
			for (var i = 0; i < obj.length; i++) {
				if (obj[i].checked) {
					obj[i].checked = false;
				}
			}
		}


		function refreshView() {
			clearSelection();
			document.forms[0].action='<?php echo $_SERVER['PHP_SELF']; ?>';
			document.forms[0].submit();
		}

	</script>
</head>
<body bgcolor=#F0F0F0>


<!--header!-->
 <div id="header" align="center">
 <img src = "Title.png">
 <!--shortcuts!-->
<div id="nav" align="right" >
<br>
<ul>
    <li><a href="http://localhost/Project/AboutUs/aboutUs.html" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:orange">About Us</a></li>
    <li><a href="http://localhost/Project/Ratings/english.html" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:orange">Ratings</a></li>
    <li><a href="http://localhost/Project/MainPage/Main.php#playing" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:orange">Bookings</a></li>
	<li><a href="MPredirect.php" style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:orange">Home</a></li>
 </ul>
</div>
</div>
<div id="log">

<a href="http://localhost/Project/Registration/logOut.php" style="margin-left:20px;color:white;font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;color:orange">Logout</a>

<marquee style="color:orange">Welcome to Movie Center</marquee>
</div>
<br>
<div id="run">
<table>
<tr><td width="100%" align="center">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="hidden" name="oldStatusCode" value=""/>
<input type="hidden" name="newStatusCode" value=""/>
  
<table width='100%' border='0'>
	<tr><td align='center'>
		<input type='button' value='Refresh View' onclick='refreshView();'style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;"/>
	</td></tr>
</table>
</td></tr>
<tr><td width="100%" align="center">
<table width='100%' border='0'>
	<tr><td align='center'>
		<input type='button' value='Reserve Seats' onclick='reserveSeats()'style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;"/>
		&nbsp;<input type='button' value='Confirm Reservation' onclick='confirmSeats()'style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;"/>
		&nbsp;<input type='button' value='Cancel Reservation' onclick='cancelSeats()'style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;"/>
	</td></tr>
</table>
</td></tr>
<tr><td width="100%" align="center">
<table width='100%' border='0'>
	<tr><td align='center'>
		<input type='button' value='Clear Selection' onclick='clearSelection()'style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;"/></td>
	</tr>
</table>
<center><div id="bookin"><a href="http://localhost/Project/Paymnt/ticket.php"style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 15px;">View Ticket</a></div>
<br>
<div style="background-color:white">
<h1>SCREEN 2 - Everest 5.30pm (U/A ENGLISH)</h1>
</div>
<br>

<div style="background-color:white">
<span class="__text" style="font-size:20px;font-color:Black">All EYES THIS WAY PLEASE</span>
</div>
</td></tr>
<tr><td width="100%" align="center">
<?php

 
$linkID = @ mysql_connect("localhost", "root", "") or die("Could not connect to MySQL server");
@ mysql_select_db("tickets4") or die("Could not select database"); //Change
/* Create and execute query. */
$query = "SELECT * from seats order by rowId, columnId desc";
$result = mysql_query($query);
$prevRowId = null;
$seatColor = null;
$tableRow = false;
//echo $result;
echo "<table width='100%' border='0' cellpadding='3' cellspacing='3'>";
while (list($rowId, $columnId, $status, $updatedby) = mysql_fetch_row($result))
{
	if ($prevRowId != $rowId) {
		if ($rowId != 'A') {
			echo "</tr></table></td>";
			echo "\n</tr>";
		}
		$prevRowId = $rowId;
		echo "\n<tr><td align='center'><table border='1' cellpadding='8' cellspacing='8'><tr>";
	} else {
		$tableRow = false;
	}
	if ($status == 0) {
		$seatColor = "lightgreen";
	} else if ($status == 1 && $updatedby == 'user1') {
		$seatColor = "FFCC99";
	} else if ($status == 1 && $updatedby == 'user2') {
		$seatColor = "FFCCFF";
	} else if ($status == 2 && $updatedby == 'user1') {
		$seatColor = "FF9999";
	} else if ($status == 2 && $updatedby == 'user2') {
		$seatColor = "CC66FF";
	} else {
		$seatColor = "red";
	}

	echo "\n<td bgcolor='$seatColor' align='center'>";
	echo "$rowId$columnId";
	if ($status == 0 || ($status == 1 )) {
		echo "<input type='checkbox' name='seats[]' value='$rowId$columnId'></checkbox>";
	}
	echo "</td>";
		if (($rowId == 'A' && $columnId == 7) 
			|| ($rowId == 'B' && $columnId == 9) 
			|| ($rowId == 'C' && $columnId == 9) 
			|| ($rowId == 'D' && $columnId == 10) 
			|| ($rowId == 'E' && $columnId == 8) 
			|| ($rowId == 'F' && $columnId == 5) 
			|| ($rowId == 'G' && $columnId == 13) 
			|| ($rowId == 'H' && $columnId == 14) 
			|| ($rowId == 'I' && $columnId == 14) 
			|| ($rowId == 'J' && $columnId == 12) 
			|| ($rowId == 'K' && $columnId == 14) 
			|| ($rowId == 'L' && $columnId == 13) 
			|| ($rowId == 'M' && $columnId == 9)) {
			// This fragment is for adding a blank cell which represent the "center aisle"
			echo "<td>&nbsp;</td>";
		}
}

echo "</tr></table></td>";
echo "</tr>";
echo "</table>";

/* Close connection to database server. */
mysql_close();
?>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td width="100%" align="center">
	<table border="1" cellspacing="8" cellpadding="8">
		<tr>
			<td bgcolor='lightgreen'>Available</td>
			<td bgcolor='FFCC99'>Reserved user1</td>
			<td bgcolor='FF9999'>Confirmed user1</td>
			<td bgcolor='FFCCFF'>Reserved user2</td>
			<td bgcolor='CC66FF'>Confirmed user2</td>
		</tr>
	</table>
</td></tr>
<tr><td>&nbsp;</td></tr>

</table>
</form>
</div>
</body>
</html>