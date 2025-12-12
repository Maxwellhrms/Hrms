<style>
    .filter-box { background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #e9ecef; }
    .badge-completed { background-color: #d1e7dd; color: #0f5132; }
    .badge-pending { background-color: #fff3cd; color: #664d03; }
    .badge-not-started { background-color: #f8d7da; color: #842029; }
    .custom-badge { padding: 5px 10px; border-radius: 4px; font-size: 0.85em; font-weight: 600; }
    .view-policy-details { cursor: pointer; text-decoration: none; }
    .view-policy-details:hover { text-decoration: underline; }
    .container { margin-left: 250px; margin-top: 180px !important;}
</style>
<div class="container mt-4">

    <h2>Employee Policy Acknowledgment Report</h2>

    <div class="filter-box">
        <div class="row align-items-center">
            <div class="col-md-3">
                <strong>Filter by Status:</strong>
            </div>
            <div class="col-md-4">
                <select id="statusFilter" class="form-select">
                    <option value="">Show All</option>
                    <option value="Completed">Fully Acknowledged</option>
                    <option value="Pending">Pending / In Progress</option>
                    <option value="Not Started">Not Started</option>
                </select>
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

<div class="modal fade" id="policyDetailModal" tabindex="-1" aria-labelledby="policyDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="policyDetailModalLabel">Policy Status for <span id="employeeName"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> X </button>
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

        // 1. Initialize DataTable
        var table = $('#policyTable').DataTable({
            "order": [[ 2, "asc" ]], // Default sort by Progress (Ack/Total)
            "pageLength": 25,
            "language": {
                "search": "Search Employee:"
            }
        });

        // 2. Custom Filter Logic
        $('#statusFilter').on('change', function(){
            var filterValue = $(this).val();

            // Column 4 is the Status column
            table.column(4).search(filterValue).draw();
        });

        // 3. Handle click on employee name (Detail Modal)
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
                url: '<?= site_url('admin/get_user_policies_ajax') ?>',
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
                        $('#policyBreakdownTable').show(); // Show the table after data is loaded
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

</body>
</html>