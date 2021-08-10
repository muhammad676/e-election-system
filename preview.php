<?php
	
	include 'includes/session.php';
	include 'includes/slugify.php';

	$output = array('error'=>false,'list'=>'');

	$sql = "SELECT * FROM poling_stations WHERE constituency_name = '".$voter['constituency_name']."'";
	$query = $conn->query($sql);

	while($row = $query->fetch_assoc()){
		$position = slugify($row['constituency_no']);
		$pos_id = $row['id'];
		if(isset($_POST[$position])){
			if($row['max_vote'] > 1){
				if(count($_POST[$position]) > $row['max_vote']){
					$output['error'] = true;
					$output['message'][] = '<li>You can only choose '.$row['max_vote'].' candidate for '.$row['constituency_no'].'</li>';
				}
				else{
					foreach($_POST[$position] as $key => $values){
						$sql = "SELECT * FROM candidate_list WHERE id = '$values'";
						$cmquery = $conn->query($sql);
						$cmrow = $cmquery->fetch_assoc();
						$output['list'] .= "
							<div class='row votelist'>
		                      	<span class='col-sm-4'><span class='pull-right'><b>".$row['constituency_no']." :</b></span></span> 
		                      	<span class='col-sm-8'>".$cmrow['name']."</span>
		                    </div>
						";
					}

				}
				
			}
			else{
				$candidate = $_POST[$position];
				$sql = "SELECT * FROM candidate_list WHERE id = '$candidate'";
				$csquery = $conn->query($sql);
				$csrow = $csquery->fetch_assoc();
				$output['list'] .= "
					<div class='row votelist'>
                      	<span class='col-sm-4'><span class='pull-right'><b>".$row['constituency_no']." :</b></span></span> 
                      	<span class='col-sm-8'>".$csrow['name']."</span>
                    </div>
				";
			}

		}
		
	}

	echo json_encode($output);


?>