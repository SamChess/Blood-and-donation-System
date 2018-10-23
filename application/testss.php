<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">

		.left{
			float: left;
			margin-top: 10px
		}
		
		.center{
			float: left;
			 margin-left:100px ;	
			 margin-top: 10px;		
		}
		.right{
			float: right;
			margin-right:350px; 
			margin-top: 10px;
		}
		.three{
			width: 300px;
			height: px;
		}
		.sell{
			width: 170px;
		}
        .btn{
        	margin-top: 300px;
        }
	</style>

<link rel="stylesheet" type="text/css" href="/CodeIgniter-3.1.9/css?font-family-sans-serif:Roboto">
</head>
<h3 align="center">Donor Registration</h3>
<body>
<form method="post" action="<?php echo base_url()?>testss/form_validation">
	<?php
		if ($this->uri->segment(2) =="inserted")
		{
		echo '<p class="text-success"> Data inserted </p>';
		}
		?>
	
	
		<div class="">
			<LABEL>Name</LABEL>
		<br>
		
		<input class="three" type="text" name="Name">
		<span class="text-danger"><?php echo form_error("Name"); ?> </span>
		<br>
		<br>
		<label>Email</label>
		<br>
		<input class="three" type="text" name="Email">
		<span class="text-danger"><?php echo form_error("Email"); ?> </span>
		<br>
		<br>
		<label>Telephone</label>
		<br>
		<input class="three" type="text" name="Telephone">
		<span class="text-danger"><?php echo form_error("Telephone"); ?> </span>
		<br>
		<br>
		<LABEL>Blood Type&RH.Type</LABEL> 
		<br>

		<select class="sell" name="Blood Type">
			 <option value="A">A positive</option>
             <option value="saab">A Negative</option>
             <option value="opel">B Positive</option>
             <option value="audi">B Negative</option>
             <option value="volvo">O Positive</option>
             <option value="saab">O Negative</option>
             <option value="audi">AB Negative</option>
             <option value="opel">AB Positive</option>
             <option value="audi">Bombay Group</option>
             <option value="volvo">A1 Positive</option>
             <option value="saab">A1 Negative</option>
             <option value="opel">A1B Positive</option>
             <option value="audi">A1B Negative</option>
             <option value="volvo">A2 Positive</option>
             <option value="saab">A2 Negative</option>
             <option value="opel">A2B Positive</option>
             <span class="text-danger"><?php echo form_error("Blood Type"); ?> </span>
       	</select>
		<br>
		<br>
		</div>
		
		<div class = "">
		<label>Gender</label>
		<br>
		<SELECT class = "sell" name = "Gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
			<span class="text-danger"><?php echo form_error("Gender"); ?> </span>
		</SELECT>
		<br>
		<br>
		<label>County</label>
		<br>
		<input type="text" name="County">
		<span class="text-danger"><?php echo form_error("County"); ?> </span>
		<br>
		<br>
		<label>Town</label>
		<br>
		<input type="text" name="Town">
		<span class="text-danger"><?php echo form_error("Town"); ?> </span>
		<br>
		<br>
		<label>Address</label>
		<br>
		<input type="text" name="Adderss">
		<span class="text-danger"><?php echo form_error("Address"); ?> </span>
	</div>
    
    <div class = "">
		<label>Date of Birth</label>
		<br>
		<input type="Date" name="Birth">
		<span class="text-danger"><?php echo form_error("Birth"); ?> </span>
		<br>
		<br>
		<label>Previous Blood Donation Date</label>
		<br>
		<input type="Date" name="Donation">
		<span class="text-danger"><?php echo form_error("Donation"); ?> </span>
		<br>
		<br>
		<label>Prefered Reminder Method</label>
		<br>
		<select class="sell" name="Reminder">
			<option value="sms">SMS</option>
			<option value="email">Email</option>
			<option value="phone">Phone</option>
			<span class="text-danger"><?php echo form_error("Reminder"); ?> </span>
		</select>
	</div>
	<div class="btn">
	<input type="submit" name="Register" value="insert">
	</div>

	</fieldset>



</form>	

	
</body>
</html>