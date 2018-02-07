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

<table border='0' class='table-responsive table5'>

<!--Navigation Bar 1 + Head Image + Navigation Bar 2 + Filter-->
<!--These four sections are avaliable in Filter.php + singlepost.php + index.php page-->
<?php include('nav_head_filter.php'); ?>

<!--Main Content-->

<tr>
	<td align='top'>
		<table border='0' class='table-responsive table4'>
			<tr>
				<td class="table4-padding">
					<?php
						if(isset($_POST['filter'])){

						$location = mysqli_real_escape_string($con,$_POST['location']);	
						$interest = mysqli_real_escape_string($con,$_POST['interest']);

						$sql = "SELECT * FROM post WHERE location='$location' AND category='$interest' ORDER BY postid DESC";

						$query = mysqli_query($con,$sql);
						$num_rows = mysqli_num_rows($query);

						if($num_rows == 0){
					?>
					<table border='1' width='100%' class='table-responsive'>
						<tr>
							<td>
								<h3 align='center'>
									<b>SORRY, NO JOBS TO SHOW</b>
								</h3>
							</td>
						</tr>
					</table>
						<?php
							} while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
								echo "<br>";
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
						<tr>
							<td align='left' colspan='4'>
								<h5>
									<?php echo "<b>" . date('F j, Y', strtotime($result['date'])) . "</b>"; ?>
								</h5>

								<H1 class="H1-post-title">
									<?php echo "<a href='singlepost.php?postid=$postid' class='hover1'>" . $job_title; ?></a>
								</H1>
							</td>
						</tr>

						<tr>
							<td colspan='4' class='home-title-desc'>
								<h5 class='home-line'>
									<?php echo $job_desc; ?>
								</h5>
							</td>
						</tr>

						<tr>
							<td colspan='2'>
								<h5>
									<b>Experience Required:</b>
									&emsp;<?php echo $experience; ?>
								</h5>
							</td>

							<td align='right' colspan='2'>
								<a onclick="setpostid(<?php echo $result['postid']; ?>);" href='#' data-toggle="modal" data-target="#apply" class='hover1'>
								<h4 class="home-apply">Apply</h4></a>
							</td>
						</tr>

						<tr>
							<td colspan="4">
								<h5>
									<b>Company Name:</b>
									&emsp;<?php echo $company; ?>
								</h5>
							</td>
						</tr>

						<tr>
							<td colspan="4">
								<h5>
									<b>Location:</b>
									&emsp;<?php echo $location; ?>
								</h5>
							</td>
						</tr>

						<tr>
							<td colspan="4">
								<h5>
									<b>Apply Before:</b>
									&emsp;<?php echo $deadline; ?>
								</h5>
							</td>
						</tr>

						<tr>
							<td colspan="2">
								<h5>
									<b>Posted By:</b>
									&emsp;<?php echo $author; ?>&emsp;<b>@</b>&emsp;<?php echo date('g:i A', strtotime($result['date'])); ?>
								</h5>
							</td>

							<td align='right' colspan="2">
								<h5>
									<b>Category:</b>
									&emsp;<?php echo $category; ?>
								</h5>
							</td>
						</tr>

						<tr>
							<td colspan='4'>
								<hr class="hr-home">
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</table>

					<?php } } ?>
				</td>
				<td width='2%' id="verticle-line"><!-- <img src='images/sidebar.jpg' width='100%' height='100%'> --></td>
			</tr>
		</table>

		<!--Side Bar-->

		<table border='0' align='right' class='table-responsive'>
			<tr>	
				<td width='100%' valign='top'>
					<?php 
						include('sidebar.php'); 
					?>
				</td>
			</tr>
		</table>
	</td>
</tr>

<!--Footer-->

<tr>
	<td align='center'>
		<hr class="hr-footer">
			<?php include('footer.php'); ?>
		<hr class="hr-footer">
	</td>
</tr>

</table>
</body>
</html>