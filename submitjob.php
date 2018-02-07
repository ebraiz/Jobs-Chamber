<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="submitjob" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header formbackground">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <H1 class='H1-modal'>Submit A Job</H1>
        </div>
        <div class="modal-body formbackground">
     
<div class="form-group">
	<H2 class='H2-modal'>You're Most Welcome to Share a Vacancy :)</H2>
</div>

<form data-toggle="validator" class="form-horizontal" method="POST" action="">

  <div class="form-group">
    <label class="control-label col-sm-2 H2-subhead">Your Email:</label>
  	<div class="col-sm-6">
      <input type="email" class="form-control input-sm" name="from" maxlength="40" data-minlength="5" data-error="Invalid Email" placeholder="example@gmail.com" required>
      <div class="help-block with-errors"></div>
    </div>
  </div>

  <div class="form-group">
  	<label class="control-label col-sm-2 H2-subhead">Job Description:</label>
    	<div class="col-sm-6">
    		<textarea class="form-control input-sm" rows="5" name="message" maxlength="5000" data-minlength="5" data-error="Invalid Message" placeholder="Please completely explain the job with a valid title, smart description, location, experience required, deadline and company name otherwise we are unable to publish the job." required></textarea>
    		<div class="help-block with-errors"></div>
      </div>
  </div>

  <div class="form-group">
  	<div class="col-sm-6 col-sm-offset-2">
      <button type="submit" name="submit" class="btn btn-default btn-sm apply-style">Click To Send</button>
    </div>
  </div>

</form>

        </div>
        <div class="modal-footer formbackground">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['submit'])){

$from = $_POST['from'];	
$subject = 'Jobs Chamber - Job Request';
$message = $_POST['message'];

mail('jobschamber1@gmail.com',$subject,$message,"From:".$from);

echo "<script>swal('Congratulations! Your Job has been Submitted Successfully!')</script>";	
}
?>