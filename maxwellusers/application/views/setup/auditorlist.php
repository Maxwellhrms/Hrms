<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<!-- Page Content -->
    <div class="content container-fluid">

		<!-- Page Header -->
		<div class="row">
			<div class="col-md-12">
				<div class="page-head-box">
					<h3>Auditors</h3>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Auditorlist</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- /Page Header -->		

		<!-- Search Filter -->
		<?php $controller->commonFilters(array('orgfilter' => 'Y','audifilter' => 'Y', 'FormId' => 'audlist', 'CallFunction' => 'auditorlist')); ?>
		<!-- Search Filter -->

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive" id="display_datatables">
				</div>
			</div>
		</div>
    </div>
	<!-- /Page Content -->
</div>
<!-- /Page Wrapper -->