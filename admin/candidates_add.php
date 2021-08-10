<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile_no = $_POST['mobile_no'];
		$nic_no = $_POST['nic_no'];
		$party_name = $_POST['party_name'];
		$party_logo = $_FILES['party_logo']['name'];
		$filename = $_FILES['photo']['name'];
		$position = $_POST['position'];
		$constitution_name = $_POST['constitution_name'];
		$constituency_no = $_POST['constituency_no'];
		$province = $_POST['province'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		if(!empty($party_logo)){
			move_uploaded_file($_FILES['party_logo']['tmp_name'], '../images/'.$party_logo);	
		}
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$candidate = substr(str_shuffle($set), 0, 15);
		
		$platform = $constitution_name.",".$constituency_no;

		$sql = "INSERT INTO candidate_list (name, email, mobile_no, nic_no, party_name, party_logo, photo, position_id, candidate_id, constitution_name, constituency_no, province, platform, password)
		VALUES ('$name', '$email', '$mobile_no', '$nic_no', '$party_name','$party_logo', '$filename', '$position', '$candidate', '$constitution_name', '$constituency_no', '$province', '$platform', '$password')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>