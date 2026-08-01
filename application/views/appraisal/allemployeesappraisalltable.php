<div class="table-responsive">
    <table class="table table-bordered table-striped mb-0" id="appraisalTable">
        <thead class="table-dark">
            <tr>
                <th style="width:50px;">#</th>
                <th>Employee Code</th>
                <th>Employee Name</th>
                <th>Department</th>
                <th>Month</th>
                <th>Employee</th>
                <th>Manager</th>
                <th>HOD</th>
                <th>HR</th>
                <th>Reviewer</th>
                <th>Current Stage</th>
            </tr>
        </thead>

        <tbody>

        <?php
        if(!empty($alldata))
        {
            $i=1;

            foreach($alldata as $row)
            {
        ?>

        <tr class="parent-row"
            data-employee="<?php echo $row['mxap_assign_employee_code'];?>"
            data-month="<?php echo $row['mxap_assign_year_month'];?>">

            <td class="text-center">
				<?php echo $i;?>
				<button
					type="button"
					class="btn btn-sm btn-outline-primary expandRow"
					data-employee="<?php echo $row['mxap_assign_employee_code'];?>"
					data-month="<?php echo $row['mxap_assign_year_month'];?>"
					data-category="<?php echo $userdata['quecategory'];?>">
					<i class="fa fa-plus"></i>
				</button>
			</td>

            <td>
                <?php echo $row['mxap_assign_employee_code'];?>
            </td>

            <td>
                <?php echo $row['mxemp_emp_fname'];?>
            </td>

            <td>
                <?php echo $row['department_name'];?>
            </td>

            <td>
                <?php echo date('M-Y',strtotime($row['mxap_assign_year_month'].'-01'));?>
            </td>

            <td>
                <span class="badge bg-<?php echo ($row['emp_status']=='COMPLETED')?'success':'warning';?>">
                    <?php echo $row['emp_progress'];?>
                </span>
            </td>

            <td>
                <span class="badge bg-<?php echo ($row['manager_status']=='COMPLETED')?'success':'warning';?>">
                    <?php echo $row['manager_progress'];?>
                </span>
            </td>

            <td>
                <span class="badge bg-<?php echo ($row['hod_status']=='COMPLETED')?'success':'warning';?>">
                    <?php echo $row['hod_progress'];?>
                </span>
            </td>

            <td>
                <span class="badge bg-<?php echo ($row['hr_status']=='COMPLETED')?'success':'warning';?>">
                    <?php echo $row['hr_progress'];?>
                </span>
            </td>

            <td>
                <span class="badge bg-<?php echo ($row['reviewer_status']=='COMPLETED')?'success':'warning';?>">
                    <?php echo $row['reviewer_progress'];?>
                </span>
            </td>

            <td>
                <span class="badge bg-info">
                    <?php echo $row['current_stage'];?>
                </span>
            </td>

        </tr>

        <?php
            $i++;
            }
        }
        else
        {
        ?>

        <tr>
            <td colspan="12" class="text-center">
                No Records Found
            </td>
        </tr>

        <?php } ?>

        </tbody>

    </table>
</div>