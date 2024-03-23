<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/top_bar'); ?>

<section class="services">

    <div class="container-fluid">
        <div class="row">   
            
    
            <div class="col-lg-12">
                <div class="container pt-5">
                    <div class="texts d-flex justify-content-between align-items-center mb-5">
                    	
                        <div class="title">
                        	
                            <h3 style="font-weight: bold;"><?=$obj->TestTitle?></h3>
                            <p>Select a test </p>

                        </div>
                       
                    </div>
                <div class="row">
                    <?php foreach ($records as $k => $val): ?>
                    	
                    
                    <div class="col-md-4 col-sm-3 mt-3">
                        <div class="card shadow-sm" >
                            <img src="<?=base_url()?>media/image/<?=$val->Image?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title"><?=$val->TestTitle?></h5>
                              <label>LKR <?=number_format($val->Price, 2)?></label>
                              <a href="<?=base_url()?>booking/<?=url_title($val->TestTitle)?>/<?=$val->TestId?>" style="width:100%" class="btn btn-primary btn-book btn-block mt-2 py-3">Select</a>
                            </div>
                          </div>
                    </div>
                    <?php endforeach ?>
                  </div> 
                </div>
            </div>
        </div>
    </div>

</section>
<?php $this->load->view('inc/footer'); ?>