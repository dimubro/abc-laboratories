<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/top_bar'); ?>
<style>
        .card2 {
            background-image: url("<?=base_url()?>assets/html/image/index.jpg");
            background-size: cover;
        }
    </style>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 my-5 g-4">
        <div class="col-lg-4 col-md-12">
          <div class="card card1 rounded-4 p-4">
            <div class="card-body p-0">
                <h4 class="card-title">Total Clients</h4>
                <h1 class="">100</h1>
                
                
              </div>
              <div class="d-flex justify-content-between align-items-center ">
                <?php if (!$this->session->patient): ?>
                <h4 class="card-text mb-0"><b>Create a Account</b></h4>
                
                <a href="<?=base_url()?>register" class="btn btn-light rounded-pill  px-5 py-4 btn-home">Register</a>
                <?php endif ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card2 rounded-4">
                <!-- <img src="assets/images/index.jpg" class="card-img rounded-4" alt="..."> -->
                <div class="card-img-overlay">
                  
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card rounded-4 bg-info-subtle p-4">
            <div class="card-body p-0">
                <h4 class="card-title"><b>Book your appoinment</b></h4>
                <p class="card-text mb-5">Timely care with Virtual consultation
                    typically being scheduled.</p>
                </div>
                <a href="<?=base_url()?>test-types" class="btn btn-light rounded-pill w-50 px-5 py-4 mt-5 btn-home">Start</a>
          </div>
        </div>
      
      </div>

</div>
<?php $this->load->view('inc/footer'); ?>