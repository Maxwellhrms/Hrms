<table class="table table-striped custom-table mb-0 datatable" id="example">
	<thead>
		<tr class="headers">
			<th>#</th>
			<th>Date of Filing</th>
			<th>Company</th>
			<th>Purpose</th>
			<th>Form Type</th>
			<th>SRN</th>
			<th class="text-center">Status</th>
			<th>Priority</th>
			<th>Created Date</th>
			<th class="text-end">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($TasksList as $key => $val) { ?>
		<tr class="headers">
			<td><a href="<?php echo base_url() ?>usertasksview">1</a></td>
			<td><?php
			if (!empty($val->TaskDateOfFiling)) {
                echo date("d/m/Y", strtotime($val->TaskDateOfFiling));
            }
			?></td>
			<td><?php echo $controller->display_options('Originations',$val->TaskCompany,$display_name = '2') ?></td>
			<td><?php echo $val->TaskWorkType ?></td>
			<td><?php echo $val->TaskFromType ?></td>
			<td><?php echo $val->TaskSRN ?></td>
			<td class="text-center">
				<?php ?>
			</td>
			<td>
				<div class="dropdown action-label">
					<a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
						<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
						<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
					</div>
				</div>
			</td>
			<td><?php echo $val->CreatedDt ?></td>
			<!-- <td>64567</td> -->
			<td class="text-end ico-sec">
				<a href="#" data-bs-toggle="modal" data-bs-target="#add_ticket" onclick="openpopup('','usertasksform','<?php echo $val->TaskID ?>')"><i class="fas fa-pen"></i></a>
				<a href="#" data-bs-toggle="modal" data-bs-target="#delete_ticket"><i class="far fa-trash-alt"></i></a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>