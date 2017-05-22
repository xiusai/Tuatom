<!doctype html>
<html>
	<head>
		<script type = "text/javascript">
			function btnclick(){
				window.location.href='gameUI.php'
			}

		function getRadioValue(groupName) {
		var ans = document.getElementById('c').value;
		var answer;	
			if (document.getElementById('choice1').checked) {
  				answer= document.getElementById('choice1').value;
			}
			else if (document.getElementById('choice2').checked) {
  				answer= document.getElementById('choice2').value;
			}
			else if (document.getElementById('choice3').checked) {
  				answer= document.getElementById('choice3').value;
			}	
			else if (document.getElementById('choice4').checked) {
  				answer= document.getElementById('choice4').value;
			}		
			document.getElementById('results').innerHTML = answer;	
		}
		</script>
	</head>
	<body>
		<?php
			$con = mysqli_connect("127.0.0.1","root","","tuatom2");
			mysqli_query($con, "SET NAMES UTF8");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

		if(!mysqli_query($con,"SELECT DISTINCT * FROM Question GROUP BY QuestionID ORDER BY RAND()"))
    	{
        	die('Error :' .mysqli_error($con));
   		}
		$question = mysqli_query($con,"SELECT * FROM Question GROUP BY QuestionID ORDER BY RAND()");

			 
			//$Ranswer = "SELECT DISTINCT C,QuestionId FROM Question GROUP BY QuestionID ORDER BY RAND()";
			//$answer1 = "SELECT DISTINCT Answer,QuestionId FROM Question GROUP BY QuestionID ORDER BY RAND()";
		//	$answer2 = "SELECT DISTINCT Answer,QuestionId FROM Question GROUP BY QuestionID ORDER BY RAND()";
			//$answer3 = "SELECT DISTINCT Answer,QuestionId FROM Question GROUP BY QuestionID ORDER BY RAND()";
		//	$answer4 = "SELECT DISTINCT Answer,QuestionId FROM Question GROUP BY QuestionID ORDER BY RAND()";

		 //   $showQuestion = mysqli_query($question,MYSQLI_ASSOC);
		   // $showAns = mysqli_query($con,$Ranswer);
		  //  $choice1 = mysqli_query($con,$answer1);
		  //  $choice2 = mysqli_query($con,$answer2);
		  //  $choice3 = mysqli_query($con,$answer3);

		   // $Ans = mysqli_fetch_array($showAns,MYSQLI_ASSOC);
		    
		    /*	$value1 = $Ans['Choice1'];
    			$value2 = $Ans['Choice2'];
    			$value3 = $Ans['Choice3'];
    			$value4 = $Ans['Choice4'];*/

		  //  $choices1 = mysqli_fetch_array($choice1);
		  //  $choices2 = mysqli_fetch_array($choice2);
		  //  $choices3 = mysqli_fetch_array($choice3);


		echo "<table border='1' align='center' width='1000'>";

    echo "<tr align='center' bgcolor='#CCCCCC'><td>Question</td><td>choice1</td><td>choice2</td><td>choice3</td><td>choice4</td></tr>";
    for($i = 0; $i < 10; $i++)
    {
    while($questionResult = mysqli_fetch_array($question))
   	{
    	echo"<tr>";?>
    	<?php
    	echo"<td>".$questionResult["Question"]."</td>";
    	$a = $questionResult["Choice1"];
    	$b = $questionResult["Choice2"];
    	$c = $questionResult["Choice3"];
    	$d = $questionResult["Choice4"];
    	$e = $questionResult["Answer"];
    	$f = $questionResult["QuestionID"]
    	?>

    	<form action = "showScore.php" method = "post">
    	<td><input type = "radio" id = "choice1" name = "c" value = "$a"/> <?php echo"".$a."</td>";?>    	
    	<td><input type = "radio" id = "choice2" name = "c" value = "$b"/> <?php echo"".$b."</td>";?>
    	<td><input type = "radio" id = "choice3" name = "c" value = "$c"/> <?php echo"".$c."</td>";?>
    	<td><input type = "radio" id = "choice4" name = "c" value = "$d"/> <?php echo"".$d."</td>";
    	echo"</tr>";
    	break;
    }
    ?>
   		<input type = "button" id = "mybutton" onclick = "btnclick()" value = "Next"/><?php
        break; 
	}
   ?>
        <input type = "submit" id = "mybutton" value = "Submit"/>
    </form>



    
    <?php
    echo "</table>";
   
?>
	</body>
</html>
