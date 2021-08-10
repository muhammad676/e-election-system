<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['vote'])){
		if(count($_POST) == 1){
			$_SESSION['error'][] = 'Please vote atleast one candidate';
		}
		else{
			$_SESSION['post'] = $_POST;
			
			

			$sql = "SELECT * FROM poling_stations WHERE constituency_name = '".$voter['constituency_name']."'";
			$query = $conn->query($sql);
			$error = false;
			$sql_array = array();

			

			while($row = $query->fetch_assoc()){
				$position = slugify($row['constituency_no']);
				$pos_id = $row['id'];
				if(isset($_POST[$position])){
					if($row['max_vote'] > 1){
						if(count($_POST[$position]) > $row['max_vote']){
							$error = true;
							$_SESSION['error'][] = 'You can only choose '.$row['max_vote'].' candidate for '.$row['constituency_no'];
						}
						else{
							foreach($_POST[$position] as $key => $values){
								$chk_candi = "SELECT * FROM candidate_list WHERE id='".$values."'";
								$cquery = $conn->query($chk_candi);
								$candi_row = $cquery->fetch_assoc();
								$sql_array[] = "INSERT INTO list_votes (voters_id, candidate_id, constituency_no, party_name, platform, province) VALUES ('".$voter['id']."', '$values', '".$candi_row['constituency_no']."', '".$candi_row['party_name']."', '".$candi_row['platform']."', '".$candi_row['province']."')";
							}

						}
						
					}
					else{
						$candidate = $_POST[$position];
						$chk_candi = "SELECT * FROM candidate_list WHERE id='".$candidate."'";
						$cquery = $conn->query($chk_candi);
						$candi_row = $cquery->fetch_assoc();
						$sql_array[] = "INSERT INTO list_votes (voters_id, candidate_id,  constituency_no, party_name, platform, province) VALUES ('".$voter['id']."', '$candidate', '".$candi_row['constituency_no']."', '".$candi_row['party_name']."', '".$candi_row['platform']."', '".$candi_row['province']."')";
					}

				}
				
			}

			if(!$error){
				foreach($sql_array as $sql_row){
					$conn->query($sql_row);
				}

				unset($_SESSION['post']);
				$_SESSION['success'] = 'Ballot Submitted';

			}

		}

	}
	else{
		$_SESSION['error'][] = 'Select candidate to vote first';
	}

	header('location: voter_home.php');

?>