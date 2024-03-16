<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/top_bar'); ?>



<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('include/side_bar'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-0">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom page-title-div px-3">
                <h5 class="title_page">Dashboard > User</h5>
            </div>
            <div class="row mx-3">
                <div class="col-md-12">
                   <?=$this->session->flashdata('notification')?>
                    <div class="card card_backgroud">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">User List</label>
                    <a href="<?=base_url()?>admin/Create-User" class="btn btn-primary">Add User</a>
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <table id="myTable" class="table table-style">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">User Type</th>
      <th scope="col">User Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($records as $k => $val): ?>
    <tr>
      <td><?=$k+1?></td>
      <td><?=$val->FirstName?> <?=$val->LastName?></td>
      <td><?php if($val->UserType==1){
        echo "Admin";
      }elseif($val->UserType==2){
        echo "Technician";
      }elseif($val->UserType==3){
        echo "Receptionist";
      } ?></td>
      <td><?=$val->UserName?></td>
      <td><a class="btn btn-warning btn-sm" href="<?=base_url()?>admin/Edit-User/<?=$val->UserId?>"><i class="fas fa-pen"></i></a>
        <button class="btn btn-danger btn-sm" onclick="delete_modal('<?= base_url() ?>admin/Delete-User/<?=$val->UserId?>');"><i class="fas fa-trash-alt"></i></button></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="card-footer">Footer</div> -->
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


