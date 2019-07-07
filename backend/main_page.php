<?php 
	session_start();
	require 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require 'head_content.php' ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php include 'navbar.php' ?>
		</div>
	</div>
	<div class="container-fluid">
	<div style="margin-top: 80px;" class="row">	
		<div class="col-md-3 tiles">
			<div class="thumbnail text-center" style="padding: 10px;">
				<p class="lead">Event Name</p>
				<caption><a class="anchor-color" >Description of the event</a></caption><br>
				<caption><a style="color: black;">Quantity available - </a></caption><br>
				<caption><a style="color: black;"></a></caption><br>
				<caption><a style="color: black;">By - </a></caption><br><br>
				<div style="display:inline;" class="col-6">Quantity : <input style="max-width: 50px; height: 30px;" value="1" min="1" max="" type="number" name="quan"></div>&nbsp;&nbsp;&nbsp;&nbsp;
				<div align="center" style="display:inline;" class="col-6"><button class="addproduct btn btn-sm btn-primary">Add to cart</button></div>	
			</div>
		</div>
	</div>
</div>
</body>
</html>