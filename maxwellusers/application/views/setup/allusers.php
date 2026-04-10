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
										<form method="post" id="UserForm">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>User Name <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="UserName" id="UserName" value="<?php echo $UsersData[0]->UserName ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Assign Company <span class="text-danger">*</span></label>
														<select class="select form-control" multiple name="UserCompanys[]" id="UserCompanys" onchange="handleMultiSelect(this)">
															<option value="all">All</option>
															<?php 
																if (strpos($UsersData[0]->UserCompanys, ',') !== false) {
																    $companyIDs = explode(',', $UsersData[0]->UserCompanys);
																} else {
																    $companyIDs = array($UsersData[0]->UserCompanys);
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
														<input class="form-control" type="text" name="UserAddress" id="UserAddress" value="<?php echo $UsersData[0]->UserAddress ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Country <span class="text-danger">*</span></label>
														<select class="form-control select" name="UserCountry" id="UserCountry" value="<?php echo $UsersData[0]->UserCountry ?>">
															<?php echo $controller->display_options("CountryMaster",$UsersData[0]->UserCountry); ?>
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>City</label>
														<input class="form-control" type="text" name="UserCity" id="UserCity" value="<?php echo $UsersData[0]->UserCity ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Postal Code</label>
														<input class="form-control" type="text" name="UserPostalCode" id="UserPostalCode" value="<?php echo $UsersData[0]->UserPostalCode ?>">
													</div>
												</div>
												<div class="col-sm-3 col-md-3 col-lg-3">
													<div class="form-group">
														<label>Status</label>
														<div class="form-group">
															<input type="checkbox" name="UserStatus" id="UserStatus" value="1" <?php if($UsersData[0]->UserStatus == 1){ echo "Checked"; }else{ echo ""; } ?> >
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Email <span class="text-danger">*</span></label>
														<input class="form-control" type="email" name="UserEmail" id="UserEmail" value="<?php echo $UsersData[0]->UserEmail ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Phone Number <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="UserPhone" id="UserPhone" value="<?php echo $UsersData[0]->UserPhone ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Mobile Number</label>
														<input class="form-control" type="text" name="UserMobile" id="UserMobile" value="<?php echo $UsersData[0]->UserMobile ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Fax</label>
														<input class="form-control" type="text" name="UserFax" id="UserFax" value="<?php echo $UsersData[0]->UserFax ?>">
													</div>
												</div>
											</div>
											<hr>
											<div class="row">
												<h4>Bank Information</h4>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Bank Account Number</label>
														<input class="form-control" type="text" name="UserBankAccountNo" id="UserBankAccountNo" value="<?php echo $UsersData[0]->UserBankAccountNo ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Bank Name</label>
														<input class="form-control" type="text" name="UserBankName" id="UserBankName" value="<?php echo $UsersData[0]->UserBankName ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Bank IFSC Code</label>
														<input class="form-control" type="text" name="UserBankIfscCode" id="UserBankIfscCode" value="<?php echo $UsersData[0]->UserBankIfscCode ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Bank Branch</label>
														<input class="form-control" type="text" name="UserBankBranch" id="UserBankBranch" value="<?php echo $UsersData[0]->UserBankBranch ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<h4>Login Information</h4>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Email</label>
														<span class="form-control"><?php echo $UsersData[0]->UserEmail ?></span>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Password</label>
														<input class="form-control" type="text" name="UserPassword" id="UserPassword" value="<?php echo $UsersData[0]->UserPassword ?>">
													</div>
												</div>
												<div class="col-sm-3 col-md-3 col-lg-3">
													<div class="form-group">
														<label>Status</label>
														<div class="form-group">
															<input type="checkbox" name="UserLoginStatus" id="UserLoginStatus" value="1" <?php if($UsersData[0]->UserLoginStatus == 1){ echo "Checked"; }else{ echo ""; } ?> >
														</div>
													</div>
												</div>
											</div>
											<div class="submit-section">
												<h3 id="response"></h3>
												<input type="hidden" name="UserID" id="UserID" value="<?php echo $UsersData[0]->UserID ?>">
												<button class="btn btn-primary submit-btn" type="button" onclick="processFormData('UserForm','saveallUsers')">Save</button>
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