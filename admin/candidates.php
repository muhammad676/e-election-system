<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Candidates List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Candidates</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
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
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, candidate_list.id AS canid FROM candidate_list LEFT JOIN positions ON positions.id=candidate_list.position_id ORDER BY positions.priority ASC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $photo = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      $party_logo = (!empty($row['party_logo'])) ? '../images/'.$row['party_logo'] : '../images/profile.jpg';
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
                            <a href='#edit_party_logo' data-toggle='modal' class='pull-right party_logo' data-id='".$row['canid']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>
                            <img src='".$photo."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['canid']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>".$row['description']."</td>
                          <td>".$row['candidate_id']."</td>
                          <td>".$row['province']."</td>
                          <td><a href='#platform' data-toggle='modal' class='btn btn-info btn-sm btn-flat platform' data-id='".$row['canid']."'><i class='fa fa-search'></i> View</a></td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['canid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['canid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
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
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/candidates_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.party_logo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.platform', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'candidates_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.canid);
      $('#edit_name').val(response.name);
      $('#edit_email').val(response.email);
      $('#edit_mobile_no').val(response.mobile_no);
      $('#edit_nic_no').val(response.nic_no);
      $('#edit_party_name').val(response.party_name);
      $('#posselect').val(response.position_id).html(response.description);      
      $('#edit_constitution_name').val(response.constitution_name);
      $('#edit_constituency_no').val(response.constituency_no);
      $('#edit_province').val(response.province);
      $('.name').html(response.name);
      $('#desc').html(response.platform);
    }
  });
}
</script>
</body>
</html>
