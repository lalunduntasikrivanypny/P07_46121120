<html lang="en">
    
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=ASET;?>/images/favicon-32x32.png" type="image/png">
	<!--plugins-->
	<link href="<?=ASET;?>/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="<?=ASET;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=ASET;?>/css/app.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

		<!--start page wrapper -->
		<div class="wrapper">

<!--start content-->
<main class="authentication-content">
	<div class="container-fluid">
		<div class="authentication-card">
			<form action="" id="form-login">
				<div class="card shadow rounded-0 overflow-hidden">
					<div class="row g-0">
						<div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
							<img src="<?= ASET; ?>/images/error/login-img.jpg" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6">
							<div class="card-body p-4 p-sm-5">
								<h5 class="card-title">Sign In</h5>
								<p class="card-text mb-5">See your growth and get consulting support!</p>
								<form class="form-body">
									<div class="d-grid">
										<a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">
												<img class="me-2" src="<?= ASET; ?>/images/icons/search.svg" width="16" alt="">
												<span>Sign in with Google</span>
											</span>
										</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH USERNAME</span>
										<hr>
									</div>
									<div class="row g-3">
										<div class="col-12">
											<label for="inputEmailAddress" class="form-label">Username</label>
											<div class="ms-auto position-relative">
												<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
												<input type="text" class="form-control radius-30 ps-5" id="us" placeholder="Username">
											</div>
										</div>
										<div class="col-12">
											<label for="inputChoosePassword" class="form-label">Enter Password</label>
											<div class="ms-auto position-relative">
												<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
												<input type="password" class="form-control radius-30 ps-5" id="ps" placeholder="Enter Password">
											</div>
										</div>
										<div class="col-6">
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
												<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
											</div>
										</div>
										<div class="col-6 text-end"> <a href="authentication-forgot-password.html">Forgot Password ?</a>
										</div>
										<div class="col-12">
											<div class="d-grid">
												<button type="submit" class="btn btn-primary radius-30">Sign In</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>

<!--end page main-->

		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<?php include("aplikasi/views/bagian/bagian_bawah.php");?>
	<!--end wrapper-->
	<!--start switcher-->
	<?php include("aplikasi/views/bagian/bagian_kanan.php");?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=ASET;?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=ASET;?>/js/jquery.min.js"></script>
	<script src="<?=ASET;?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=ASET;?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=ASET;?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="<?=ASET;?>/js/app.js"></script>


</body>

</html>

<!--script login -->
 
<script>
    $(document).ready(funcion() {
        $("#form-login").submit(function(proses) {
            proses.preventDefault();

            $.ajax({
                url: "<?= APLIKASI; ?>/home/proses_login";
                data:  {
                    usr: $("#us").val(),
                    psw: $("#ps").val()
                },
                method: "post"
                dataType: 'json',
                succes: function(info_user_dari_control) {
                    if_(info_user_dari_control == false) {
                    } else{
                        window.location = "<?= APLIKASI ;?>/home"
                    }
                }
            })
        })
    })
</script>