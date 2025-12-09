<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-01 02:40:56 --> 404 Page Not Found: Dashboard/index.html
ERROR - 2022-03-01 05:25:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 05:25:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 05:25:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 05:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 08:33:19 --> 404 Page Not Found: Dasboardindex/index
ERROR - 2022-03-01 14:31:12 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_03' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2022_03`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2022-03-01 09:01:17 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:01:17 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:01:17 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 09:01:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:01:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 09:01:27 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 09:02:02 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:02:02 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:02:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:15:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:15:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:15:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 09:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 12:03:45 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 12:03:45 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 12:03:45 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 12:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 12:41:01 --> 404 Page Not Found: Loan/mobileappliedloans
ERROR - 2022-03-01 12:41:17 --> 404 Page Not Found: Mobileappliedloans/index
ERROR - 2022-03-01 12:41:53 --> 404 Page Not Found: Loan_controller/index
ERROR - 2022-03-01 20:11:14 --> Query error: Operand should contain 1 column(s) - Invalid query: SELECT (mxemp_emp_fname, mxemp_emp_lname) as employeename, `mxcp_name`, `mxb_name`, `mxd_name`, `mxst_state`, `mx_loan_pri_id`, `mx_loan_id`, `mx_loan_empcode`, `mx_loan_comp_id`, `mx_loan_div_id`, `mx_loan_state_id`, `mx_loan_branch_id`, `mx_loan_emp_loan_type`, `mx_loan_tenure_months`, `mx_loan_amount_appliedby_employee`, `mx_loan_reasonfor_loan`, `mx_loan_attachement_employee`, `mx_loan_applied_date`, `mx_loan_approvedby`, `mx_loan_amt_approved`, `mx_loan_approved_date`, `mx_loan_status`, `mx_loan_createdby`, `mx_loan_createdtime`
FROM `maxwell_emp_loan_applied`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mx_loan_comp_id`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mx_loan_div_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mx_loan_branch_id`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mx_loan_state_id`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_loan_empcode`
ORDER BY `mx_loan_createdtime` DESC
ERROR - 2022-03-01 20:11:39 --> Severity: error --> Exception: syntax error, unexpected '',mxemp_emp_lname) as employee' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/maxwelllogistics/public_html/maxwellhrms/application/models/Loan_model.php 354
ERROR - 2022-03-01 15:54:04 --> 404 Page Not Found: Admin/assets
ERROR - 2022-03-01 15:55:59 --> 404 Page Not Found: Admin/assets
ERROR - 2022-03-01 18:46:02 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 18:46:02 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 18:46:02 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 18:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:07:21 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:07:22 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:07:22 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:13:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:13:39 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:14:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:14:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:14:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:26:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:26:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:26:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:27:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:27:04 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:27:07 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:27:50 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:27:50 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:27:50 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:28:11 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:28:12 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:28:12 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:28:54 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:28:54 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:28:56 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:29:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:29:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:30:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:30:13 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:13 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:15 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-01 19:30:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:27 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:44 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:44 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-01 19:30:44 --> 404 Page Not Found: Assets/css
