<!DOCTYPE html>
<html>
<head>
	<title>Sumber Makmur</title>
	<link rel="icon" type="image/png" href="gambar/logo2.png"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

	
	<div class="container" style="background-color: #F1F1F1; margin-top: 125px; padding: 40px;" align="center">
		<div class="form1" style="margin-top: 50px;">
		<h4> FORM LOGIN </h4>
		&nbsp;
		<form action="<?php echo base_url('index.php/admin/login/aksi_login'); ?>" method="POST">
		<div class="form">
          	<div class="col-sm-8">
            	<input type="text" class="form-control" name="username" placeholder="Username" style="width: 400px;">
          	</div>
        </div>
        &nbsp;
        <div class="form">
          	<div class="col-sm-8">
            	<input type="Password" class="form-control" name="password" placeholder="Password" style="width: 400px;">
         	 </div>
         &nbsp;
		  <button style="margin-top: 50px;" type="submit" value="login" class="btn btn-primary" name="acc">Submit</button>
		</div>
		</form>
	</div>
</body>
</html>