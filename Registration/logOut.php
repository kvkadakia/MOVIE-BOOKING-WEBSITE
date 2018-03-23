 <?php 
 session_start();
?>
 <?php 
 
 session_unset(); 
 session_destroy();
// $_SESSION["flag"] = 0;
 //$_SESSION["seat"] = "";
  echo "<meta http-equiv='refresh' content='0;url=http://localhost/Project/MainPage/MainPage.html' />";
?>