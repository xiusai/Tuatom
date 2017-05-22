<?php

	$con = mysqli_connect("127.0.0.1","root","","tuatom2");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to Database" .mysqli_connect_error();
	}


    echo $_POST['c'];
//    echo $_POST['answer2'];
  //  echo $_POST['answer3'];
    ?>
