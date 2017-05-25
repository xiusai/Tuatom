<!doctype html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body background="2wall.jpg">
			<div class="container">
			<div class="row">
		
		<div class="col-sm-11">
		</div>
		<div class="col-sm-1">
			<form action = "logout.php" method = "post">
			<input type = "submit" class="btn btn-lg btn-primary" id = "logout" value = "Logout">
			</form>
			
			</div>
			<br><br>
		<?php
			$con = mysqli_connect("127.0.0.1","root","","tuatom");
			mysqli_query($con, "SET NAMES UTF8");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

		if(!mysqli_query($con,"SELECT DISTINCT * FROM Question GROUP BY QuestionID"))
    	{
        	die('Error :' .mysqli_error($con));
   		}
		$question = mysqli_query($con,"SELECT * FROM Question GROUP BY QuestionID");
		$i = 0;
		?>

	<form action = "showScore.php" method = "post"><?php
		
	echo "<br> <table class='table table-inverse' border='1' align='center' width='1000'>";
    echo "<tr class='bg-primary' align='center' bgcolor='#CCCCCC'><td>Question</td><td>A</td><td>B</td><td>C</td><td>D</td></tr>";

    while($questionResult = mysqli_fetch_array($question))
   	{

   		echo"<tr >";?>
    	<?php
    	echo"<td class='bg-danger'>".$questionResult["Question"]."</td>";
    	$a = $questionResult["Choice1"];
    	$b = $questionResult["Choice2"];
    	$c = $questionResult["Choice3"];
    	$d = $questionResult["Choice4"];
    	$e = $questionResult["Answer"];
    	$f = $questionResult["QuestionID"];
   		
    	 ?>
    	<td class='bg-info'><input type = "radio" id = "choice1" name = <?php echo "question-".$i."-answers";?> value = <?php echo $a; ?> required> <?php echo"".$a."</td>";?>
    	<td class='bg-danger'><input type = "radio" id = "choice2" name = <?php echo "question-".$i."-answers";?> value = <?php echo $b; ?> required> <?php echo"".$b."</td>";?>
    	<td class='bg-info'><input type = "radio" id = "choice3" name = <?php echo "question-".$i."-answers";?> value = <?php echo $c; ?> required> <?php echo"".$c."</td>";?>
    	<td class='bg-danger'><input type = "radio" id = "choice4" name = <?php echo "question-".$i."-answers";?> value = <?php echo $d; ?> required> <?php echo"".$d."</td>";
    	echo"</tr>";
    	$i += 1;
    }
    ?>
    <?php
    echo "</table>";
	?>
    		<div class="container">
			<div class="row">
				<br><br><br><br><br><br>
				<div class="col-sm-3">
				</div>
	  			<div class="col-sm-6">
	  				<button type = "submit" class="btn btn-lg btn-danger btn-block" value = "Submit">SUBMIT </button>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
    </form>
    
	</body>
</html>
