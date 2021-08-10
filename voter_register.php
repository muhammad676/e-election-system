<?php include 'includes/header.php'; session_start(); ?>


<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>E-Election System</b>
  	</div>
	  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign Up</p>

    	<form action="register.php" method="POST" enctype="multipart/form-data">
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="name" placeholder="Name" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="mobile_no" placeholder="Mobile No(For e.g: +92336XXXXXXX)" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="address" placeholder="Address" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength="13" class="form-control" name="nic_no" placeholder="Enter NIC No Without Dashes (-)" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="constituency_name" placeholder="Constituency Name" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="province_name" placeholder="Province Name" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
            	<input type="password" class="form-control" name="password" placeholder="Password" required>
            	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
          	</div>
		  	<div class="form-group has-feedback">
        		<input type="file" class="form-control" name="photo" placeholder="Photo" required>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="register_voter"><i class="fa fa-sign-in"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
		<br>
		<center>
		For Login <a href="voter_login.php">Click Here</a>
		</center>
		<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>

<footer>
</div>
</html>