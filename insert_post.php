<!DOCTYPE html>
<html>

	<?php
		include("includes/db.php");
		include("admin_panel.php");
	?>

<form method='post' action='' enctype='multipart/form-data'>
	
	<table width='40%' border='1' align='right'>
	
	<tr><td colspan='4' align='center'><h2>Create New Job</h2></td></tr>
	
	<tr align='left'><th>Job Title</th>
	<td><input type='text' name='job_title' size='50'></td></tr>
	
	<tr align='left'><th>Job Description</th>
	<td><textarea name='job_desc' cols=42 rows=10></textarea></td></tr>

	<tr align='left'><th>Experience</th>
	<td><input type='text' name='experience' size='50'></td></tr>
	
	<tr align='left'><th>Company</th>
	<td><input type='text' name='company' size='50'></td></tr>
	
	<tr align='left'><th>Location</th>
	<td><input type='text' name='location' size='50'></td></tr>
	
	<tr align='left'><th>Deadline</th>
	<td><input type='date' name='deadline' size='50'></td></tr>
	
	<tr align='left'><th>Email</th>
	<td><input type='text' name='email' size='50'></td></tr>
	
	<tr align='left'><th>Publisher Name</th>
	<td><input type='text' name='author' size='50'></td></tr>

	<tr align='left'><th>Category:</th><td>
	
		<select name='category'>
              <option value="IT" selected>IT</option>
              <option value="Marketing">Marketing</option>
              <option value="HR">HR</option>
              <option value="Accounting">Accounting</option>
			  <option value="Internships">Internships</option>
			  <option value="Pharmaceutical">Pharmaceutical</option>
			  <option value="Sales">Sales</option>
			  <option value="Administration">Administration</option>
        </select></td></tr>

	<tr><td colspan='2' align='center'><input type='submit' name='post' value='Publish'></td></tr>
	</table>

</form>
</html>

<?php
date_default_timezone_set("Asia/Karachi");
if(isset($_POST['post']))
{
	
	$job_title = mysqli_real_escape_string($con,$_POST['job_title']);
	$job_desc = mysqli_real_escape_string($con,$_POST['job_desc']);
    $deadline = mysqli_real_escape_string($con,$_POST['deadline']);
	$experience = mysqli_real_escape_string($con,$_POST['experience']);
	$company = mysqli_real_escape_string($con,$_POST['company']);		
    $email = mysqli_real_escape_string($con,$_POST['email']);
	$location = mysqli_real_escape_string($con,$_POST['location']);
	$author = mysqli_real_escape_string($con,$_POST['author']);
	$category = mysqli_real_escape_string($con,$_POST['category']);

	$query = "insert into post (title,description,deadline,experience,company,email,location,author,category) values 
        ('$job_title','$job_desc','$deadline','$experience','$company','$email','$location','$author','$category')";
		
	if(mysqli_query($con,$query))
	{
		echo "<script>alert('A New Post has been Published!')</script>";	
	    exit();
    }
	else{
		echo "<script>alert('Unable to Published Post.')</script>";	
	    exit();
    }  
}
?>