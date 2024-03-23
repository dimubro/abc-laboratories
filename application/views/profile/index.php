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
                        <h3>Welcome, Ulindu Dimuth</h3>
                        <p>Welcome to your user dashboard. From here you can view your account details, services and manage your account as well.</p>
                    </div>
                <div class="row">
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