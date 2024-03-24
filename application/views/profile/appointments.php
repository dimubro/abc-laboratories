<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/top_bar'); ?>
<section class="dashboard">

    <div class="container-fluid">
        <div class="row">   
            <div class="col-lg-2">
                
                <div class="sidebar w-10 border-end">
    
                    <?php $this->load->view('inc/side_bar'); ?>
    
                </div>
            </div>
    
            <div class="col-lg-10">
                <div class="container pt-5">
                    <div class="texts mb-5">
                        <h3>Appointments</h3>
                        
                    </div>
                <div class="row">
                	<div class="col-lg-12">
                		<table id="myTable" class="table table-style">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Appointment No</th>
      
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
      
      <td><center><?=$val->TestTitle?></center></td>
      <td><center><?=$val->AppoinmentDate?></center></td>
      <td><center><?=$val->Time?></center></td>
      <td><center><?=$val->RoomNumber?></center></td>
      <td><center><?php if($val->Status==1){
        echo 'Pending';
      }elseif($val->Status==2){
        echo 'Completed';
      } ?></center></td>
      <td>
      	<?php if ($val->Status==2): ?>
      		<a class="btn btn-info" target="_blank" download="" href="<?=base_url()?>media/reports/<?=$val->Report?>">Download</a>
      	<?php endif ?>
        </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
                	</div>
                    <!-- <div class="col-md-3">
                        <div class="box shadow p-3 mb-5 bg-body-tertiary rounded border-end border-primary border-5">
                            <h6 class="text-primary">EARNINGS (MONTHLY)</h6>
                            <div class="box-contents d-flex justify-content-between align-items-center">
                                <h2>$6,500</h2>
                                <i class="fa fa-calendar text-secondary text-opacity-75 fs-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box shadow p-3 mb-5 bg-body-tertiary rounded border-end border-warning border-5">
                            <h6 class="text-warning">ACCOUNT BALANCE</h6>
                            <div class="box-contents d-flex justify-content-between align-items-center">
                                <h2>$16,500</h2>
                                <i class="fa fa-dollar-sign text-secondary text-opacity-75 fs-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box shadow p-3 mb-5 bg-body-tertiary rounded border-end border-success border-5">
                            <h6 class="text-success">COMPLETED SERVICES</h6>
                            <div class="box-contents d-flex justify-content-between align-items-center">
                                <h2>56%</h2>
                                <i class="fa fa-check text-secondary text-opacity-75 fs-2"></i>
                            </div>
                        </div>
                    </div>              
                    <div class="col-md-3">
                        <div class="box shadow p-3 mb-5 bg-body-tertiary rounded border-end border-info border-5">
                            <h6 class="text-info">PENDING ORDERS</h6>
                            <div class="box-contents d-flex justify-content-between align-items-center">
                                <h2>6</h2>
                                <i class="fa fa-hourglass text-secondary text-opacity-75 fs-2"></i>
                            </div>
                        </div>
                    </div> -->
                  </div> 
                </div>
            </div>
        </div>
    </div>

</section>
<?php $this->load->view('inc/footer'); ?>