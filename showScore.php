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
<?php

	$con = mysqli_connect("127.0.0.1","root","","tuatom");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to Database" .mysqli_connect_error();
	}

	if(!mysqli_query($con,"SELECT Answer, QuestionID FROM Question ORDER BY QuestionID"))
	{
		 	die('Error :' .mysqli_error($con));
		}
		$row = "";
	$ans = mysqli_query($con,"SELECT Answer FROM Question ORDER BY QuestionID");

	$i = 0;
	$totalCorrect = 0;
	$answer = "";
	$output = "";
	?>
	<?php
	while($i <= 6)
	{

		$row = mysqli_fetch_array($ans);

		if(isset($_POST["question-".$i."-answers"])) {
			if($_POST["question-".$i."-answers"] != '')
			{   

    			$answer[$i] = $_POST["question-".$i."-answers"];
    			//echo "Answer of Question NO.".$i."=".$answer[$i];
    			echo"<br>";
    		}
    	}

    	if ($answer[$i] == $row['Answer'])
    		{ 
    			$totalCorrect++; 
    		}	
    	else
    	{
    			$totalCorrect = $totalCorrect + 0;
    	}
    	$i++;
    	$output .= $i." ".$row['Answer']."<br>";
    	?>
<?php
    	     	 
	}
		$output .= "Score = ".$totalCorrect."/7 points";
?>
				<div class="container">
				<style> h2 {color: pink;}</style>
  				<h2>Solution</h2>

			  				<div class="panel panel-default">
    				<div class="panel-heading">Answer</div>
   						 <div class="panel-body"><?php echo $output;?></div>
  				</div>
			</div>
<?php
	mysqli_close($con);
	?>
	
  	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">YOUR SCORE</h4>
	        </div>
	        <div class="modal-body">
	          <p> <?php echo "<div id='results '> Score = $totalCorrect / 7 points</div>"; ?> </p>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    
	    </div>
	 </div>
	</div>

	<script type="text/javascript">
		$("#myModal").modal('show');
	</script>

	</body>
	</html>
