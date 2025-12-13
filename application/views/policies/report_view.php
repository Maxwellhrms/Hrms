<style>
    .filter-box { background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #e9ecef; }
    .badge-completed { background-color: #d1e7dd; color: #0f5132; }
    .badge-pending { background-color: #fff3cd; color: #664d03; }
    .badge-not-started { background-color: #f8d7da; color: #842029; }
    .custom-badge { padding: 5px 10px; border-radius: 4px; font-size: 0.85em; font-weight: 600; }
    .view-policy-details { cursor: pointer; text-decoration: none; }
    .view-policy-details:hover { text-decoration: underline; }

    /* Style for DataTables Buttons and layout requested by user image */
    div.dt-buttons {
        display: inline-block; /* Aligns buttons next to the length control */
        margin-left: 10px;
    }
    .dataTables_filter {
        text-align: right; /* Ensures search is aligned right */
    }
</style>
<div class="page-wrapper" style="min-height: 358px;">
    <div class="content container-fluid mt-4">
        <div class="page-header">

            <h2>Employee Policy Acknowledgment Report</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="filter-box">
        <div class="row align-items-center">
            <div class="col-md-3">
                <strong>Filter by Status:</strong>
            </div>
            <div class="col-md-4">
                <select id="statusFilter" class="form-select form-control select2">
                    <option value="">Show All</option>
                    <option value="Completed">Fully Acknowledged</option>
                    <option value="Pending">Pending / In Progress</option>
                    <option value="Not Started">Not Started</option>
                </select>
            </div>
        </div>
    </div>
            </div>
        </div>

    <table id="policyTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Employee</th>
            <th>Email</th>
            <th>Progress (Ack/Total)</th>
            <th>Last Ack. Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($report as $r): ?>
            <tr>
                <td>
                    <a href="#" class="view-policy-details"
                       data-emp-id="<?= $r->mxemp_emp_id ?>"
                       data-emp-name="<?= htmlspecialchars($r->mxemp_emp_fname . ' ' . $r->mxemp_emp_lname) ?>">
                        <strong><?= $r->mxemp_emp_fname . ' ' . $r->mxemp_emp_lname ?></strong>
                    </a>
                    <br>
                    <small class="text-muted">ID: <?= $r->mxemp_emp_id ?></small>
                </td>
                <td>
                    <?= $r->mxemp_emp_email_id ?><br>
                    <small><?= $r->mxemp_emp_phone_no ?></small>
                </td>
                <td>
                    <span class="me-2"><?= $r->ack_count ?> / <?= $r->total_policies ?></span>
                    <br>
                    <small class="text-muted"><?= $r->pending_count ?> pending</small>
                </td>
                <td>
                    <?php
                    if($r->last_ack_date) {
                        echo date('d M Y', strtotime($r->last_ack_date));
                        echo '<br><small>'.date('h:i A', strtotime($r->last_ack_date)).'</small>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $badgeClass = '';
                    switch($r->status_label){
                        case 'Completed': $badgeClass = 'badge-completed'; break;
                        case 'Pending':   $badgeClass = 'badge-pending'; break;
                        default:          $badgeClass = 'badge-not-started'; break;
                    }
                    ?>
                    <span class="custom-badge <?= $badgeClass ?>"><?= $r->status_label ?></span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<div class="modal fade" id="policyDetailModal" tabindex="-1" aria-labelledby="policyDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="policyDetailModalLabel">Policy Status for <span id="employeeName"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="loadingIndicator" style="text-align:center; padding: 20px; display:none;">
                    <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                    <p class="mt-2">Fetching Policy Details...</p>
                </div>

                <table class="table table-striped" id="policyBreakdownTable" style="display:none;">
                    <thead>
                    <tr>
                        <th>Policy Name</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody id="policyListBody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        // 1. Initialize DataTable with Buttons Configuration
        var table = $('#policyTable').DataTable({
            "order": [[ 2, "asc" ]],
            "pageLength": 25,
            "language": {
                "search": "Search Employee:"
            },
            // CUSTOM DOM CONFIGURATION to place buttons next to length control, and search to the right
            dom:
                "<'row'<'col-sm-12 col-md-6'lB><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

            // EXPORT BUTTONS CONFIGURATION
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    title: 'Policy Acknowledgment Report',
                    className: 'btn btn-default buttons-excel buttons-html5', // btn-sm for small buttons, me-1 for spacing
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    title: 'Policy Acknowledgment Report',
                    className: 'btn btn-default buttons-excel buttons-html5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    title: 'Policy Acknowledgment Report',
                    className: 'btn btn-default buttons-excel buttons-html5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ]
        });

        // 2. Custom Filter Logic
        $('#statusFilter').on('change', function(){
            var filterValue = $(this).val();
            table.column(4).search(filterValue).draw();
        });

        // 3. Handle click on employee name (Detail Modal - AJAX)
        $('#policyTable').on('click', '.view-policy-details', function(e) {
            e.preventDefault();

            const empId = $(this).data('emp-id');
            const empName = $(this).data('emp-name');

            // Setup Modal State
            $('#policyListBody').empty();
            $('#employeeName').text(empName);
            $('#policyBreakdownTable').hide();
            $('#loadingIndicator').show();

            const policyDetailModal = new bootstrap.Modal(document.getElementById('policyDetailModal'));
            policyDetailModal.show();

            // AJAX Call to Controller
            $.ajax({
                url: '<?= site_url('policyreport/get_user_policies_ajax') ?>',
                type: 'POST',
                data: { emp_id: empId },
                dataType: 'json',
                success: function(response) {
                    $('#loadingIndicator').hide();
                    if (response.success && response.policies) {
                        let html = '';
                        response.policies.forEach(policy => {
                            let iconClass = policy.status === 'Acknowledged' ? 'fa-check-circle text-success' : 'fa-times-circle text-danger';

                            html += `
                            <tr>
                                <td>${policy.policy_name}</td>
                                <td>
                                    <i class="fas ${iconClass} me-2"></i>
                                    <span class="${policy.status_class}">${policy.status}</span>
                                </td>
                            </tr>
                        `;
                        });
                        $('#policyListBody').html(html);
                        $('#policyBreakdownTable').show();
                    } else {
                        $('#policyListBody').html('<tr><td colspan="2" class="text-center text-muted">Error loading policy details or user has no data.</td></tr>');
                        $('#policyBreakdownTable').show();
                    }
                },
                error: function() {
                    $('#loadingIndicator').hide();
                    $('#policyListBody').html('<tr><td colspan="2" class="text-center text-danger">Network error. Could not connect to server.</td></tr>');
                    $('#policyBreakdownTable').show();
                }
            });
        });

    });
</script>