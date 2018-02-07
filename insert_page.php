<!DOCTYPE html>
<html>

<?php
include("includes/db.php");
include("admin_panel.php");

?>

<form method='post' action=''>
	
	<table width='500' border='3' align='center'>
	
	<tr><td colspan='4' align='center'><h2>Insert New Page</h2></td></tr>
	
	<tr><th>Page Title</th>
	<td><input type='text' name='page_title'></td></tr>
	
	<tr><th>Page Description</th>
	<td><textarea name='page_desc' cols=20 rows=10></textarea></td></tr>
	
	<tr><td colspan='2' align='center'><input type='submit' name='submit' value='Send'></td></tr>
	</table>
</form>
</html>

<?php
if(isset($_POST['submit']))
{
	$page_title = mysqli_real_escape_string($con,$_POST['page_title']);
	$page_desc = mysqli_real_escape_string($con,$_POST['page_desc']);
		
	$query = "insert into pages (p_title,p_description) values ('$page_title','$page_desc')";
	if(mysqli_query($con,$query))
	{
		echo "<script>window.open('insert_page.php?inserted=A New page has been inserted!','_self')</script>";	
	exit();
		}	
}
?>