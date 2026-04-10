			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid pb-0">
                    <div class="row">
                        <div class="col-md-12">                            

                            <!-- Page Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-head-box">
                                        <h3>Change Password</h3>
                                       <!-- <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                                            </ol>
                                        </nav>-->
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->

                            <div class="row">
                            	<?php //$controller->settingsmenu(); ?>
                                <div class="col-md-8 col-lg-9 settings-cont">
                                    <div class="card p-4">
										<form method="post" id="PasswordForm">
											<div class="form-group">
												<label>Old password</label>
												<input type="password" class="form-control" name="oldpassword" id="oldpassword">
											</div>
											<div class="form-group">
												<label>New password</label>
												<input type="password" class="form-control" name="newpassword" id="newpassword">
											</div>
											<div class="form-group">
												<label>Confirm password</label>
												<input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
											</div>
											<div class="submit-section">
                                                <h3 id="response"></h3>
												<button style=" background-color: #ffa434; " class="btn  submit-btn" type="button" onclick="processFormData('PasswordForm','UpdatePassword')">Update Password</button>
											</div>
										</form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Wrapper -->