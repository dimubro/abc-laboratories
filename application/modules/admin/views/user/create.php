<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/top_bar'); ?>



<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('include/side_bar'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-0">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom page-title-div px-3">
                <h5 class="title_page">Dashboard > User > <?=($obj->UserId)?"Edit":"Create"?> User</h5>
            </div>
            

            <div class="row mx-3">
                <div class="col-md-12">
                    <?=$this->session->flashdata('notification')?>
                    <div class="card card_backgroud">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">User Information</label>
                    <!-- <a href="<?=base_url()?>admin/Create-User" class="btn btn-primary">Add User</a> -->
                      </div>
                      <?php 
                        $hidden = array('UserId' => $obj->UserId);
                        echo form_open('admin/user/save_user', '', $hidden);
                        ?>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="usr">First Name:</label>
                                        <input type="text" required="" value="<?=$obj->FirstName?>" name="form[FirstName]" class="form-control" id="usr">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="usr">Last Name:</label>
                                        <input type="text" required="" value="<?=$obj->LastName?>" name="form[LastName]" class="form-control" id="usr">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                        <label for="sel1">User Type:</label>
                                        <select required="" name="form[UserType]" class="form-control" id="sel1">
                                          <option value="">Select User Type</option>
                                          <option <?=($obj->UserType==1)?"selected":""?> value="1">Admin</option>
                                          <option <?=($obj->UserType==2)?"selected":""?> value="2">Technician</option>
                                          <option <?=($obj->UserType==3)?"selected":""?> value="3">Receptionist</option>
                                        </select>
                                      </div> 
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">Email:</label>
                                        <input type="email" required="" value="<?=$obj->Email?>"  name="form[Email]" class="form-control" id="usr">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">User Name:</label>
                                        <input type="text" required="" value="<?=$obj->UserName?>"  name="form[UserName]" class="form-control" id="usr">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">Password:</label>
                                        <input type="password" required="" value="<?=$obj->PlanePassword?>" name="form[Password]" class="form-control" id="usr">
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn btn-primary">Save</button>
                      </div>
                      <?= form_close() ?> 
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php $this->load->view('include/page_footer'); ?>
<?php $this->load->view('include/footer'); ?>
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


