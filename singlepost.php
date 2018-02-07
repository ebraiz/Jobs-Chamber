<?php
if (!isset($_SERVER["HTTP_REFERER"])) {
	header("Location: index.php");
	die();
}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">  
<title>Welcome to Jobs Chamber</title>
<?php include('includes/header.php'); ?>
</head>

<body>
<?php include('submitjob.php'); ?>
<?php include('contact.php'); ?>
<?php include('about.php'); ?>
<?php include('apply.php'); ?>


<table border='0' class='table-responsive' width='90%' align='center' class='singlepost-table1'>

<!--Navigation Bar 1 + Head Image + Navigation Bar 2 + Filter-->
<!--These four sections are avaliable in Filter.php + singlepost.php + index.php page-->
<?php include('nav_head_filter.php'); ?>

<!--Main Content-->

<tr>
<td align='top'>

<table border='0' width='68%' align='left' class='table-responsive'>
<tr><td class='singlepost-padd-right' valign='top'>

<?php
include('includes/db.php');

$postid = mysqli_real_escape_string($con,$_GET['postid']);

$sql = "select * from post where postid='$postid'";

$query = mysqli_query($con,$sql);

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
    //$date = $result['date'];
    $author = $result['author'];		
    $category = $result['category'];
?>


<table border='0' width='100%' class='table-responsive'>
<tr><td align='left' colspan='4'>
<h5><?php echo "<b>" .  date('F j, Y', strtotime($result['date'])) . "</b>"; ?></h5>
<h3 class='viewpost-margin-top'><?php echo $job_title; ?></h3>
</td></tr>

<tr><td colspan='4' class='viewpost-width70'><h5 class='viewpost-desc'><?php echo $job_desc; ?></h5></td></tr>

<tr><td colspan='2'><b><h5>Experience Required:</b>&emsp;<?php echo $experience; ?></h5></td>

<td align='right' colspan='2'><a onclick="setpostid(<?php echo $result['postid']; ?>);" href='#' data-toggle="modal" data-target="#apply" class='hover1'><h4 class='viewpost-apply'>Apply</h4></a></td></tr>

<tr><td colspan="4"><b><h5>Company Name:</b>&emsp;<?php echo $company; ?></h5></td></tr>

<tr><td colspan="4"><b><h5>Location:</b>&emsp;<?php echo $location; ?></h5></td></tr>

<tr><td colspan="4"><b><h5>Apply Before:</b>&emsp;<?php echo $deadline; ?></h5></td></tr>

<tr><td colspan="2"><b><h5>Posted By:</b>&emsp;<?php echo $author; ?>&emsp;<b>@</b>&emsp;<?php echo date('g:i A', strtotime($result['date'])); ?></h5></td>

<td align='right' colspan="2"><b><h5>Category:</b>&emsp;<?php echo $category; ?></h5></td></tr>

<tr><td colspan='4'><hr class="hr-footer"></td></tr>

<tr><td colspan="3"><h4><b><u>See Related Jobs</u></b></h4></td></tr>

<tr><td colspan="3" height='30px'></td></tr>

</table>

<table border='3' width='100%' align='left' class='table-responsive'>
<?php

$sql = "SELECT * FROM post WHERE title != '" . $result['title'] . "' AND category =  '$category' ORDER BY postid DESC LIMIT 0,3";

$query = mysqli_query($con,$sql);

//while(
$result1 = @mysqli_fetch_array($query,MYSQLI_ASSOC);//)
$result2 = @mysqli_fetch_array($query,MYSQLI_ASSOC);//)
$result3 = @mysqli_fetch_array($query,MYSQLI_ASSOC);//)
//{

echo "<tr align='center'>
<td class='singlepost-width-padd'>
<h4><a href='singlepost.php?postid=" . @$result1['postid'] . "' class='hover1 pagination-color'><b>" . @$result1['title'] . "</b></a></h4>
</td>

<td class='singlepost-width-padd'>
<h4><a href='singlepost.php?postid=" . @$result2['postid'] . "' class='hover1 pagination-color'><b>" . @$result2['title'] . "</b></a></h4>
</td>

<td class='singlepost-width-padd'>
<h4><a href='singlepost.php?postid=" . @$result3['postid'] . "' class='hover1 pagination-color'><b>" . @$result3['title'] . "</b></a></h4>
</td></tr>";

echo "<tr align='center'>
<td class='singlepost-width-padd1'><h5>" . substr(@$result1['description'],0,200) . "</h5></td>
<td class='singlepost-width-padd1'><h5>" . substr(@$result2['description'],0,200) . "</h5></td>
<td class='singlepost-width-padd1'><h5>" . substr(@$result3['description'],0,200) . "</h5></td>

</tr>";
?>

</table>

<?php 
//}
}
 ?>

</td>
		<td width='2%'><img src='images/sidebar.jpg' width='100%' height='100%'></td>
		</tr></table>
		
<!--Side Bar-->

<table border='0' align='right' class='table-responsive'>
		<tr>	

<td width='100%' valign='top'>
<?php include('sidebar.php'); ?>
</td>
		</tr>
		</table>
	
</td></tr>
<!--Footer-->

<tr><td align='center'>

<hr class="hr-footer">
<?php include('footer.php'); ?>
<hr class="hr-footer">

</td></tr>

</table>
</body>
</html>