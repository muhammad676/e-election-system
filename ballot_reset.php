<?php
	include 'includes/session.php';
	

	if(isset($_POST['reset'])){
		$id = $voter['id'];
		$sql = "DELETE FROM list_votes WHERE voters_id = '$id'";
		if($conn->query($sql)){
			$res_inse = "UPDATE voters SET reset_vote = '1' WHERE id = '$id'";
			$conn->query($sql);
			if($conn->query($res_inse)){
				$_SESSION['success'] = 'Vote reset successfully';
				$sql="ALTER TABLE list_votes AUTO_INCREMENT=1";
				if($conn->query($sql)){
					
				}
			}
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
		
	header('location: voter_home.php');

?>