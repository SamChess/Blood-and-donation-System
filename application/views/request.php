<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootstrap 
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<form method="post" action="<?php echo base_url()?> recipient_view/form_validation">


	<h3><b>Kindly Enter your Details</b></h3>
  <div class="form-group">
    <label for="Donor ID">Donor ID</label>
    <input type="text" class="form-control" id="id" placeholder="ID of Donor"> 
  </div>

  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" placeholder="First Name">
  </div>

   <div class="form-group">
    <label for="first_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
  </div>

   <div class="form-group">
    <label for="first_name">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address">
  </div>

     <div class="form-group">
    <label for="first_name">Telephone</label>
    <input type="text" class="form-control" id="telephone" placeholder="Telephone">
  </div>




  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
</form>


</body>
</html>