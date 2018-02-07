<div class="container">
  	<!-- Modal -->
	<div class="modal fade" id="apply" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

			        <div class="modal-header formbackground">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <H1 class='H1-modal'>Application Submission Form</H1>
			        </div>
			        
				<div class="modal-body formbackground">

					<form data-toggle="validator" class="form-horizontal" method="POST" enctype='multipart/form-data'>

						<div class="form-group">
							<label class="control-label col-sm-2 H2-subhead" for="name">Your Name:</label>	
							<div class="col-sm-6">
								<input type="text" class="form-control input-sm" id="name" name="name" maxlength="20" data-minlength="5" data-error="Invalid Name" placeholder="Shoaib Malik" required='required'>
									<div class="help-block with-errors"></div>
						    </div>
					    </div>

						<div class="form-group">
							<label class="control-label col-sm-2 H2-subhead" for="email">Your Email:</label>
							<div class="col-sm-6">
								<input type="email" class="form-control input-sm" id="email" name="yemail" maxlength="40" data-minlength="5" data-error="Invalid Email" placeholder="example@gmail.com" required>
									<div class="help-block with-errors"></div>
						    </div>
					    </div>
						
						<div class="form-group">
							<label class="control-label col-sm-2 H2-subhead" for="desc">Job Description:</label>
							<div class="col-sm-6">
								<textarea class="form-control input-sm" rows="5" id="desc" name="desc" maxlength="5000" data-minlength="5" data-error="Invalid Message" placeholder="Please briefly explain your skills, qualification and experience." required></textarea>
								<div class="help-block with-errors"></div>
						    </div>
					    </div>

						<div class="form-group">
							<label class="control-label col-sm-2 H2-subhead" for="postid">Attach Resume:</label>
							<div class="col-sm-6">
								<input type="hidden" name="postid" id="postid" value="">
								<input type="file" class="form-control input-sm" name="cv" required>
									<div class="help-block with-errors"></div>
						    </div>
					    </div>
						
						<div class="form-group">
							<div class="col-sm-6 col-sm-offset-2">
								<button type="submit" name="apply" class="btn btn-default btn-sm apply-style">Apply</button>
							</div>

							<div class="form-group">
								
									<label class="col-sm-10 col-sm-offset-1 H3-subhead">Please wait after submitting the application, It will take few minutes for uploading & sending (Thanks!)</label>
								
							</div>
						</div>
					</form>

						<div class="modal-footer formbackground">
				        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php
if(isset($_POST['apply']))
{	
	include "includes/db.php";

	$name = mysqli_real_escape_string($con,$_POST['name']);
	$yemail = mysqli_real_escape_string($con,$_POST['yemail']);
    $description = mysqli_real_escape_string($con,$_POST['desc']);		
    $postid = mysqli_real_escape_string($con,$_POST['postid']);	

	$allowed =  array('doc','docx' ,'pdf');
	$ext = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
	
	
	if ($_FILES["cv"]["size"] > 3000000) {
		echo "<script>swal('File size Exceeded than 3 MB');</script>";
	}
	else if(!in_array($ext,$allowed) ) {
		echo "<script>swal('Only pdf, doc & docx types are Supported');</script>";
		
	}
	else {
		$file_name	= $_FILES['cv']['name'];
		$tmp 		= $_FILES['cv']['tmp_name'];
		$org_path   = "files/" . $file_name;
		move_uploaded_file($tmp,$org_path);

		$sql = "SELECT title,email,company FROM post WHERE postid = $postid";
		
		$query = mysqli_query($con,$sql);
		while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$title = $result['title'];
			$cemail = $result['email'];
			$company = $result['company'];
		}		
		include('mailer.php');
	}
}
?>