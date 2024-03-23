<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/top_bar'); ?>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="<?=base_url()?>assets/html/image/login.jpg"
              alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
      <div class="col-sm-6 text-black">

        
        
        <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          
          	<div style="width: 500px">
            <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Your appointment has been successfully added!</h4>
            <?=$this->session->flashdata('notification')?>
            <table class="table">
    
    <tbody>
      <tr>
        <td>Appoinment No</td>
        <td><?=$obj->AppoinmentNo?></td>
        
      </tr>
      <tr>
        <td>Patient</td>
        <td><?=$this->session->patient->FullName?></td>
        
      </tr>
      <tr>
        <td>Test Category</td>
        <td><?=$type->TestTitle?></td>
        
      </tr>
      <tr>
        <td>Test</td>
        <td><?=$test->TestTitle?></td>
        
      </tr>
      <tr>
        <td>Room No</td>
        <td><?=$room->RoomNumber?></td>
        
      </tr>
      <tr>
        <td>Price</td>
        <td>LKR <?=number_format($obj->Price, 2);?></td>
        
      </tr>
      <tr>
        <td>Date</td>
        <td><?=$obj->AppoinmentDate?></td>
        
      </tr>
      <tr>
        <td>Time</td>
        <td><?=$obj->Time?></td>
        
      </tr>
      
    </tbody>
  </table>

            <a href="<?=base_url()?>" class="btn btn-info btn-lg btn-block w-100" type="submit">Go to Home</a>
      </div>
      
    </div>
  </div>
</section>
<?php $this->load->view('inc/footer'); ?>

<script type="text/javascript">
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
  });
</script>