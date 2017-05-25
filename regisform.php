<html>
	<head>
		 <title>CREATE ACCOUNT</title>
		<?php include "template/header.php" ?>
	</head>
  <style>
  .container{
text-align: center;
font-weight: bold;
color: white;


  }
    .page-header {
      padding-top: 20px;
    padding-bottom: 20px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
    text-align: center;
    color: white;
    font-weight: bold;
    
}

    .box {

                font-family: 'Lato', sans-serif;
 text-align: center;
    background-color: #EBF1F6;
    border: 10px solid  #EBF1F6 ;
    font-weight: bold;
}
  </style>
	<body background="assets/images/wall2.jpg">
	<script>
    function validate()
    {
        var a = document.getElementById("password").value;
        var b = document.getElementById("confirmpassword").value;

        if (a!=b) {
        alert("Passwords do no match");
        return false;
        }
    }
    </script>

    <div class="box">
    <h2>Registration Form</h2>
    </div>


	<div class="container">
    <p><p><p><p><p><p><p>
	<div class="row">
	<form class="form-horizontal" onSubmit="return validate();" action="regisaction.php" method="post">
	<fieldset>
				<!-- Username -->
				<div class="form-group row">
      			<label  class="col-sm-3 control-label">Username *</label>
      			<div class="col-sm-5">
        		<input type="text" name="Username" class="form-control" placeholder="Enter username" required>
      			</div>
    			</div>

    			<!-- Password input-->
				<div class="form-group row">
  				<label class="col-sm-3 control-label" for="Password">Password *</label>
  				<div class="col-md-5">
   				<input id="password" name="Password" type="password" placeholder="Enter password" class="form-control input-md" required="">
  				</div>
				</div>

				<!-- Password input-->
				<div class="form-group">
  				<label class="col-sm-3 control-label" for="confirmpassword">Comfirm Password *</label>
  				<div class="col-md-5">
    			<input id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm your password" class="form-control input-md" required="">
    			<!-- <span class="help-block">Type again your password</span> -->
  				</div>
				</div>

				<!-- Email -->
    			<div class="form-group row">
      			<label class="col-sm-3 control-label">Email *</label>
      			<div class="col-sm-5">
        		<input type="email" name="Email" class="form-control" placeholder="Enter your email here" required>
        		<!--<span class="help-block">xxxxxxxxx@xxxxx.xxx</span>-->
      			</div>
    			</div>


                  <!-- Credit card -->
          <div class="form-group">
        <label class="col-sm-3 control-label" for="CreditCard">Card Number</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="CreditCard" id="CreditCard" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry_month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiry_month" id="expiry_month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiry_year">
                <option>Year</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>

				<!-- Submit button -->
          <input type="submit" value="Submit" class ="btn btn-primary"><p>or<p>
        <a href="http://127.0.0.1/Tuatom/login.php">Click here to login  </a>
			

	</fieldset>
	</form>
	</div>
	</div>

		<?php include "template/footer.php" ?>
	</body>



</html>
