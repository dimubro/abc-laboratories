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
            <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Booking</h4>
            <?=$this->session->flashdata('notification')?>
            <table class="table">
    
    <tbody>
      <tr>
        <td>Patient</td>
        <td><?=$this->session->patient->FullName?> - <?=$this->session->patient->PatientNo?></td>
        
      </tr>
      <tr>
        <td>Test Category</td>
        <td><?=$type->TestTitle?></td>
        
      </tr>
      <tr>
        <td>Test</td>
        <td><?=$obj->TestTitle?></td>
        
      </tr>
      <tr>
        <td>Room No</td>
        <td><?=$room->RoomNumber?></td>
        
      </tr>
      <tr>
        <td>Price</td>
        <td>LKR <?=number_format($obj->Price, 2);?></td>
        
      </tr>
      
    </tbody>
  </table>

            <?php 
                        $hidden = array('TestTypeId' => $obj->TestTypeId, 'TestId' =>$obj->TestId );
                        echo form_open('save-booking', '', $hidden);
                        ?>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28">Date</label>
              <input type="text" required="" name="form[AppoinmentDate]" class="form-control form-control datepicker" data-date-format="mm/dd/yyyy">
            </div>
            
            <div class="form-outline mb-4">
              <label class="form-label"  for="form2Example28">Time</label>
              <select required="" name="form[Time]" class="form-control" id="sel1">
                <option  value="">Select Time</option>
                <option value="08:00 AM-09:00 AM">08:00 AM-09:00 AM</option>
                <option value="09:00 AM-10:00 AM">09:00 AM-10:00 AM</option>
                <option value="10:00 AM-11:00 AM">10:00 AM-11:00 AM</option>
                <option value="11:00 AM-12:00 PM">11:00 AM-12:00 PM</option>
                <option value="12:00 PM-01:00 PM">12:00 PM-01:00 PM</option>
                <option value="01:00 PM-02:00 PM">01:00 PM-02:00 PM</option>
                <option value="02:00 PM-03:00 PM">02:00 PM-03:00 PM</option>
                <option value="03:00 PM-04:00 PM">03:00 PM-04:00 PM</option>
                <option value="04:00 PM-05:00 PM">04:00 PM-05:00 PM</option>
                <option value="05:00 PM-06:00 PM">05:00 PM-06:00 PM</option>
                <option value="06:00 PM-07:00 PM">06:00 PM-07:00 PM</option>
                <option value="07:00 PM-08:00 PM">07:00 PM-08:00 PM</option>
                <option value="08:00 PM-09:00 PM">08:00 PM-09:00 PM</option>
              </select>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block w-100" type="submit">Book Now</button>
            </div>

            <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot Password?</a></p> -->
            <!-- <p>Don't have an account? <a href="<?=base_url()?>register" class="">Sign Up</a></p> -->

          </div>

        </div>
        <?= form_close() ?> 
      </div>
      
    </div>
  </div>
</section>
<?php $this->load->view('inc/footer'); ?>

<script type="text/javascript">
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '+1d'
  });
</script>