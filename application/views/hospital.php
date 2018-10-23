<!DOCTYPE html>
<html>
<head>
	<title>Hospital</title>
	<link rel="stylesheet" type="text/css" href="/CodeIgniter-3.1.9/css/bootstrap.css"/></head></html>
</head>
</head>

<body>
	<form method="post" action="<?php echo base_url()?>hospital/form_validation">
		<?php
		if ($this->uri->segment(2) =="inserted")
		{
		echo '<p class="text-success"> Data inserted </p>';
		}
		?>
		<div class="form-group"/>
			<label>Name</label>
			<input type="text" name="Name" class="form_control"/>
			<span class="text-danger"><?php echo form_error("Name"); ?> </span>
		</div>
		<div class="form-group"/>
			<label>Email</label>
			<input type="text" name="Email" class="form_control"/>
			<span class="text-danger"><?php echo form_error("Email"); ?> </span>
		</div>
		<div class="form-group"/>
			<label>Contact</label>
			<input type="text" name="Contact" class="form_control"/>
			<span class="text-danger"><?php echo form_error("Email"); ?> </span>
		</div>
		<div class="form-group"/>
			<label>Hospital Code</label>
			<input type="text" name="Code" class="form_control"/>
			<span class="text-danger"><?php echo form_error("Code"); ?> </span>
		</div>
		</div>

		<div class="form-group"/>
			<input type="submit" name="insert" value="insert" class="btn btn-info"/>
		</div>
	</form>
</body>
</html>