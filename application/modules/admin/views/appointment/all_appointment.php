<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/top_bar'); ?>



<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('include/side_bar'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-0">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom page-title-div px-3">
                <h5 class="title_page">Dashboard > Appointment > All Appointment</h5>
            </div>
            <div class="row mx-3">
                <div class="col-md-12">
                   <?=$this->session->flashdata('notification')?>
                    <div class="card card_backgroud">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">All Appoinments</label>
                    
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <table id="myTable" class="table table-style">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Appointment No</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Test</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Room</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($records as $k => $val): ?>
    <tr>
      <td><center><?=$k+1?></center></td>
      <td><center><?=$val->AppoinmentNo?></center></td>
      <td><center><?=$val->FullName?><br><?=$val->PatientNo?></center></td>
      <td><center><?=$val->TestTitle?></center></td>
      <td><center><?=$val->AppoinmentDate?></center></td>
      <td><center><?=$val->Time?></center></td>
      <td><center><?=$val->RoomNumber?></center></td>
      <td><center><?php if($val->Status==1){
        echo 'Pending';
      }elseif($val->Status==2){
        echo 'Completed';
      } ?></center></td>
      <td><center><a class="btn btn-warning btn-sm" href="<?=base_url()?>admin/View-Appointment/<?=$val->RoomId?>"><i class="fa fa-eye"></i></a>
        </td>
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


