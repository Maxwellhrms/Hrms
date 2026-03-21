<!-- Search Filter -->
<?php $controller->commonFilters(array(
    'fromdatefilter' => 'Y',
    'todatefilter' => 'Y',
    'companyfilter' => 'Y',
    'divisionfilter' => 'Y',
    'statefilter' => 'Y',
    'branchfilter' => 'Y',
    'employeecodeFilter' => 'Y',
    'issynced' => 'Y',
    'FormId' => 'employeesslhistory',
    'CallFunction' => 'employeeesslhistory_list'
)); ?>
<!-- Search Filter -->
<hr>
<a class="btn btn-primary" href="https://maxwellhrms.in/cron/get_essl_attendance_cron" target="_blank">Get Essl Attendance</a>
<a class="btn btn-primary" href="https://maxwellhrms.in/cron/essl_attendance_cron" target="_blank">Update Attendance</a>
<hr>
<!-- /Page Content -->
</div>