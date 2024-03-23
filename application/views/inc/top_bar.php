<div class="header">
    
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mx-4 d-lg-none d-block" href="<?=base_url()?>"><h3><b><?=TITLE?></b></h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
            <a class="navbar-brand mx-4 d-lg-block d-none" href="<?=base_url()?>"><h3><b><?=TITLE?></b></h3></a>
            
            <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
                
                <div class="vr mx-1 d-lg-block d-none"></div>
                    <?php if ($this->session->patient): ?>
                        <li class="nav-item">
                        <div class="dropdown">
                            <div class="btn btn-border-secondary dropdown-toggle d-lg-p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                             <img class="img-profile rounded-circle" width="25px" src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="">
                             <?=$this->session->patient->FullName?>
                            </div>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="<?=base_url()?>profile">My Account</a></li>
                              <li><a class="dropdown-item text-danger" href="<?=base_url()?>log-out">Logout</a></li>
                              
                            </ul>
                          </div>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="dropdown-item " href="<?=base_url()?>login">Login</a>
                        </li>
                    <?php endif ?>
                     
            </ul>
            
            </div>
        </div>
    </nav>


</div>