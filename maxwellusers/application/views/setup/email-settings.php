			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid pb-0">
					<div class="row">

						<div class="col-md-12">

							<!-- Page Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-head-box">
                                        <h3>Email Settings</h3>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Email Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->

							<div class="row">
								<?php $controller->settingsmenu(); ?>
								<div class="col-md-8 col-lg-9 settings-cont applymultiselect">
                                    <div class="card p-4">
										<form method="post" id="EmailSettingsForm">
											<div class="form-group">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="EmailType" id="EmailType" value="1" <?php if($EmailData[0]->EmailType == 1){ echo 'checked';} ?> >
													<label class="form-check-label" for="phpmail">PHP Mail</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="EmailType" id="EmailType" value="2"  <?php if($EmailData[0]->EmailType == 2){ echo 'checked';} ?> >
													<label class="form-check-label" for="smtpmail">SMTP</label>
												</div>
											</div>
											<h4 class="page-title">PHP Email Settings</h4>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Email From Address <span class="text-danger">*</span></label>
														<input class="form-control" type="email" name="EmailFromAddress" id="EmailFromAddress" value="<?php echo $EmailData[0]->EmailFromAddress ?>" >
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Emails From Name <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="EmailFromName" id="EmailFromName" value="<?php echo $EmailData[0]->EmailFromName ?>" >
													</div>
												</div>
											</div>
											<h4 class="page-title m-t-30">SMTP Email Settings</h4>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>SMTP HOST <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="SmtpHost" id="SmtpHost" value="<?php echo $EmailData[0]->SmtpHost ?>" >
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>SMTP USER <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="SmtpUser" id="SmtpUser" value="<?php echo $EmailData[0]->SmtpUser ?>" >
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>SMTP PASSWORD <span class="text-danger">*</span></label>
														<input class="form-control" type="password" name="SmtpPassword" id="SmtpPassword" value="<?php echo $EmailData[0]->SmtpPassword ?>" >
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>SMTP PORT <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="SmtpPort" id="SmtpPort" value="<?php echo $EmailData[0]->SmtpPort ?>" >
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>SMTP Security <span class="text-danger">*</span></label>
														<select class="select" name="SmtpSecurity" id="SmtpSecurity">
															<option value="SSL" <?php if($EmailData[0]->SmtpSecurity == "SSL"){ echo 'selected'; } ?>>SSL</option>
															<option value="TLS" <?php if($EmailData[0]->SmtpSecurity == "TLS"){ echo 'selected'; } ?>>TLS</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>SMTP Authentication Domain <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="SmtpAuthenticationDomain" id="SmtpAuthenticationDomain" value="<?php echo $EmailData[0]->SmtpAuthenticationDomain ?>" >
													</div>
												</div>
											</div>
											<div class="submit-section">
												<h3 id="response"></h3>
												<input type="hidden" name="SmtpID" id="SmtpID" value="<?php echo $EmailData[0]->SmtpID ?>">
												<button class="btn btn-primary submit-btn" type="button" onclick="processFormData('EmailSettingsForm','saveEmailSettings')">Save &amp; update</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
						
					</div>
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->