<?php
	session_start();
	include 'includes/conn.php';
	

	require_once "plugins/twiloapi/vendor/autoload.php";
    use Twilio\Rest\Client;
 
    $sid = "ACe88cc2527e83ab9c47bb99aeaa3fac64";
    $token = "e6eef120c66b1e8e27d0354e7f203f96";

	if(isset($_POST['register_voter'])){
		$name = $_POST['name'];
		$mobile_no = $_POST['mobile_no'];
		$address = $_POST['address'];
		$nic_no = $_POST['nic_no'];
		$constituency_name = $_POST['constituency_name'];
		$province_name = $_POST['province_name'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		$dup = mysqli_query($conn,"SELECT * FROM voters WHERE nic_no ='$nic_no' OR mobile_no = '$mobile_no' ");
		if(mysqli_num_rows($dup)>0){
			header('location: voter_register.php');
			$_SESSION['error'] = 'Already Registered!!!';
		}
		else{
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			//generate voters id
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$voter = substr(str_shuffle($set), 0, 15);

			//genrate random number for OTP verification
			$otp_code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
			$sql = "INSERT INTO voters (name,mobile_no,address,nic_no,constituency_name,province_name,voters_id,password,photo,reset_vote,otp_code) VALUES ('$name', '$mobile_no', '$address', '$nic_no', '$constituency_name','$province_name','$voter','$password','$filename',0,'$otp_code')";
			if($conn->query($sql)){
				$sql = "SELECT * FROM voters WHERE voters_id = '$voter'";
				$query = $conn->query($sql);
				if($query->num_rows > 0){

					$row = mysqli_fetch_object($query);
					
					$client = new Client($sid, $token);
                    $client->messages->create(
                        $row->mobile_no, array(
                            "from" => "+14806668675",
                            "body" => "Hello ".$row->name."! Your OTP authentication code for registration is: ". $row->otp_code
                        )
                    );
					header('location: otp_verification.php');
					
					
					
					
					
				}
				
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
    
	
?>