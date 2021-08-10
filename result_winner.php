<?php include 'includes/conn.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">

     <?php
         $sql = "SELECT * FROM poling_stations";
         $query = $conn->query($sql);
        
        

        // $sql_total_votes = "SELECT candidate_list.name AS Candidate_Name,candidate_list.photo AS candidate_photo,list_votes.party_name,list_votes.constituency_no,list_votes.platform,list_votes.province, COUNT(*) AS Total_votes
        // FROM list_votes
        // LEFT JOIN candidate_list ON candidate_list.id=list_votes.candidate_id
        // GROUP BY Candidate_Name, list_votes.constituency_no,list_votes.party_name,list_votes.platform,list_votes.province,candidate_photo
        // HAVING COUNT(*) > 0";
        // $query_total_votes = $conn->query($sql_total_votes);

        
    ?> 

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ELECTION WINNER RESULTS
      </h1>
      <h1 class="breadcrumb"><b style="font-size:20px;">TOTAL CONSTITUENCY NUMBER  : <?php echo $query->num_rows;?></b></h1>
      <!-- <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Votes</li>
      </ol> -->
    </section>
    
      <div class="row">
        
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <h1>WINNER CANDIDATES</h1>
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Candidate Photo</th>
                  <th>Candidate_Name</th>
                  <th>Party Name</th>
                  <th>Province</th>
                  <th>Constituency Number</th>
                  <th>Total Votes</th>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT list_votes.constituency_no AS Constituency_No,COUNT(*) AS Total_votes
                    FROM list_votes
                    LEFT JOIN candidate_list ON candidate_list.id=list_votes.candidate_id
                    GROUP BY Constituency_No";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $sql ="SELECT y.candidate_photo AS Candidate_Photo, y.Candidate_Name AS candidate_Name, y.partyName AS party_Name, y.candidateProvince AS candidate_Province, y.Constituency_No AS Constituency_NO,MAX(y.Total_votes) AS TotalVote
                      FROM(SELECT list_votes.province AS candidateProvince, list_votes.party_name AS partyName, candidate_list.name AS Candidate_Name,candidate_list.photo AS candidate_photo,list_votes.constituency_no AS Constituency_No,COUNT(*) AS Total_votes
                      FROM list_votes
                      LEFT JOIN candidate_list ON candidate_list.id=list_votes.candidate_id
                      GROUP BY Candidate_Name, Constituency_No,partyName,list_votes.platform,candidateProvince,candidate_photo
                      )y
                      WHERE y.Total_votes = (SELECT MAX(y.Total_votes) FROM(SELECT COUNT(*) AS Total_votes
                      FROM list_votes
                      WHERE Constituency_No = '".$row['Constituency_No']."'
                      GROUP BY list_votes.candidate_id
                      )y)
                      ";
                      $cquery = $conn->query($sql);
                      while($row = $cquery->fetch_assoc()){
                          $photo = (!empty($row['Candidate_Photo'])) ? 'images/'.$row['Candidate_Photo'] : 'images/profile.jpg';
                          echo "
                              <tr>
                                <td class='hidden'></td>
                                <td><img src='".$photo."' width='50px' height='50px'></td>
                                <td>".$row['candidate_Name']."</td>
                                <td>".$row['party_Name']."</td>
                                <td>".$row['candidate_Province']."</td>
                                <td>".$row['Constituency_NO']."</td>
                                <td>".$row['TotalVote']."</td>
                              </tr>
                            ";
                      }
                     }
                    
                    
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  
    <?php include 'includes/scripts.php'; ?>  

</body>
</html>
