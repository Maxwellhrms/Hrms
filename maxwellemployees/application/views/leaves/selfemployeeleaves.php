<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/selfleaves.css"> 
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="row">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Employee Self Leaves</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Employee/employeedashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employee Self Leaves</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
        </div>

        <div class="dashboard-card">
            <div class="row no-gutters">
                <?php foreach($leavesummary as $leavekey => $leavevalue){
                    $color = array('blue-text','orange-text','green-text','purple-text','pink-text','teal-text','red-text');
                    $ring = array('blue-ring','orange-ring','green-ring','purple-ring','pink-ring','teal-ring','red-ring'); 
                ?>
                <div class="col-lg-2 col-md-6">
                    <div class="leave-box">                
                        <div class="leave-title explain-link <?php echo $color[$leavekey] ?>"><?php echo $leavevalue->leaveName; ?></div>
                        <div class="circle <?php echo $ring[$leavekey]; ?>">
                            <div class="circle-content">
                                <div class="circle-value <?php echo $color[$leavekey] ?>"><?php echo $leavevalue->CurrentBalance; ?>d</div>
                                <div class="circle-text <?php echo $color[$leavekey] ?>">AVAILABLE</div>
                            </div>
                        </div>
                        <ul class="leave-list">
                            <li><span>Available</span><span><?php echo $leavevalue->CurrentBalance; ?> D</span></li>
                            <li><span>Consumed</span><span><?php echo $leavevalue->Used; ?> D</span></li>
                            <li><span>Accrued so far</span><span><?php echo $leavevalue->Accrued; ?> D</span></li>
                            <li><span>Annual Quota</span><span><?php echo $leavevalue->Annual; ?> D</span></li>
                        </ul>
                       
                    </div>
                </div>
                <?php } ?>

                <!--
                <div class="col-lg-2 col-md-6">
                    <div class="leave-box">
                        <div class="leave-title">Casual Leave</div>
                        <div class="circle orange-ring">
                            <div class="circle-content">
                                <div class="circle-value orange-text">4.2d</div>
                                <div class="circle-text orange-text">AVAILABLE</div>
                            </div>
                        </div>
                        <ul class="leave-list">
                            <li><span>Available</span><span>4.5 D</span></li>
                            <li><span>Consumed</span><span>4.5 D</span></li>
                            <li><span>Accrued so far</span><span>08 D</span></li>
                            <li><span>Annual Quota</span><span>12 D</span></li>
                        </ul>
                        <a href="#" class="explain-link orange-text">EXPLAIN</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="leave-box">
                        <div class="leave-title">Sick Leave</div>
                        <div class="circle green-ring">
                            <div class="circle-content">
                                <div class="circle-value green-text"><i class="fa fa-infinity"></i></div>
                                <div class="circle-text green-text">AVAILABLE</div>
                            </div>
                        </div>
                        <ul class="leave-list">
                            <li><span>Available</span><span>4.5 D</span></li>
                            <li><span>Consumed</span><span>4.5 D</span></li>
                            <li><span>Accrued so far</span><span>08 D</span></li>
                            <li><span>Annual Quota</span><span>12 D</span></li>
                        </ul>
                        <a href="#" class="explain-link green-text">EXPLAIN</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="leave-box">
                        <div class="leave-title">Other Leaves</div>
                        <div class="circle purple-ring">
                            <div class="circle-content"></div>
                        </div>
                        <ul class="leave-list">
                            <li><span>Available</span><span>4.5 D</span></li>
                            <li><span>Consumed</span><span>4.5 D</span></li>
                            <li><span>Accrued so far</span><span>08 D</span></li>
                            <li><span>Annual Quota</span><span>12 D</span></li>
                        </ul>
                        <a href="#" class="explain-link purple-text">EXPLAIN</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="leave-box border-0">
                        <div class="action-title">Leave Actions</div>
                        <div class="action-links">
                            <a href="#">Request Compensatory Off</a>
                            <a href="#">Do something</a>
                        </div>
                        <div class="useful-title mt-4">Useful Links</div>
                        <a href="#" class="useful-link">
                            <i class="fa fa-file-alt"></i>
                            Leave Policy Document
                        </a>
                        <a href="#" class="useful-link">
                            <i class="fa fa-list"></i>
                            Leave History
                        </a>
                    </div>
                </div>
                -->

            </div>
        </div>

<!-- Search Filter -->
<?php 
$controller->commonFiltersForm(array(
    'fromdatefilter' => 'Y',
    'todatefilter' => 'Y',
    'customoption' => 'Y',
    'customvalue' => array('Ids' =>'1,2,3,4,11,12', 'Type'=>'LeaveType'),
    'leavestatus' => 'Y',
    'FormId' => 'employeesleaveshistory',
    'CallFunction' => 'employeesleaveshistoryList'
)); 
?>
<!-- Search Filter -->



