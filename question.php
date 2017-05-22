<!doctype html>
<html>
	<head>
		<script type = "text/javascript">
			function btnclick(){
				window.location.href='gameUI.php'
			}
		</script>
	</head>
	<body>
		<?php
			$con= mysqli_connect("127.0.0.1","root","","tuatom");
			mysqli_query($con, "SET NAMES UTF8");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		?>
		<input type = "button" id = "mybutton" onclick = "btnclick()" value = "Play Game"/>
	</body>
</html>

