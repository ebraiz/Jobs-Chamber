<!-- Selecting Pages From Database for Editing -->
<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
$_SESSION['error'] = "You are not an Administrator!";
header('location: index.php');	
die();
}

include ("includes/db.php");
$edit_page= mysqli_real_escape_string($con,@$_GET['edit_page']);
$query = mysqli_query($con,"SELECT * FROM pages WHERE p_id='$edit_page'") or die(mysql_error());
$run = mysqli_fetch_assoc($query);

$p_id = $run['p_id'];
$p_title = $run['p_title'];
$p_description = $run['p_description'];

?>

<!-- Showing Selected Information into Form -->
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Edit Page Here</title>

</head>
<body background="images/background.jpg">
<form method='post' action='edit_page.php'>
<br><br><table border='1' align='center'>

<tr><td>Page ID: </td><td><input type='text' name='pageid' value='<?php echo $p_id; ?>'/></td></tr>
<tr><td>Page Title: </td><td><input type='text' name='pagetitle' value='<?php echo $p_title; ?>'/></td></tr>
<tr><td>Page Description: </td><td><input type='text' name='pagedesc' value='<?php echo $p_description; ?>' /></td></tr>
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
$Page_id = mysqli_real_escape_string($con,$_POST['pageid']);
$Page_title = mysqli_real_escape_string($con,$_POST['pagetitle']);
$Page_desc = mysqli_real_escape_string($con,$_POST['pagedesc']);

$query= "UPDATE pages SET p_title='$Page_title',p_description='$Page_desc' WHERE p_id='$Page_id'"; 

if(mysqli_query($con,$query)){
	
	echo "<script>window.open('admin_panel.php?upd=Page has been Updated!','_self')</script>";

	}

	else{
		echo "<script>alert('Sorry Not Updated Please Try Again!')</script>";
	}
}
?>
