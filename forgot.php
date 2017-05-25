<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>FORGOT PASSWORD</title>
	<?php include "template/header.php" ?>
	<style type="text/css">
		section {
			margin-top: 10%;
		}


		.box {

                font-family: 'Lato', sans-serif;
    justify-content: center;
    background-color: #EBF1F6;
    border: 10px solid  #EBF1F6 ;
}
    .content{

        text-align: left;
    }

	</style>
</head>
<body background="assets/images/wall2.jpg">
	<header></header>
	<section class="container">
		<!--<form id="form_login" action="POST"> -->
		  <form action="PHPMailer/forgotaction.php" method = "post"> 
			<div style="width: 50%; margin: auto;">
				<div class="form-group">

					<section class="box">
					<label class="control-label">Your Email </label>
					<input type="email" class="form-control" name="Email" id= "Email" placeholder="Enter your Email here...." required>
			
				    </section>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Send</button>
					
				</div>

			
			</div>
		
		</form>
	</section>
</body>
<?php include "template/footer.php" ?>
</html>

