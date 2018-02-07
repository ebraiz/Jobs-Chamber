<?php
include('includes/db.php');
include('pagination.php');

$result = mysqli_query($con,"SELECT * FROM post");
$num_rows = mysqli_num_rows($result);


$totalData = $num_rows;

$dataPerPage = 5;
//$totalPagesToShow = 3;
$GETpath = "p";
$currentPage = isset($_GET[$GETpath]) ? $_GET[$GETpath] : 1 ;
$pagi = new Pagination($totalData, $dataPerPage, $GETpath);
$pagi->setPage($currentPage);

$dataLimit = $pagi->getDataLimit();
$sql = "select * from post ORDER BY postid DESC LIMIT " . $dataLimit['start'] . "," . $dataPerPage;
//echo $sql;
$query = mysqli_query($con,$sql);

while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	/*echo "<br>";*/
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

<table border='0' width='100%' class='table-responsive'>
<tr><td align='left' colspan='4'>
<h5><?php echo "<b>" . date('F j, Y', strtotime($result['date'])) . "</b>"; ?></h5>
<H1 class="H1-post-title"><?php echo "<a href='singlepost.php?postid=$postid' class='hover1'>" . $job_title; ?></a></H1>
</td></tr>

<tr><td colspan='4' class='home-title-desc'><h5 class='home-line'><?php echo $job_desc; ?></h5></td></tr>

<tr><td colspan='2'><h5><b>Experience Required:</b>&emsp;<?php echo $experience; ?></h5></td>

<td align='right' colspan='2'><a onclick="setpostid(<?php echo $result['postid']; ?>);" href='#' data-toggle="modal" data-target="#apply" class='hover1'><h4 class='home-apply'>Apply</h4></a></td></tr>

<tr><td colspan="4"><h5><b>Company Name:</b>&emsp;<?php echo $company; ?></h5></td></tr>

<tr><td colspan="4"><h5><b>Location:</b>&emsp;<?php echo $location; ?></h5></td></tr>

<tr><td colspan="4"><h5><b>Apply Before:</b>&emsp;<?php echo $deadline; ?></h5></td></tr>

<tr><td colspan="2"><h5><b>Posted By:</b>&emsp;<?php echo $author; ?>&emsp;<b>@</b>&emsp;<?php echo date('g:i A', strtotime($result['date'])); ?></h5></td>

<td align='right' colspan="2"><h5><b>Category:</b>&emsp;<?php echo $category; ?></h5></td></tr>

<tr><td colspan='4'><hr class="hr-home"></td></tr>

</table>

<?php } 
$pagi->generateNaviClassic();
?>