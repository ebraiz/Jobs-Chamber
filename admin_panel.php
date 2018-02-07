<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
$_SESSION['error'] = "You are not an Administrator!";
header('location: index.php');	
die();
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Welcome To Admin Panel</title>
</head>

<body background="images/background.jpg">
<h2 align='center'><?php echo @$_GET['upd'] ?></h2>
<h2 align='center'><?php echo @$_SESSION['login_msg'] ?></h2>

<table border='1' width='40%' align='left'>

<tr>
<td colspan='3'><h2 align='center'><b>WELCOME TO ADMIN PANEL</b></h2></td>
</tr>

<tr><td><a href='admin_panel.php?menu_setting1=Menu Setting 1'><h3>View Menu 1</h3></a></td>

<td><a href='insert_menu1.php'><h3>Insert Menu 1</h3></a></td></tr>

<tr><td><a href='admin_panel.php?menu_setting2=Menu Setting 2'><h3>View Menu 2</h3></a></td>

<td><a href='insert_menu2.php'><h3>Insert Menu 2</h3></a></td></tr>

<tr><td><a href='admin_panel.php?page_setting=Page Setting'><h3>View Pages</h3></a></td>

<td><a href='insert_page.php'><h3>Insert New Page</h3></a></td></tr>

<tr><td><a href='admin_panel.php?post_setting=Post Setting'><h3>View Posts</h3></a></td>

<td><a href='insert_post.php'><h3>Create New Job</h3></a></td></tr>

<tr><td align='center' colspan='2'><a href='logout.php'><h3>Log Out</h3></td></tr>

<tr><td height='50px' colspan='3'>

<!--Retrieving Selected Post for viewing from the database -->

<table border='1' width='100%' align='left'>
<?php
include("includes/db.php");
$postid = mysqli_real_escape_string($con,@$_GET['view_post']);

$query = mysqli_query($con,"select * from post where postid='$postid'");

while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
	
	$postid = $result['postid'];
	$job_title = $result['title'];
	$job_desc = $result['description'];
	$deadline = $result['deadline'];
	$experience = $result['experience'];
	$company = $result['company'];
	$email= $result['email'];
	$location = $result['location'];
    $date = $result['date'];
    $author = $result['author'];		
    $category = $result['category'];
	
	?>

<tr><td align='left' colspan='3'><h4><font face='verdana' color='black'><?php echo $job_title; ?></font></h4></td>

<tr><td colspan='2' align='justify' width='70%'><font face='verdana' size='2' color='black' class='admin_panel-line'><?php echo $job_desc; ?></font></td></tr>

<tr><td colspan='2'><b><font face='verdana' size='2' color='black'><br>Experience Required:</b>&emsp;<?php echo $experience; ?></font></td></tr>

<tr><td colspan='2'><b><font face='verdana' size='2' color='black'>Company Name:</b>&emsp;<?php echo $company; ?></font></td></tr>

<tr><td colspan='2'><b><font face='verdana' size='2' color='black'>Location:</b>&emsp;<?php echo $location; ?></font></td></tr>

<tr><td colspan='2'><b><font face='verdana' size='2' color='black'>Apply Before:</b>&emsp;<?php echo $deadline; ?></font></td></tr>

<tr><td><b><font face='verdana' size='2' color='black'>Posted By:</b>&emsp;<?php echo $author; ?>&emsp;<b>@</b>&emsp;<?php echo $date; ?></font></td>

<td align='right'><b><font face='verdana' size='2' color='black'>Category:</b>&emsp;<?php echo $category; ?></font></td></tr>


<td valign='top' colspan='2'>
<a href='delete.php?del_post=<?php echo $job_title; ?>'>Delete</a>
&emsp;&emsp;<a href='editpost.php?edit_post=<?php echo $postid; ?>'>Edit</a>
</td></tr>

<?php	} ?>	
</table>

</td></tr>
</table>

<!--Retrieving Post from the database -->
<table border='1' width='40%' align='right'>
<tr>
	<td colspan="8" align="center">
		<form action="admin_panel.php" method="post">
			<select name="menu2">
				<?php
				$query = mysqli_query($con,"SELECT m_title FROM menu2");

				while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
				{
				$menu2 = $result['m_title'];
				echo "<option value='". $menu2 . "'>". $menu2 . "</option>";
				}
				?>
			</select>
			<input type="submit" name="menu2" value="Search" />
		</form>
	</td>
</tr>


<?php
include("includes/db.php");
if(isset($_GET['post_setting']))
{
$query = mysqli_query($con,"SELECT * FROM post ORDER BY postid DESC");
while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	$postid = $result['postid'];
	$job_title = $result['title'];
	$job_desc = $result['description'];
	$deadline = $result['deadline'];
	$experience = $result['experience'];
	$company = $result['company'];
	$email= $result['email'];
	$location = $result['location'];
    $date = $result['date'];
    $author = $result['author'];		
    $category = $result['category'];
	
	?>
<tr>
	<td align='left'>
		<font face='verdana' color='black'><?php echo $postid; ?></font>
	</td>

	<td align='left' colspan='3'>
		<h4>
			<font face='verdana' color='black'><?php echo $job_title; ?></font>
		</h4>
	</td>

	<td valign='top' colspan='2'>
		<a href='admin_panel.php?view_post=<?php echo $postid; ?>'>View</a>
	</td>

	<td valign='top'>
		<a href='delete.php?del_post=<?php echo $job_title; ?>'>Delete</a>
	</td>

	<td valign='top'>
		<a href='editpost.php?edit_post=<?php echo $postid; ?>'>Edit</a>
	</td>
</tr>

<?php	}} ?>	
</table>

<!--Retrieving Menu 1 from the database -->

<?php
include("includes/db.php");
if(isset($_GET['menu_setting1']))
{
?>

<table border='1' width='40%' align='right'>
<tr>
<th valign='top'>Menu 1 No</th>
<th valign='top'>Menu Title</th>
<th valign='top'>Edit</th>
<th valign='top'>Delete</th>

</tr>

<?php
	$query = "select * from menu1";
	$run = mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run,MYSQLI_NUM)){		
		$m_id = $row[0];
		$m_title = $row[1];
?>		
<tr><td valign='top'><?php echo $m_id; ?></td>
<td valign='top'><?php echo $m_title; ?></td>
<td valign='top'><a href='edit_menu1.php?edit_menu1=<?php echo $m_id; ?>'>Edit</a></td>
<td><a href='delete.php?del_menu1=<?php echo $m_id; ?>'>Delete</a></td></tr>

<?php	}} ?>	
</table>

<!--Retrieving Menu 2 from the database -->

<?php

if(isset($_GET['menu_setting2']))
{
?>

<table border='1' width='40%' align='right'>

<tr>
<th valign='top'>Menu 2 No</th>
<th valign='top'>Menu Title</th>
<th valign='top'>Edit</th>
<th valign='top'>Delete</th>
</tr>

<?php

	$query = "select * from menu2";
	$run = mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run,MYSQLI_NUM))
	{
		$m_id = $row[0];
		$m_title = $row[1];
?>	

<tr><td valign='top'><?php echo $m_id; ?></td>
<td valign='top'><?php echo $m_title; ?></td>
<td valign='top'><a href='edit_menu2.php?edit_menu2=<?php echo $m_id; ?>'>Edit</a></td>
<td><a href='delete.php?del_menu2=<?php echo $m_id; ?>'>Delete</a></td></tr>

<?php	}} ?>	
</table>

<!--Retrieving Pages from the database -->

<?php 
if(isset($_GET['page_setting']))
{ 
?>

<table border='1' width='40%' align='right'>

<tr>
<th valign='top'>Page No</th>
<th valign='top'>Page Title</th>
<th valign='top'>Page Description</th>
<th valign='top'>Edit</th>
<th valign='top'>Delete</th>
</tr>

<?php

	$query = "select * from pages";
	$run = mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run,MYSQLI_NUM))
	
	{
		$p_id = $row[0];
		$p_title = $row[1];
		$p_description = substr($row[2],0,200);
?>		

<tr><td valign='top'><?php echo $p_id; ?></td>
<td valign='top'><?php echo $p_title; ?></td>
<td valign='top'><?php echo $p_description; ?></td>
<td valign='top'><a href='edit_page.php?edit_page=<?php echo $p_id; ?>' >Edit</a></td>
<td valign='top'><a href='delete.php?del_page=<?php echo $p_id; ?>' >Delete</a></td></tr>

	<?php	}} ?>	

</table>
</body>
</html>