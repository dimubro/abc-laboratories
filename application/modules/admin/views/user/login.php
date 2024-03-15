<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<meta charset="utf-8" />
	<title><?= title ?></title>
	<meta name="description" content="Login page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->


	<!--begin::Page Custom Styles(used by this page)-->
	<link href="<?= base_url() ?>assets/admin/css/pages/login/classic/login-5.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles-->

	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="<?= base_url() ?>assets/admin/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/admin/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/admin/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->

	<!--begin::Layout Themes(used by all pages)-->

	<link href="<?= base_url() ?>assets/admin/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/admin/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/admin/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/admin/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/html/favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/html/favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/html/favi/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url()?>assets/html/favi/site.webmanifest">
    <link rel="mask-icon" href="<?=base_url()?>assets/html/favi/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?=base_url()?>assets/html/favi/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?=base_url()?>assets/html/favi/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url('<?= base_url() ?>assets/admin/media/bg/bg-11.jpg');">
				<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center">
						<a href="#">
							<img style="width: 60%;" src="<?= base_url() ?>assets/html/images/tsalogo.jpg" alt="" />
						</a>
					</div>
					<!--end::Login Header-->

					<!--begin::Login Sign in form-->
					<div class="login-signin">
						<div class="mb-20">
							<!-- <h3 class="opacity-40 font-weight-normal">Welcome to Sinoguards</h3>
							<p class="opacity-40">Enter your details to logi<?= base_url() ?>assets/html/images/tsalogo.jpgn to your account:</p> -->
						</div>
						<div class="fv-plugins-message-container mb-5">
							<div class="fv-help-block"><?= $this->session->flashdata('notification') ?></div>
						</div>
						<form class="form" method="post" action="<?= base_url() ?>admin/login/check_login">
							<div class="form-group">
								<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" required="" placeholder="Username" name="form[username]" autocomplete="off" />
							</div>
							<div class="form-group">
								<input required="" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="form[Password]" />
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
								<button id="kt_login_signin_submit" name="btn_save" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
							</div>
						</form>
					</div>

					<!--end::Login Sign in form-->
					
				</div>

			</div>

		</div>

		<!--end::Login-->
	</div>

	<!--end::Main-->
</body>
<!--end::Body-->

</html>