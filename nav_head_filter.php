<!--Navigation Bar 1-->

<tr>
	<td>
		<table border='0' width='100%' class='table-responsive table2'>
			<tr>
				<td width='10%' height='10%' align='center'>
					<a href='index.php' class='a_menu'>Home</a>
				</td>
	
				<td width='10%' height='10%' align='center'>
					<a href='#' data-toggle="modal" data-target="#submitjob" class='a_menu'>Submit Job</a>
				</td>
	
				<td width='10%' height='10%' align='center'>
					<a href='#' data-toggle="modal" data-target="#about" class='a_menu'>About</a>
				</td>
	
				<td width='10%' height='10%' align='center'>
					<a href='#' data-toggle="modal" data-target="#contact" class='a_menu'>Contact</a>
				</td>	
			</tr>
		</table>
	</td>
</tr>

<!--Header-->

<tr>
	<td>
		<?php 
			include ("includes/headimage.php"); 
		?>
	</td>
</tr>

<!--Navigation Bar 2-->

<tr>
	<td>
		<table border='0' class='table-responsive table3'>
			<tr>
				<td>
					<ul class="topnav">
						<?php
							include ("includes/db.php");
							$query = "select * from menu2";
							$run = mysqli_query($con,$query);
							while ($row=mysqli_fetch_array($run,MYSQLI_NUM)) {	
								$m_title = $row[1];
								echo "<li><a href='index.php?post=$m_title' class='a_menu'>$m_title</a></li>";		
							}
						?>
						<li class="icon">
					    	<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
					  	</li>
				  	</ul>
				</td>
			</tr>
		</table>
	</td>
</tr>

<!--Filter By Section-->

<tr>
	<td>
		<table border='0' class='table-responsive' width="68%" align="center">
			<tr>
				<td>
					<form class="form-inline" method='post' action='filter.php' onsubmit="return Filter()">
						<!-- <div class='form-group'>
							<label class='singlepost-font-padd'>FILTER BY:</label>
						</div> -->

						<div class='form-group'> 
							<select name='location' class="form-control input-lg" id="location" onchange="this.form.submit();">
								<option value="City" selected>Browse By City</option>
						        <option value="Peshawar">Peshawar</option>
						        <option value="Islamabad">Islamabad</option>
						        <option value="Lahore">Lahore</option>
						        <option value="Karachi">Karachi</option>
								<option value="Faisalabad">Faisalabad</option>
						    </select>
						    <div id="LO"></div>
						</div>

						<div class='form-group'> 
							<select name='interest' class="form-control input-lg" id="interest" onchange="this.form.submit();">
						        <option value="Field" selected>Browse By Functional Area</option>
								<option value="IT">IT</option>
						        <option value="Marketing">Marketing</option>
						        <option value="HR">HR</option>
						        <option value="Accounting">Accounting</option>
								<option value="Internships">Internships</option>
								<option value="Pharmaceutical">Pharmaceutical</option>
						    </select>
						    <div id="IN"></div>
						</div>
						
						<div class='form-group'>
							<input type='submit' name='filter' value='Search' class="form-control hidden">
						</div>
					</form>
				</td>	
			</tr>
		</table>
	</td>
</tr>