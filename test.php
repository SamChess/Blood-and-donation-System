<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/3.3/">
	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url(); ?>assets/css/style.css"> -->
	<style type="text/css">
		body{
			}
			.myform{
				width: 450px;
				margin: 0 auto;
			}
			#login{
				margin-bottom:10px;
				margin-top:10px;
				background-color:#3498db;
				padding: 5px;
				color: white;
				width: 100%;
				text-align: center;;
				font-size: 18px;
				font-weight: bold;
			}
			#log{
				margin-bottom:10px;
				margin-top:10px;
				background-color:#3498db;
				padding: 5px;
				color: white;
				width: 100%;
				text-align: center;;
				font-size: 18px;
				font-weight: bold;
			}
			.input{
				width: 430px;
				margin: 0 auto;
				padding: 5px;
			}
			#wrap{
				width: 500px;
				margin:0 auto;
				background-color: lightblue;
				padding: 5px;
				border-radius: 10px;
				border: 2px solid #2c3e50;
			}
			;
		}
	</style>
</head>
<body>
	<div id = "wrap">
	<form class = "myform">
		<label id="labl">Name</label><br>
		<input type="text" class= "input" name="" value="" placeholder="Name">
		<br>
		<br>
		<label id="labl">Email</label><br>
		<input type="text" class= "input" name="" value="" placeholder="Email">
		<br>
		<br>
		<label id="labl">Usename</label><br>
		<input type="text"class= "input" name="" value="" placeholder="Username">
		<br>
		<br>
		<label id="labl">Usename</label><br>
		<input type="text" class= "input" name="" value="" placeholder="Username">
		<br>
		<br>
		<button type="button" id = "login" onclick="">Previous</button><br><br>

		<button type="button" id = "log" onclick="">Create Account</button>
	</form>
</div>
</body>
</html>