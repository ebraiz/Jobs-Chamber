<!DOCTYPE html>
<html>

<?php
include("includes/db.php");
include("admin_panel.php");

?>

<form method='post' action=''>
	
	<table width='50%' border='1' align='right'>
	
	<tr><td colspan='4' align='center'><h2>Insert New Menu 2</h2></td></tr>
	
	<tr><th>Menu Title</th>
	<td><input type='text' name='menu1_title'></td></tr>
	
	<tr><td colspan='2' align='center'><input type='submit' name='submit' value='Send'></td></tr>
	</table>
</form>
</html>

<?php
if(isset($_POST['submit']))
{
	$menu1_title = mysqli_real_escape_string($con,$_POST['menu1_title']);
		
	$query = "insert into menu2 (m_title) values ('$menu1_title')";
	if(mysqli_query($con,$query))
	{
		echo "<script>window.open('insert_menu2.php?inserted=A New Menu has been inserted in Menu 2!','_self')</script>";
		exit();
	}	
}
?>