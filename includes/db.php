
<?php
/*
$con = mysql_connect("localhost","root","") or die(mysql_error());
$db = mysql_select_db("jobschamber",$con) or die(mysql_error());
*/

$con=mysqli_connect("localhost","root","","jobschamber");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  /*
$con=mysqli_connect(getenv('OPENSHIFT_MYSQL_DB_HOST'),"adminMr6URJ5","kHkmlTempyBw","jobschamber");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  */

/*
$host    = getenv('OPENSHIFT_MYSQL_DB_HOST');
$user    = "adminMr6URJ5";
$pass    = "kHkmlTempyBw";
$db_name = "jobschamber";

$db = new mysqli($host,$user,$pass,$db_name);
*/
?>