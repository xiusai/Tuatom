<!doctype html>
<html>
	<head>
<<<<<<< HEAD
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

=======
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
		<script type = "text/javascript">
			function btnclick(){
				window.location.href='gameUI.php'
			}
		</script>
	</head>
<<<<<<< HEAD

	<body background="2wall.jpg">
=======
	<body>
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
		<?php
			$con= mysqli_connect("127.0.0.1","root","","tuatom");
			mysqli_query($con, "SET NAMES UTF8");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		?>
<<<<<<< HEAD
		<div class="container">
			<div class="row">
		
		<div class="col-sm-11">
		</div>
		<div class="col-sm-1">
			<form action = "logout.php" method = "post">
			<input type = "submit" class="btn btn-lg btn-primary" id = "logout" value = "Logout">
			</form>
			
			</div>

		<div class="container">
			<div class="row">
				<br><br><br><br><br><br><br><br>
				<div class="col-sm-3">
				</div>
	  			<div class="col-sm-6">
	  				<img src="kk.png" class="img-responsive" alt=""> <br>
	  				<div class="clearfix"></div>
	  				<!-- <div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="text" class="form-control" id="usr" placeholder="ENTER YOUR NAME">
					</div> -->
	  				<button type = "button" class="btn btn-lg btn-primary btn-block" id = "mybutton" onclick = "btnclick()" value = "Play Game">PLAY GAME </button>
				</div>
				<div class="col-sm-3">
				</div>
			</div>

		</div>
		
=======
		<input type = "button" id = "mybutton" onclick = "btnclick()" value = "Play Game"/>
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
	</body>
</html>

