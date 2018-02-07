<!-- Selecting Post Data From Database for Editing -->
<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
$_SESSION['error'] = "You are not an Administrator!";
header('location: index.php');	
die();
}

include ("includes/db.php");
$editpost= mysqli_real_escape_string($con,@$_GET['edit_post']);
$query = mysqli_query($con,"SELECT * FROM post WHERE postid='$editpost'") or die(mysql_error());
$run = mysqli_fetch_assoc($query);
$postid = $run['postid'];
$ptitle = $run['title'];
$pdesc = $run['description'];

$company = $run['company'];
$email = $run['email'];
$location = $run['location'];

$exp = $run['experience'];
$date = $run['date'];
$author = $run['author'];
$category = $run['category'];
?>

<!-- Showing Selected Information into Form -->
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Edit Job Here</title>

</head>
<body background="images/background.jpg">
<form method='post' action='editpost.php'>
<br><br><table border='1' align='center'>

<tr><td>Job ID: </td><td><input type='text' name='postID' value='<?php echo $postid; ?>'/></td></tr>
<tr><td>Job Title: </td><td><input type='text' name='ptitle' value='<?php echo $ptitle; ?>'/></td></tr>
<tr><td>Experience: </td><td><input type='text' name='exp' value='<?php echo $exp; ?>'/></td></tr>
<tr><td>Job Description: </td><td><textarea type='text' name='pdesc' cols='19' rows='10'><?php echo $pdesc; ?></textarea></td></tr>
<tr><td>Company Name: </td><td><input type='text' name='comp' value='<?php echo $company; ?>'/></td></tr>
<tr><td>Email: </td><td><input type='email' name='ema' value='<?php echo $email; ?>'/></td></tr>
<tr><td>Location: </td><td><input type='text' name='loca' value='<?php echo $location; ?>'/></td></tr>

<tr><td>Date: </td><td><input type='text'  name='date' value='<?php echo $date; ?>'/></td></tr>
<tr><td>Author: </td><td><input type='text'  name='author' value='<?php echo $author; ?>'/></td></tr>
<tr><td>Category: </td><td><input type='text'  name='category' value='<?php echo $category; ?>'/></td></tr>
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
$PostID = mysqli_real_escape_string($con,$_POST['postID']);
$Ptitle = mysqli_real_escape_string($con,$_POST['ptitle']);
$Pdesc = mysqli_real_escape_string($con,$_POST['pdesc']);

$Comp = mysqli_real_escape_string($con,$_POST['comp']);
$Email = mysqli_real_escape_string($con,$_POST['ema']);
$Loca = mysqli_real_escape_string($con,$_POST['loca']);

$Exp = mysqli_real_escape_string($con,$_POST['exp']);
$Pdate = mysqli_real_escape_string($con,$_POST['date']);
$Pauthor = mysqli_real_escape_string($con,$_POST['author']);
$Pcategory = mysqli_real_escape_string($con,$_POST['category']);

$query= "UPDATE post SET title='$Ptitle', description='$Pdesc',company='$Comp',email='$Email',location='$Loca',experience='$Exp', date='$Pdate', author='$Pauthor', category='$Pcategory' WHERE postid='$PostID'"; 

if(mysqli_query($con,$query)){
	
	echo "<script>window.open('admin_panel.php?upd=Post has been Updated!','_self')</script>";

	}

	else{
		echo "<script>alert('Sorry Not Updated Please Try Again!')</script>";
	}
}
?>
