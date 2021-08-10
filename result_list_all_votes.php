<?php include 'includes/conn.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">

    <?php
        $sql = "SELECT * FROM voters";
        $query = $conn->query($sql);
        $sql_one = "SELECT * FROM list_votes GROUP BY voters_id";
        $query_one = $conn->query($sql_one);
        $sql_Sindh = "SELECT * FROM list_votes WHERE province='Sindh' GROUP BY voters_id";
        $query_Sindh = $conn->query($sql_Sindh);
        
        $sql_Punjab = "SELECT * FROM list_votes WHERE province='Punjab' GROUP BY voters_id";
        $query_Punjab = $conn->query($sql_Punjab);
        
        $sql_kpk = "SELECT * FROM list_votes WHERE province='kpk' GROUP BY voters_id";
        $query_kpk = $conn->query($sql_kpk);
        
        $sql_Balochistan = "SELECT * FROM list_votes WHERE province='Balochistan' GROUP BY voters_id";
        $query_Balochistan = $conn->query($sql_Balochistan);

        $sql_total_votes = "SELECT candidate_list.name AS Candidate_Name,candidate_list.photo AS candidate_photo,list_votes.party_name,list_votes.constituency_no,list_votes.platform,list_votes.province, COUNT(*) AS Total_votes
        FROM list_votes
        LEFT JOIN candidate_list ON candidate_list.id=list_votes.candidate_id
        GROUP BY Candidate_Name, list_votes.constituency_no,list_votes.party_name,list_votes.platform,list_votes.province,candidate_photo
        HAVING COUNT(*) > 0";
        $query_total_votes = $conn->query($sql_total_votes);
        
    ?>

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ELECTION RESULTS
      </h1>
      <h1 class="breadcrumb"><b style="font-size:20px;">TOTAL VOTERS : <?php echo $query->num_rows;?></b></h1>
      <!-- <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Votes</li>
      </ol> -->
    </section>
    
      <div class="row">
        <h1 class="breadcrumb">&nbsp;&nbsp;<b style="font-size:20px;">TOTAL NUMBER OF VOTES : <?php echo $query_one->num_rows;?></b></h1>
        <h1 class="breadcrumb">&nbsp;&nbsp;<b style="font-size:17px;">
        TOTAL NO OF SINDH VOTES : <?php echo $query_Sindh->num_rows;?> &nbsp;&nbsp;|| &nbsp;&nbsp;
        TOTAL NO OF PUNJAB VOTES : <?php echo $query_Punjab->num_rows;?> &nbsp;&nbsp;|| &nbsp;&nbsp;
        TOTAL NO OF KPK VOTES : <?php echo $query_kpk->num_rows;?> &nbsp;&nbsp;|| &nbsp;&nbsp;
        TOTAL NO OF BALOCHISTAN VOTES : <?php echo $query_Balochistan->num_rows;?></b></h1>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <h1>LIST OF TOTAL VOTES</h1>
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Photo</th>
                  <th>Candidate Name</th>
                  <th>Party Name</th>
                  <th>Constituency No</th>
                  <th>Platform</th>
                  <th>Province</th>
                  <th>Total Votes</th>
                </thead>
                <tbody>
                  <?php
                    while($row = $query_total_votes->fetch_assoc()){
                    $photo = (!empty($row['candidate_photo'])) ? 'images/'.$row['candidate_photo'] : 'images/profile.jpg';
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td><img src='".$photo."' width='50px' height='50px'></td>
                          <td>".$row['Candidate_Name']."</td>
                          <td>".$row['party_name']."</td>
                          <td>".$row['constituency_no']."</td>
                          <td>".$row['platform']."</td>
                          <td>".$row['province']."</td>
                          <td>".$row['Total_votes']."</td>
                        </tr>
                      ";
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
