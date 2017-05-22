<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>LOGIN</title>
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
		  <form action="loginaction.php" method = "post"> 
			<div style="width: 30%; margin: auto;">
				<div class="form-group">

					<section class="box">
					<label class="control-label">Username : </label>
					<input type="text" class="form-control" name="Username" id= "Username" required>
				    </section>
				</div>
				<div class="form-group">
					<section class="box">
					<label>Password : </label>
					<input type="password" class="form-control"   name="Password" id= "Password" required>
				</section>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Login</button>
					<a href="http://google.com"> or Forgot password</a>
					<p><p><label class="control-label"> or click here to </label>
						<a href="http://127.0.0.1/se/regisform.php">Create account</a>
				</div>

			
			</div>
		
		</form>
	</section>
</body>
<?php include "template/footer.php" ?>
</html>

