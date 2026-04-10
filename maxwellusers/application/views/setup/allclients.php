			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">

					<div class="row">
						<div class="col-md-12">

							<!-- Page Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-head-box">
                                        <h3>Approval Settings</h3>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>company">Settings</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Approval Settings</li>
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
										<form method="post" id="ClientAuditorForm">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Client Name <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="ClientAuditorName" id="ClientAuditorName" value="<?php echo $ClientAuditorData[0]->ClientAuditorName ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Assign Company <span class="text-danger">*</span></label>
														<select class="select form-control" multiple name="ClientAuditorCompanys[]" id="ClientAuditorCompanys">
															<?php 
																if (strpos($ClientAuditorData[0]->ClientAuditorCompanys, ',') !== false) {
																    $companyIDs = explode(',', $ClientAuditorData[0]->ClientAuditorCompanys);
																} else {
																    $companyIDs = array($ClientAuditorData[0]->ClientAuditorCompanys);
																}
															foreach ($OriginationData as $key => $value) { 
																if(in_array($value->OriginationID, $companyIDs)){ $sel = "selected";}else{ $sel=""; }
															?>
																<option value="<?php echo $value->OriginationID ?>" <?php echo $sel; ?> ><?php echo $value->OriginationName ?></option>
															<?php } ?>
                                                        </select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label>Address <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="ClientAuditorAddress" id="ClientAuditorAddress" value="<?php echo $ClientAuditorData[0]->ClientAuditorAddress ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Country <span class="text-danger">*</span></label>
														<select class="form-control select" name="ClientAuditorCountry" id="ClientAuditorCountry" value="<?php echo $ClientAuditorData[0]->ClientAuditorCountry ?>">
															<?php echo $controller->display_options("CountryMaster",$ClientAuditorData[0]->ClientAuditorCountry); ?>
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>City</label>
														<input class="form-control" type="text" name="ClientAuditorCity" id="ClientAuditorCity" value="<?php echo $ClientAuditorData[0]->ClientAuditorCity ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Postal Code</label>
														<input class="form-control" type="text" name="ClientAuditorPostalCode" id="ClientAuditorPostalCode" value="<?php echo $ClientAuditorData[0]->ClientAuditorPostalCode ?>">
													</div>
												</div>
												<div class="col-sm-3 col-md-3 col-lg-3">
													<div class="form-group">
														<label>Status</label>
														<div class="form-group">
															<input type="checkbox" name="ClientAuditorStatus" id="ClientAuditorStatus" value="1" <?php if($ClientAuditorData[0]->ClientAuditorStatus == 1){ echo "Checked"; }else{ echo ""; } ?> >
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Email <span class="text-danger">*</span></label>
														<input class="form-control" type="email" name="ClientAuditorEmail" id="ClientAuditorEmail" value="<?php echo $ClientAuditorData[0]->ClientAuditorEmail ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Phone Number <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="ClientAuditorPhone" id="ClientAuditorPhone" value="<?php echo $ClientAuditorData[0]->ClientAuditorPhone ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Mobile Number</label>
														<input class="form-control" type="text" name="ClientAuditorMobile" id="ClientAuditorMobile" value="<?php echo $ClientAuditorData[0]->ClientAuditorMobile ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Fax</label>
														<input class="form-control" type="text" name="ClientAuditorFax" id="ClientAuditorFax" value="<?php echo $ClientAuditorData[0]->ClientAuditorFax ?>">
													</div>
												</div>
											</div>
											<hr>
											<div class="row">
												<h4>Login Information</h4>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Email</label>
														<span class="form-control"><?php echo $ClientAuditorData[0]->ClientAuditorEmail ?></span>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Password</label>
														<input class="form-control" type="text" name="ClientAuditorPassword" id="ClientAuditorPassword" value="<?php echo $ClientAuditorData[0]->ClientAuditorPassword ?>">
													</div>
												</div>
												<div class="col-sm-3 col-md-3 col-lg-3">
													<div class="form-group">
														<label>Status</label>
														<div class="form-group">
															<input type="checkbox" name="ClientAuditorLoginStatus" id="ClientAuditorLoginStatus" value="1" <?php if($ClientAuditorData[0]->ClientAuditorLoginStatus == 1){ echo "Checked"; }else{ echo ""; } ?> >
														</div>
													</div>
												</div>
											</div>
											<div class="submit-section">
												<h3 id="response"></h3>
												<input type="hidden" name="ClientAuditorID" id="ClientAuditorID" value="<?php echo $ClientAuditorData[0]->ClientAuditorID ?>">
												<button class="btn btn-primary submit-btn" type="button" onclick="processFormData('ClientAuditorForm','saveclientAuditor')">Save</button>
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