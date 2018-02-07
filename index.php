<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">    
<title>Welcome to Jobs Chamber</title>
<?php include('includes/header.php'); ?>
<meta name="google-site-verification" content="hBefNKW-wGDdCglfOfuZk_RsGIosJiph_z4vJIk0phQ" />

</head>

<body>
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->

<?php include('submitjob.php'); ?>
<?php include('contact.php'); ?>
<?php include('about.php'); ?>
<?php include('apply.php'); ?>

<table border="0" class='table-responsive table1'>

<!--Navigation Bar 1 + Head Image + Navigation Bar 2 + Filter-->
<!--These four sections are avaliable in Filter.php + singlepost.php + index.php page-->
<?php include('nav_head_filter.php'); ?>

<!--Main Content-->

<tr>
	<td valign='top'>
		<table border="0" align="left" class='table-responsive table4'>
			<tr>
				<td class='table4-padding'>			
					<?php
						if (empty($_GET['post']) || isset($_GET['pages']) && $_GET['pages'] == 'Home'){
							include('home.php');
						}
						
						else if(isset($_GET['post'])){
							include ('viewpost.php');
						} 

						else {
							include ('home.php');
						}	
					?>
				</td>
				<td width='2%' id="verticle-line"><!-- <img src='images/sidebar.jpg' width='100%' height='100%'> --></td>
			</tr>
		</table>

		<!--Side Bar-->

		<table border="0" align='right' class='table-responsive'>
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