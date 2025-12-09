			<!-- Page Wrapper -->
            <div class="page-wrapper">
				
				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="row">
						<div class="col-md-12">
							<div class="page-head-box">
								<h3>Tasks</h3>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tasks</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<?php $controller->commonFilters(array('fromdate' => 'Y', 'todate' => 'Y', 'FormId' => 'Tasksfilters', 'CallFunction' => 'usertaskslist', 'AddButton' => 'Y' ,'AddButtonCallFunction' => 'usertasksform', 'AddButtonId' => 'add_ticket')); ?>
					<!-- Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive" id="display_datatables">
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Ticket Modal -->
				<div id="add_ticket" class="modal custom-modal fade applymultiselect" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create / Update Task</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<form id="TaskForm" method="POST" enctype='multipart/form-data'>
							<div class="modal-body" id="popup_display">

							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /Add Ticket Modal -->
				
				<!-- Delete Ticket Modal -->
				<div class="modal custom-modal fade" id="delete_ticket" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Ticket</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Ticket Modal -->
				
            </div>
			<!-- /Page Wrapper -->