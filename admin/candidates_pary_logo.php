<?php
	include 'includes/session.php';

	if(isset($_POST['upload_party_logo'])){
		$id = $_POST['id'];
		$filename = $_FILES['party_logo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['party_logo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE candidate_list SET party_logo = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Party Logo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select candidate to update party logo first';
	}

	header('location: candidates.php');
?>