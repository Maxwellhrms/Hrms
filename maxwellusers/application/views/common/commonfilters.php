<form method="post" id="<?php echo $selectedFilter['FormId']; ?>" class="applymultiselect" <?php if($selectedFilter['docupload'] == 'Y'){ ?> enctype="multipart/form-data" <?php } ?> >
<div class="row filter-row">
	<?php if($selectedFilter['formtype'] == 'Y'){ ?>
	<div class="col-sm-6 col-md-2">  
		<label class="focus-label">Form Type</label>
		<div class="form-group">
			<select class="form-control" name="formtype" id="formtype"><?php echo $controller->display_options("formtype"); ?></select>
		</div>
	</div>
	<?php } ?>
	<?php if($selectedFilter['fromdate'] == 'Y'){ ?>
    <div class="col-sm-6 col-md-2">
    	<label class="focus-label">From Date</label>
		<div class="form-group">
			<div class="cal-icon">
				<input class="form-control floating datetimepicker" type="text" name="formdate" id="formdate">
			</div>
		</div>
    </div>
	<?php } ?>
	<?php if($selectedFilter['todate'] == 'Y'){ ?>
    <div class="col-sm-6 col-md-2">  
    	<label class="focus-label">To Date</label>
		<div class="form-group">
			<div class="cal-icon">
				<input class="form-control floating datetimepicker" type="text" name="todate" id="todate">
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if($selectedFilter['orgfilter'] == 'Y'){ ?>
	<div class="col-sm-6 col-md-2">  
		<label class="focus-label">Orgination</label>
		<div class="form-group">
			<div class="cal-build">
				<select class="form-control" name="orgination" id="orgination"><?php echo $controller->display_options("Originations"); ?></select>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if($selectedFilter['audifilter'] == 'Y'){ ?>
	<div class="col-sm-6 col-md-2">  
		<label class="focus-label">Auditor</label>
		<div class="form-group">
			<select class="form-control" name="auditor" id="auditor"><?php echo $controller->display_options("Auditor"); ?></select>
		</div>
	</div>
	<?php } ?>
	<?php if($selectedFilter['usersfilter'] == 'Y'){ ?>
	<div class="col-sm-6 col-md-2">  
		<label class="focus-label">Users</label>
		<div class="form-group">
			<select class="form-control" name="user" id="user"><?php echo $controller->display_options("Users"); ?></select>
		</div>
	</div>
	<?php } ?>
	<?php if($selectedFilter['docupload'] == 'Y'){ ?>
	<div class="col-sm-6 col-md-3">  
		<label class="focus-label">Upload File</label>
		<div class="form-group">
			<input class="form-control" name="uploadFile" id="uploadFile" type="file">
		</div>
	</div>
	<?php } ?>
	<div class="col-12 col-sm-6 col-md-3">
		<label class="focus-label">&nbsp;</label>
		<a href="#" class="btn btn-success btn-search w-100" type="button" onclick="buildDynamicTable('<?php echo $selectedFilter['FormId']; ?>', '<?php echo $selectedFilter['CallFunction']; ?>','<?php echo $selectedFilter['displayrptlocation']; ?>')"><i class="fas fa-search me-2"></i> Search </a>
	</div>
	<?php if($selectedFilter['AddButton'] == 'Y'){ ?>
	<div class="col-sm-6 col-md-3">
		<div class="add-emp-section">
			<a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#<?php echo $selectedFilter['AddButtonId']; ?>"  onclick="openpopup('','<?php echo $selectedFilter['AddButtonCallFunction']; ?>','','1')"><i class="fas fa-plus"></i> Add Tasks</a>
		</div>
	</div> 
	<?php } ?>
</div>
</form>