<?php
$cron_jobs = $cronslist;

$grouped_crons = [];

foreach ($cron_jobs as $cron) {
    $grouped_crons[$cron['cron_category']][] = $cron;
}

function explain_cron_timing($cron_time){

    switch($cron_time){

        case '0 * * * *':
            return 'Runs every hour at 0th minute.<br>
                    Example Timings: 01:00 AM, 02:00 AM, 03:00 AM, etc.';

        case '30 0,10,14 * * *':
            return 'Runs daily 3 times.<br>
                    Timings: 12:30 AM, 10:30 AM, and 02:30 PM.';

        case '0 0,5 * * *':
            return 'Runs daily 2 times.<br>
                    Timings: 12:00 AM and 05:00 AM.';

        case '0 19,20,22 * * *':
            return 'Runs daily during evening hours.<br>
                    Timings: 07:00 PM, 08:00 PM, and 10:00 PM.';

        case '45 9,10 * * *':
            return 'Runs daily before grace time validation.<br>
                    Timings: 09:45 AM and 10:45 AM.';

        case '0 0 * * *':
            return 'Runs once every day at midnight (12:00 AM).';

        case '0 0 1 * *':
            return 'Runs once every month on the 1st day at 12:00 AM.';

        default:
            return 'Cron schedule configured.';
    }
}
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Crons List</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Dashboard</a></li>
						<li class="breadcrumb-item active">Crons List Details</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

    <div class="container-fluid mt-4">

    <!-- SUMMARY -->

    <div class="row mb-4">

        <div class="col-md-3 mb-3">

            <div class="card border-primary">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Cron Jobs
                    </h6>

                    <h3>
                        <?php echo count($cron_jobs); ?>
                    </h3>

                </div>

            </div>

        </div>


        <div class="col-md-3 mb-3">

            <div class="card border-success">

                <div class="card-body">

                    <h6 class="text-muted">
                        Active Jobs
                    </h6>

                    <h3 class="text-success">

                        <?php
                        echo count(array_filter($cron_jobs,function($row){
                            return $row['cron_status'] == 'Active';
                        }));
                        ?>

                    </h3>

                </div>

            </div>

        </div>


        <div class="col-md-3 mb-3">

            <div class="card border-danger">

                <div class="card-body">

                    <h6 class="text-muted">
                        Inactive Jobs
                    </h6>

                    <h3 class="text-danger">

                        <?php
                        echo count(array_filter($cron_jobs,function($row){
                            return $row['cron_status'] == 'Inactive';
                        }));
                        ?>

                    </h3>

                </div>

            </div>

        </div>


        <div class="col-md-3 mb-3">

            <div class="card border-dark">

                <div class="card-body">

                    <h6 class="text-muted">
                        Categories
                    </h6>

                    <h3>
                        <?php echo count($grouped_crons); ?>
                    </h3>

                </div>

            </div>

        </div>

    </div>



    <!-- ACCORDION -->

    <div class="accordion" id="cronAccordion">

        <?php

        $i = 0;

        foreach($grouped_crons as $category => $jobs){

            $collapse_id = 'collapse_'.$i;

            if($category == 'Attendance'){
                $btn_class = 'btn-primary';
                $icon = 'fa-user-clock';
            }
            elseif($category == 'Leave'){
                $btn_class = 'btn-success';
                $icon = 'fa-calendar-alt';
            }
            elseif($category == 'Notification'){
                $btn_class = 'btn-warning';
                $icon = 'fa-bell';
            }
            elseif($category == 'Transfer'){
                $btn_class = 'btn-info';
                $icon = 'fa-exchange-alt';
            }
            elseif($category == 'Resignation'){
                $btn_class = 'btn-danger';
                $icon = 'fa-user-times';
            }
            else{
                $btn_class = 'btn-dark';
                $icon = 'fa-cogs';
            }
        ?>

        <div class="card mb-3">

            <div class="card-header p-0">

                <button class="btn <?php echo $btn_class; ?> btn-block text-left p-3"
                        type="button"
                        data-toggle="collapse"
                        data-target="#<?php echo $collapse_id; ?>">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <i class="fas <?php echo $icon; ?> mr-2"></i>

                            <?php echo $category; ?> Cron Jobs

                        </div>

                        <span class="badge badge-light">

                            <?php echo count($jobs); ?> Jobs

                        </span>

                    </div>

                </button>

            </div>


            <div id="<?php echo $collapse_id; ?>"
                 class="collapse <?php echo ($i == 0) ? 'show' : ''; ?>"
                 data-parent="#cronAccordion">

                <div class="card-body">

                    <div class="row">

                        <?php foreach($jobs as $cron){ ?>

                        <div class="col-md-6 mb-4">

                            <div class="card h-100 border">

                                <div class="card-body">

                                    <!-- TITLE -->

                                    <div class="d-flex justify-content-between align-items-center mb-3">

                                        <h5 class="mb-0">

                                            <?php echo $cron['cron_name']; ?>

                                        </h5>

                                        <?php if($cron['cron_status'] == 'Active'){ ?>

                                            <span class="badge badge-success">
                                                Active
                                            </span>

                                        <?php } else { ?>

                                            <span class="badge badge-danger">
                                                Inactive
                                            </span>

                                        <?php } ?>

                                    </div>



                                    <!-- DESCRIPTION -->

                                    <p class="text-muted">

                                        <?php echo $cron['cron_description']; ?>

                                    </p>



                                    <!-- TABLE -->

                                    <table class="table table-bordered table-sm">

                                        <tr>

                                            <th width="35%">
                                                Cron Timing
                                            </th>

                                            <td>

                                                <strong>
                                                    <?php echo $cron['cron_timing']; ?>
                                                </strong>

                                                <hr class="mt-2 mb-2">

                                                <small class="text-muted">

                                                    <?php
                                                    echo explain_cron_timing($cron['cron_timing']);
                                                    ?>

                                                </small>

                                            </td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Frequency
                                            </th>

                                            <td>

                                                <span class="badge badge-info">

                                                    <?php echo ucfirst($cron['cron_frequency']); ?>

                                                </span>

                                            </td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Cron URL
                                            </th>

                                            <td>

                                                <code>

                                                    <?php echo $cron['cron_url']; ?>

                                                </code>

                                            </td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Server Command
                                            </th>

                                            <td style="word-break: break-all;">

                                                <small>

                                                    <?php echo $cron['cron_server_url']; ?>

                                                </small>

                                            </td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Updated At
                                            </th>

                                            <td>

                                                <?php
                                                echo date(
                                                    'd-M-Y h:i A',
                                                    strtotime($cron['updated_at'])
                                                );
                                                ?>

                                            </td>

                                        </tr>

                                    </table>



                                    <!-- BUTTONS -->

                                    <div class="mt-3">

                                        <button class="btn <?php echo $btn_class; ?> btn-sm">

                                            <i class="fas fa-play"></i>

                                            Trigger Now

                                        </button>


                                        <button class="btn btn-outline-dark btn-sm">

                                            <i class="fas fa-history"></i>

                                            Logs

                                        </button>


                                        <button class="btn btn-outline-secondary btn-sm">

                                            <i class="fas fa-edit"></i>

                                            Edit

                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>

        <?php
        $i++;
        }
        ?>

    </div>

</div>

        

	
	</div>
	<!-- /Page Content -->

</div>
<!-- /Page Wrapper -->