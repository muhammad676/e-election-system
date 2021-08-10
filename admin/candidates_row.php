<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, candidate_list.id AS canid FROM candidate_list LEFT JOIN positions ON positions.id=candidate_list.position_id WHERE candidate_list.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>