<div class="container">

<!-- Modal -->
  <div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header formbackground">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <H1 class='H1-modal'>Contact Us</H1>
        </div>


<div class="modal-body formbackground">
<div class="form-group">
<H2 class='H2-modal'>Feel Free To Send Us a Sweet Feedback :)</H2>
</div>

<form data-toggle="validator" class="form-horizontal" method="POST">

	<div class="form-group">	
		<label class="control-label col-sm-2 H2-subhead">Your Email:</label>
		<div class="col-sm-6">
			<input type="email" class="form-control input-sm" name="from" maxlength="40" data-minlength="5" data-error="Invalid Email" placeholder="example@gmail.com" required>
				<div class="help-block with-errors"></div>
	    </div>
    </div>

	<div class="form-group">
		<label class="control-label col-sm-2 H2-subhead">Subject:</label>	
		<div class="col-sm-6">
			<input type="text" class="form-control input-sm" name="subject" maxlength="30" data-minlength="5" data-error="Invalid Subject" placeholder="Feedback | Complaint" required>
				<div class="help-block with-errors"></div>
	    </div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2 H2-subhead">Message:</label>
		<div class="col-sm-6">
			<textarea class="form-control input-sm" rows="5" name="message" maxlength="1000" data-minlength="5" data-error="Incomplete Message" required></textarea>
			<div class="help-block with-errors"></div>
	    </div>
	</div>

	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-2">
			<button type="submit" name="send" class="btn btn-default btn-sm apply-style"><subtitle>Click To Send</subtitle></button>
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
if(isset($_POST['send'])){

$from = $_POST['from'];	
$subject = $_POST['subject'];
$message = $_POST['message'];

mail('jobschamber1@gmail.com','Jobs Chamber - Contact '.$subject,$message,"From:".$from);

echo "<script>swal('Congratulations! Your Feedback has been send Successfully!')</script>";
}
?>