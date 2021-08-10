<!-- Description -->
<div class="modal fade" id="platform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Candidate</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                </div><div class="form-group">
                    <label for="mobile_no" class="col-sm-3 control-label">Mobile No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nic_no" class="col-sm-3 control-label">NIC NO</label>

                    <div class="col-sm-9">
                      <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength="13" class="form-control" id="nic_no" name="nic_no" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="party_name" class="col-sm-3 control-label">Party Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="party_name" name="party_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="party_logo" class="col-sm-3 control-label">Party Logo</label>

                    <div class="col-sm-9">
                      <input type="file" id="party_logo" name="party_logo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="position" name="position" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM positions";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="constitution_name" class="col-sm-3 control-label">Constitution Name</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="constitution_name" name="constitution_name" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM poling_stations";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['constituency_name']."'>".$row['constituency_name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="constituency_no" class="col-sm-3 control-label">Constituency No</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="constituency_no" name="constituency_no" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="province" class="col-sm-3 control-label">Province</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="province" name="province" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Candidate</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_name" name="name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="edit_email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_email" name="email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="edit_mobile_no" class="col-sm-3 control-label">Mobile No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_mobile_no" name="mobile_no" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_nic_no" class="col-sm-3 control-label">NIC NO</label>

                    <div class="col-sm-9">
                      <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength="13" class="form-control" id="edit_nic_no" name="nic_no" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="edit_party_name" class="col-sm-3 control-label">Party Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_party_name" name="party_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_position" name="position" required>
                        <option value="" selected id="posselect"></option>
                        <?php
                          $sql = "SELECT * FROM positions";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_constitution_name" class="col-sm-3 control-label">Constitution Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_constitution_name" name="constitution_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_constituency_no" class="col-sm-3 control-label">Constituency No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_constituency_no" name="constituency_no" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_province" class="col-sm-3 control-label">Province</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_province" name="province" required>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE CANDIDATE</p>
                    <h2 class="bold name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Party Logo -->
<div class="modal fade" id="edit_party_logo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_pary_logo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="party_logo" class="col-sm-3 control-label">Party Logo</label>

                    <div class="col-sm-9">
                      <input type="file" id="party_logo" name="party_logo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload_party_logo"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>



     