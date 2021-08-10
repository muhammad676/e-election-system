<!-- Preview -->
<div class="modal fade" id="preview_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Vote Preview</h4>
            </div>
            <div class="modal-body">
              <div id="preview_body"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Platform -->
<div class="modal fade" id="platform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="candidate"></b></h4>
            </div>
            <div class="modal-body">
              <p id="plat_view"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Ballot -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Your Vote</h4>
            </div>
            <div class="modal-body">
              <?php
                $id = $voter['id'];
                $sql = "SELECT *, candidate_list.name AS canName , candidate_list.party_name AS canParty, candidate_list.province AS canProvince FROM list_votes LEFT JOIN candidate_list ON candidate_list.id=list_votes.candidate_id WHERE voters_id = '$id' ";
                $query = $conn->query($sql);
                while($row = $query->fetch_assoc()){
                  echo "
                    <div class='row votelist'>
                      <span class='col-sm-4'><span class='pull-right'><b> Candidate Name:</b></span></span>
                      <span class='col-sm-8'>".$row['canName']."</span><br>
                      <span class='col-sm-4'><span class='pull-right'><b> Party Name:</b></span></span> 
                      <span class='col-sm-8'>".$row['canParty']."</span><br>
                      <span class='col-sm-4'><span class='pull-right'><b>Constituency No:</b></span></span> 
                      <span class='col-sm-8'>".$row['constituency_no']."</span><br>
                      <span class='col-sm-4'><span class='pull-right'><b> Province:</b></span></span> 
                      <span class='col-sm-8'>".$row['canProvince']."</span><br>
                      <span class='col-sm-4'><span class='pull-right'><b> Platform:</b></span></span> 
                      <span class='col-sm-8'>".$row['platform']."</span><br>
                    </div>
                  ";
                }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reset">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Reset Vote</h4>
            </div>
            <div class="modal-body">
              Are You Sure You Want To Reset Your Vote???
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <form method="POST" action="ballot_reset.php">
                <button type="submit" class='btn btn-danger btn-sm delete btn-flat pull-right' name="reset"><i class="fa fa-refresh"></i> Reset</button>
              </form>  
            </div>
        </div>
    </div>
</div>
