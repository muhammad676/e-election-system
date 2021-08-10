<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
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
			$_SESSION['error'] = 'Already Registered!!!';
		}
		else{
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			//generate voters id
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$voter = substr(str_shuffle($set), 0, 15);

			$sql = "INSERT INTO voters (name,mobile_no,address,nic_no,constituency_name,province_name,voters_id,password,photo) VALUES ('$name', '$mobile_no', '$address', '$nic_no', '$constituency_name','$province_name','$voter','$password','$filename')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Voter added successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>