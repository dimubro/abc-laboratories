<?php $this->load->view('include/header'); ?>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">

		<div class="login_form">
		<div><center><h2 class="login-heder-text">ABC Laboratories</h2></center></div>
		<div><div class="fv-help-block font-login-color"><?= $this->session->flashdata('notification') ?></div></div>
		<form class="form" method="post" action="<?= base_url() ?>admin/login/check_login">
							<div class="form-group mt-4">
								<input class="form-control h-auto text-black bg-white-o-5 rounded-pill border-0 py-3 px-6" type="text" required="" placeholder="Username" name="form[username]" autocomplete="off" />
							</div>
							<div class="form-group">
								<input required="" class="form-control h-auto text-black bg-white-o-5 rounded-pill border-0 py-3 px-6 " type="password" placeholder="Password" name="form[Password]" />
							</div>
							<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
								<!-- <div class="checkbox-inline">
									<label class="checkbox checkbox-outline checkbox-white text-white m-0">
										<input type="checkbox" name="remember" />
										<span></span>
										Remember me
									</label>
								</div> -->
								<!-- <a href="<?= base_url() ?>login/forget_password" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a> -->
							</div>
							<div class="form-group text-center mt-10">
								<button id="kt_login_signin_submit" name="btn_save" class="btn btn-pill btn-primary opacity-90 ">Sign In</button>
							</div>
						</form>
						</div>
	</div>
	<div class="col-md-4"></div>
	</div>
</div>
<?php $this->load->view('include/footer'); ?>