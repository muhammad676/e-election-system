<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile_no = $_POST['mobile_no'];
		$nic_no = $_POST['nic_no'];
		$party_name = $_POST['party_name'];
		$position = $_POST['position'];
		$constitution_name = $_POST['constitution_name'];
		$constituency_no = $_POST['constituency_no'];
		$province = $_POST['province'];
		$platform = $constitution_name.",".$constituency_no;

		$sql = "UPDATE candidate_list SET name = '$name', email = '$email', mobile_no = '$mobile_no', nic_no = '$nic_no', party_name = '$party_name',position_id = '$position', constitution_name = '$constitution_name', constituency_no = '$constituency_no', province = '$province', platform = '$platform' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>