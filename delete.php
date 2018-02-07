<?php
session_start();
if(!isset($_SESSION['admin_name']))
{
$_SESSION['error'] = "You are not an Administrator!";
header('location: startup.php');
die();	
}

include("includes/db.php");

if($delete_menu1 = mysqli_real_escape_string($con,@$_GET['del_menu1'])) {

	$query = "delete from menu1 where m_id='$delete_menu1'";

	if(mysqli_query($con,$query))
	{
	echo "<script>window.open('admin_panel.php?deleted=A menu has been deleted!','_self')</script>";
	}
}


elseif($delete_menu2 = mysqli_real_escape_string($con,@$_GET['del_menu2'])) {

	$query = "delete from menu2 where m_id='$delete_menu2'";

	if(mysqli_query($con,$query))
	{
	echo "<script>window.open('admin_panel.php?deleted=A menu has been deleted!','_self')</script>";
	}
}

elseif($delete_page = mysqli_real_escape_string($con,@$_GET['del_page'])) {

	$query = "delete from pages where p_id='$delete_page'";

	if(mysqli_query($con,$query))
	{
	echo "<script>window.open('admin_panel.php?deleted=A Page has been deleted!','_self')</script>";
	}
}

elseif($delete_page = mysqli_real_escape_string($con,@$_GET['del_post'])) {

	$query = "delete from post where title='$delete_page'";

	if(mysqli_query($con,$query))
	{
	header('location:admin_panel.php');
	echo "<script>alert(Post has been Deleted!);</script>";
	}
}
?>