<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.gif">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/all.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
        <script type="text/javascript">
				window.baseurl = "<?php echo base_url() ?>";
				window.mentionsemails = '';
				window.headerdate = '<?php echo date("F j, Y"); ?> ';
				</script>
        <style>

.account-content {
    background-color: transparent !important;
}
.account-content {
    background-color: rgba(255, 255, 255, 0.5); /* white with 50% transparency */
}
.account-content {
    background-color: transparent !important;
}
.account-box {
    background: rgba(255, 255, 255, 0.2); /* White with 20% opacity */
    backdrop-filter: blur(8px); /* Glass effect */
    -webkit-backdrop-filter: blur(8px);
    border-radius: 10px;
    padding: 20px;
}

.account-box label {
    color: #fffaf1 !important;
    font-size: 16px;
    font-weight: normal;
    margin-bottom: 5px;
}
        </style>
    </head>
    <body class="account-page">
	<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
		<!-- Main Wrapper -->
        <div class="main-wrapper" style="position: absolute; z-index: 1000;">
			<div class="account-content">
				
				<div class="container">
					
					<div class="account-box">
						<div class="account-wrapper">
						<h3 class="account-title">
						<img src="<?php echo base_url() ?>assets/img/logopdf.png" width="180" height="60" alt="">
					</h3>
					
<h3 class="account-title" style="color: #3dbcc9 !important;font-family: times new roman;" >Maxwell Logistics Pvt. Ltd. </h3>
							<h3 style="color: #3dbcc9  !important;font-family: times new roman;" class="account-title">ESS Portal</h3>
							<!--<h3 style="color: blue !important;font-family: times new roman;" class="account-title">Login</h3>-->
							<!-- <p class="account-subtitle">Access to Your Portal</p> -->
							
							<!-- Account Form -->
							<form method="post">
								<div class="form-group">
									<label>User Type</label>
									<select class="form-control" type="text" name="client" id="client" readonly="true">
										
										<option value="3" class="optionsrd">Users</option>
										<option value="2" class="optionsrd">Auditor</option>
										<!--<option value="1">Admin</option>-->
									</select>
								</div>
								<div class="form-group">
									<label>EMP ID</label>
									<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your EMP ID">
								</div>
								<div class="form-group codedisplay" style="display: none;">
									<label>Code</label>
									<input class="form-control" type="text" name="code" id="code" placeholder="Enter Code">
								</div>
								<div class="form-group passdiv">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
<!-- 										<div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Forgot password?
											</a>
										</div> -->
									</div>
									<div class="position-relative">
										<input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password">
										<span class="fa fa-eye-slash" id="toggle-password"></span>
									</div>
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="button" id="submit">Login</button>
								</div>
								<div class="account-footer">
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/login.js"></script>
		
    </body>
</html>