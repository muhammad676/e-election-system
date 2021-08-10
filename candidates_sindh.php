<?php include 'includes/header.php'; ?>
<?php include 'includes/conn.php'; ?>
<body>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sindh Candidates List
      </h1>
      
    </section>
    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile No</th>
                  <th>NIC No</th>
                  <th>Party Name</th>
                  <th>Party Logo</th>
                  <th>Photo</th>
                  <th>Position</th>
                  <th>Candidate ID</th>
                  <th>Province</th>
                  <th>Platform</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, candidate_list.id AS canid FROM candidate_list  LEFT JOIN positions ON positions.id=candidate_list.position_id WHERE candidate_list.province = 'Sindh'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $photo = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/profile.jpg';
                      $party_logo = (!empty($row['party_logo'])) ? 'images/'.$row['party_logo'] : 'images/profile.jpg';
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['name']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['mobile_no']."</td>
                          <td>".$row['nic_no']."</td>
                          <td>".$row['party_name']."</td>
                          <td>
                            <img src='".$party_logo."' width='30px' height='30px'>
                          </td>
                          <td>
                            <img src='".$photo."' width='30px' height='30px'>
                            </td>
                          <td>".$row['description']."</td>
                          <td>".$row['candidate_id']."</td>
                          <td>".$row['province']."</td>
                          <td>".$row['platform']."</td>
                          
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
