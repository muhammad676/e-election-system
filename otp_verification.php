<?php
    session_start();
    include 'includes/conn.php';
    if (isset($_POST["enter_otp_code"]))
    {
        $otp_code = $_POST['otp_code'];
        $sql = "SELECT * FROM voters WHERE otp_code = '$otp_code'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0)
        {   
            $row = $result->fetch_assoc();
            $voter_id=$row['id'];
            $sql = "UPDATE voters SET otp_code = \'\' WHERE voters_id = '$voter_id'";
            mysqli_query($conn, $sql);
            
            $_SESSION['voter'] = $row['id'];
            header("location: voter_home.php");
        }
        else
        {
            echo "Wrong pin";
        }
    }
?>

<?php include 'includes/header.php'; ?>



<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>OTP VERIFICATION</b>
  	</div>
	  
  	<div class="login-box-body">
    	<p class="login-box-msg">Enter OTP CODE Which Has Send To Your Number</p>

    	<form action="otp_verification.php" method="POST" enctype="multipart/form-data">
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="otp_code" placeholder="Enter 6 digit Code" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="enter_otp_code"><i class="fa fa-sign-in"></i> Submit</button>
        		</div>
      		</div>
    	</form>
		<br>
		<?php
			if(isset($_SESSION['errpr'])){
				echo "
					<div class='alert alert-success alert-dismissible'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<h4><i class='icon fa fa-check'></i> Success!</h4>
					".$_SESSION['error']."
					</div>
				";
				unset($_SESSION['success']);
			}
		?>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>

<footer>
</div>
</html>