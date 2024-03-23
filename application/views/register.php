<?php $this->load->view('inc/header'); ?>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="<?=base_url()?>assets/html/image/login.jpg"
              alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-stethoscope fa-2x me-3 pt-5 mt-xl-4" style="color: #CFF480;"></i>
          <span class="h1 fw-bold mb-0"><b><?=TITLE?></b></span>
        </div>
        
        <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <?php echo form_open('save-register');
                        ?>
          	<div style="width: 500px">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h3>
            <?=$this->session->flashdata('notification')?>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">Full Name</label>
              <input type="text" required="" name="form[FullName]" id="form2Example18" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">Email</label>
              <input type="email" required="" name="form[Email]" id="form2Example18" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">Phone (07122345698)</label>
              <input type="text"  maxlength="10" name="form[Phone]" required="" id="form2Example18" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">DOB</label>
              <!-- <input type="text"   required="" id="form2Example18" class="form-control form-control-lg" /> -->
              <input type="text" name="form[DOB]" class="form-control form-control-lg datepicker" data-date-format="mm/dd/yyyy">
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example28">Password</label>
              <input type="password" name="form[Password]" id="form2Example28" required="" class="form-control form-control-lg" />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block w-100" type="submit">Register</button>
            </div>

            <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot Password?</a></p> -->
            <p>Do have an account? <a href="<?=base_url()?>login" class="">Login</a></p>
            </div>
          <?= form_close() ?> 

        </div>

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