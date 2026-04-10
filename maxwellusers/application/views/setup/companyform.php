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
										<form method="post" id="OriginationForm">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Orgination Name <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="OriginationName" id="OriginationName" value="<?php echo $OriginationData[0]->OriginationName ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Contact Person <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="OriginationContactPerson" id="OriginationContactPerson" value="<?php echo $OriginationData[0]->OriginationContactPerson ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label>Address <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="OriginationAddress" id="OriginationAddress" value="<?php echo $OriginationData[0]->OriginationAddress ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Country <span class="text-danger">*</span></label>
														<select class="form-control select" name="OriginationCountry" id="OriginationCountry">
															<?php echo $controller->display_options("CountryMaster",$OriginationData[0]->OriginationCountry); ?>
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>City</label>
														<input class="form-control" type="text" name="OriginationCity" id="OriginationCity" value="<?php echo $OriginationData[0]->OriginationCity ?>">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-3">
													<div class="form-group">
														<label>Postal Code</label>
														<input class="form-control" type="text" name="OriginationPostalCode" id="OriginationPostalCode" value="<?php echo $OriginationData[0]->OriginationPostalCode ?>">
													</div>
												</div>
												<div class="col-sm-3 col-md-3 col-lg-3">
													<div class="form-group">
														<label>Status</label>
														<div class="form-group">
															<input type="checkbox" name="OriginationStatus" id="OriginationStatus" value="1" <?php if($OriginationData[0]->OriginationStatus == 1){ echo "Checked"; }else{ echo ""; } ?> >
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Email</label>
														<input class="form-control" type="email" name="OriginationEmail" id="OriginationEmail" value="<?php echo $OriginationData[0]->OriginationEmail ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Phone Number <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="OriginationPhone" id="OriginationPhone" value="<?php echo $OriginationData[0]->OriginationPhone ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Fax</label>
														<input class="form-control" type="text" name="OriginationFax" id="OriginationFax" value="<?php echo $OriginationData[0]->OriginationFax ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label>Website Url</label>
														<input class="form-control" type="text" name="OriginationWebSiteUrl" id="OriginationWebSiteUrl" value="<?php echo $OriginationData[0]->OriginationWebSiteUrl ?>">
													</div>
												</div>
											</div>
											<div class="submit-section">
												<h3 id="response"></h3>
												<input type="hidden" name="OriginationID" id="OriginationID" value="<?php echo $OriginationData[0]->OriginationID ?>">
												<button class="btn btn-primary submit-btn" type="button" onclick="processFormData('OriginationForm','saveorgination')">Save</button>
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