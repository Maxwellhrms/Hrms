	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Company <span class="text-danger">*</span></label>
				<select class="select" name="TaskCompany" id="TaskCompany">
					<?php foreach ($OriginationData as $keys => $val) { 
						if($val->OriginationID == $TaskData[0]->TaskCompany){ $sel = "selected";}else{ $sel=""; }
					?>
					<option value="<?php echo $val->OriginationID ?>" <?php echo $sel; ?> ><?php echo $val->OriginationName ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>User <span class="text-danger">*</span></label>
				<select class="select" name="TaskUser" id="TaskUser">
					<?php foreach ($UsersData as $key => $vals) { 
						if($vals->UserID == $TaskData[0]->TaskUser){ $sels = "selected";}else{ $sels =""; }
					?>
					<option value="<?php echo $vals->UserID ?>" <?php echo $sels; ?> ><?php echo $vals->UserName ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Client Auditor <span class="text-danger">*</span></label>
				<select class="select" name="TaskAuditor" id="TaskAuditor">
					<?php foreach ($ClientAuditorData as $keya => $vala) { 
						if($vala->ClientAuditorID == $TaskData[0]->TaskAuditor){ $sela = "selected";}else{ $sela =""; }
					?>
					<option value="<?php echo $vala->ClientAuditorID ?>" <?php echo $sela; ?> ><?php echo $vala->ClientAuditorName ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Priority <span class="text-danger">*</span></label>
				<select class="select" name="TaskPriority" id="TaskPriority">
					<?php
					foreach ($priority as $pkey => $pval) { 
						if($pkey == $TaskData[0]->TaskPriority){ $selp = "selected";}else{ $selp =""; }
					?>
						<option value="<?php echo $pkey; ?>" <?php echo $selp; ?>><?php echo $pval; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Form Type</label>
				<input type="text" class="form-control" name="TaskFromType" id="TaskFromType" value="<?php echo $TaskData[0]->TaskFromType; ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Task Start Date <span class="text-danger">*</span></label>
				<input type="text" class="form-control datetimepicker" name="TaskStartDate" id="TaskStartDate" value="<?php if (!empty($TaskData[0]->TaskStartDate)) {
                echo date("d/m/Y", strtotime($TaskData[0]->TaskStartDate));} ?>">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Task End Date</label>
				<input type="text" class="form-control datetimepicker" name="TaskEndDate" id="TaskEndDate" value="<?php if (!empty($TaskData[0]->TaskEndDate)) {
                echo date("d/m/Y", strtotime($TaskData[0]->TaskEndDate));} ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Government Fee</label>
				<input type="text" class="form-control" name="TaskGovernmentFee" id="TaskGovernmentFee" value="<?php echo $TaskData[0]->TaskGovernmentFee; ?>">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Company Fee</label>
				<input type="text" class="form-control" name="TaskCompanyFee" id="TaskCompanyFee" value="<?php echo $TaskData[0]->TaskCompanyFee; ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Work Status <span class="text-danger">*</span></label>
				<select class="select" name="TaskWorkStatus" id="TaskWorkStatus" value="<?php echo $TaskData[0]->TaskWorkStatus; ?>">
					<?php
					foreach ($workstatus as $wkey => $wval) { 
						if($wkey == $TaskData[0]->TaskWorkStatus){ $selw = "selected";}else{ $selw =""; }
					?>
						<option value="<?php echo $wkey; ?>" <?php echo $selw; ?>><?php echo $wval; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>SRN</label>
				<input type="text" class="form-control" name="TaskSRN" id="TaskSRN" value="<?php echo $TaskData[0]->TaskSRN; ?>">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Date of Filing</label>
				<input type="text" class="form-control datetimepicker" name="TaskDateOfFiling" id="TaskDateOfFiling" value="<?php if (!empty($TaskData[0]->TaskDateOfFiling)) {
                echo date("d/m/Y", strtotime($TaskData[0]->TaskDateOfFiling));} ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Work Type <span class="text-danger">*</span></label>
				<textarea class="form-control" rows="4"  name="TaskWorkType" id="TaskWorkType"><?php echo $TaskData[0]->TaskWorkType; ?></textarea>
			</div>
<!-- 											<div class="form-group">
				<label>Upload Files</label>
				<input class="form-control" type="file"  name="" id="">
			</div> -->
			<div class="form-group">
				<h3 id="response"></h3>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<h3 id="response"></h3>
			</div>
		</div>
	</div>
	<div class="submit-section">
		
		<input type="hidden" name="TaskID" id="TaskID" value="<?php echo $TaskData[0]->TaskID ?>">
		<button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
		<button class="btn btn-primary submit-btn" type="button" onclick="processFormData('TaskForm','saveTasks')">Submit</button>
	</div>