<!-- Selecting Menu 1 Data From Database for Editing -->
<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
$_SESSION['error'] = "You are not an Administrator!";
header('location: index.php');
die();	
}

include ("includes/db.php");
$edit_menu1= mysqli_real_escape_string($con,@$_GET['edit_menu1']);
$query = mysqli_query($con,"SELECT * FROM menu1 WHERE m_id='$edit_menu1'") or die(mysql_error());
$run = mysqli_fetch_assoc($query);

$m_id = $run['m_id'];
$m_title = $run['m_title'];

?>

<!-- Showing Selected Information into Form -->
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Edit Menu 1 Here</title>

</head>
<body background="images/background.jpg">
<form method='post' action='edit_menu1.php'>
<br><br><table border='1' align='center'>

<tr><td>Menu 1 ID: </td><td><input type='text' name='m1id' value='<?php echo $m_id; ?>'/></td></tr>
<tr><td>Menu 1 Title: </td><td><input type='text' name='m1title' value='<?php echo $m_title; ?>'/></td></tr>
<tr><td align='center' colspan='2'><input type='submit' name='update' value='Update'></td></tr>
</table>
</form>
</body>
</html>

<!-- Update Section -->
<?php

include ("includes/db.php");
if(isset($_POST['update']))
{
$M_id = mysqli_real_escape_string($con,$_POST['m1id']);
$M_title = mysqli_real_escape_string($con,$_POST['m1title']);

$query= "UPDATE menu1 SET m_title='$M_title' WHERE m_id='$M_id'"; 

if(mysqli_query($con,$query)){
	
	echo "<script>window.open('admin_panel.php?upd=Menu1 has been Updated!','_self')</script>";

	}

	else{
		echo "<script>alert('Sorry Not Updated Please Try Again!')</script>";
	}
}
?>