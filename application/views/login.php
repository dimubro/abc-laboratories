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
          <span class="h1 fw-bold mb-0"><?=TITLE?></span>
        </div>
        
        <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <?php echo form_open('check-login');
                        ?>
          	<div style="width: 500px">
            <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h4>
            <?=$this->session->flashdata('notification')?>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">Email address</label>
              <input type="email" name="Email" required="" id="form2Example18" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example28">Password</label>
              <input type="password" name="Password" required="" id="form2Example28" class="form-control form-control-lg" />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block w-100" type="submit">Login</button>
            </div>

            <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot Password?</a></p> -->
            <p>Don't have an account? <a href="<?=base_url()?>register" class="">Sign Up</a></p>

          </div>

        </div>
        <?= form_close() ?> 
      </div>
      
    </div>
  </div>
</section>
<?php $this->load->view('inc/footer'); ?>