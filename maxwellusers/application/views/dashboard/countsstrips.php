<div class="row">
	<?php foreach ($stripdata as $key => $value) { ?>
	<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
		<div class="card flex-fill tickets-card">
			<div class="card-header">
				<div class="text-center w-100 p-3">
					<h3 class="bl-text mb-1"><?php echo $value['Count']; ?></h3>
					<h2><?php echo $value['Category']; ?></h2>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

<div class="row">
	<div class="col-md-12 col-lg-12 col-xl-3 d-flex">
		<div class="card user-card flex-fill">
			<div class="user-img-sec">
				<img src="<?php echo base_url() ?>assets/img/profiles/avatar-02.jpg" alt="User Image">
				<h4><?php echo $loggedprofile[0]['name']; ?></h4>
				<h5><?php echo $loggedprofile[0]['Type']; ?></h5>
			</div>
			<div class="card-body">
				<h4>Email <span><?php echo $loggedprofile[0]['email']; ?></span></h4>
				<h4>Mobile <span><?php echo $loggedprofile[0]['mobile']; ?></span></h4>
				<!-- <h4>Employee Number <span>645658</span></h4> -->
			</div>
		</div>
	</div>

	<div class="col-md-12 col-lg-8 col-xl-4 d-flex">
		<div class="card project-card flex-fill">
			<h4><i class="fas fa-cube"></i> Tasks<span class="float-right"> <span style="color: #8DAECC">&#8377;</span> Gov/Comp</span></h4>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="task-box color-one">
								<div class="task-media">
									<div class="task-icon">
										<img src="<?php echo base_url() ?>assets/img/icons/icon-01.png" alt="Icons">
									</div>
									<div class="task-info">
										<h5>Pending Tasks</h5>
										<h2><?php echo $taskstatus[0]['PendingCount']; ?></h2>
									</div>
								</div>
								
								<div class="task-redirect">
									&#8377; <?php echo $taskstatus[0]['PendingGovernmentFee']; ?> / <?php echo $taskstatus[0]['PendingCompanyFee']; ?>
								</div>
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<div class="task-box color-two">
								<div class="task-media">
									<div class="task-icon">
										<img src="<?php echo base_url() ?>assets/img/icons/icon-02.png" alt="Icons">
									</div>
									<div class="task-info">
										<h5>Completed Tasks</h5>
										<h2><?php echo $taskstatus[0]['ApprovedCount']; ?></h2>
									</div>
								</div>
								
								<div class="task-redirect">
									&#8377; <?php echo $taskstatus[0]['ApprovedGovernmentFee']; ?> / <?php echo $taskstatus[0]['ApprovedCompanyFee']; ?>							
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="task-box color-three">
								<div class="task-media">
									<div class="task-icon">
										<img src="<?php echo base_url() ?>assets/img/icons/icon-03.png" alt="Icons">
									</div>
									<div class="task-info">
										<h5>Total Tasks</h5>
										<h2><?php echo $taskstatus[0]['TotalTasks']; ?></h2>
									</div>
								</div>
								
								<div class="task-redirect">
									&#8377; <?php echo $taskstatus[0]['TotalGovernmentFee']; ?> / <?php echo $taskstatus[0]['TotalCompanyFee']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Details-->
<!-- <div class="row">
<div class="col-md-12 col-lg-12 col-xl-12 d-flex">
	<div class="card att-card flex-fill">
		<div class="card-header">
			<h3><i class="fas fa-calendar-alt"></i> In Bound / Out Bound Income</h3>

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
				  	<a class="nav-link active" id="Orgrpt-tab" data-bs-toggle="tab" href="#Orgrpt" role="tab" aria-controls="Orgrpt" aria-selected="true">Orginations List </a>
				</li>
				<li class="nav-item" role="presentation">
				  	<a class="nav-link" id="Audirpt-tab" data-bs-toggle="tab" href="#Audirpt" role="tab" aria-controls="Audirpt" aria-selected="true">Auditor List </a>
				</li>
			</ul>
			  
		</div>
		
		<div class="card-body pt-0 pb-0 innercards" >
			<div class="tab-content p-0">
					
				<div class="tab-pane fade show active innercontent" id="Orgrpt" role="tabpanel" aria-labelledby="Orgrpt-tab">
					
				</div>
			</div>
		</div>
		<div class="card-body pt-0 pb-0 innercards">
			<div class="tab-pane fade innercontent" id="Audirpt" role="tabpanel" aria-labelledby="absent-tab">
			
			</div>
		</div>
	</div>
</div> -->
<!--Details-->

					<div class="row">
					    <!--attendance-->
						<div class="col-md-12 col-lg-12 col-xl-12 d-flex">
							<div class="card att-card flex-fill">
								<div class="card-header">
									<h3><i class="fas fa-calendar-alt"></i> In Bound / Out Bound Income</h3>

									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
										  	<a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Orgination's List</a>
										</li>
										<li class="nav-item" role="presentation">
										  	<a class="nav-link" id="absent-tab" data-bs-toggle="tab" href="#absent" role="tab" aria-controls="absent" aria-selected="true">Auditor's List</a>
										</li>
										<li class="nav-item" role="presentation">
										  	<a class="nav-link" id="od-tab" data-bs-toggle="tab" href="#od" role="tab" aria-controls="od" aria-selected="true">Users's List</a>
										</li>
										<li class="nav-item" role="presentation">
										  	<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Detailed List</a>
										</li>
									</ul>
									  
								</div>
								
								<div class="card-body pt-0 pb-0 innercards" >
									<div class="tab-content p-0" id="myTabContent">
										<div class="tab-pane fade show active innercontent" id="home" role="tabpanel" aria-labelledby="home-tab">
											<?php $controller->commonFilters(array('orgfilter' => 'Y', 'FormId' => 'Orgrptlist', 'CallFunction' => 'orginationsummary', 'displayrptlocation' => 'Orgrptlist')); ?>
											<div class="table-responsive" id="Orgrptlistdisplay_datatables">
											</div>
										</div>

										<div class="tab-pane fade innercontent" id="absent" role="tabpanel" aria-labelledby="absent-tab">
											<?php $controller->commonFilters(array('audifilter' => 'Y', 'FormId' => 'Audirptlist', 'CallFunction' => 'auditorsummary', 'displayrptlocation' => 'Audirptlist')); ?>
											<div class="table-responsive" id="Audirptlistdisplay_datatables">
											</div>
										</div>
										<div class="tab-pane fade innercontent" id="od" role="tabpanel" aria-labelledby="od-tab">
											<?php $controller->commonFilters(array('usersfilter' => 'Y', 'FormId' => 'Userrptlist', 'CallFunction' => 'usersummary', 'displayrptlocation' => 'Userrptlist')); ?>
											<div class="table-responsive" id="Userrptlistdisplay_datatables">
											</div>
										</div>
										<div class="tab-pane fade innercontent" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<?php $controller->commonFilters(array('orgfilter' => 'Y', 'audifilter' => 'Y', 'usersfilter' => 'Y', 'FormId' => 'detailedrptlist', 'CallFunction' => 'detailedorginationauditorusersummary', 'displayrptlocation' => 'detailedrptlist')); ?>
											<div class="table-responsive" id="detailedrptlistdisplay_datatables">
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<!--attendance-->
					</div>