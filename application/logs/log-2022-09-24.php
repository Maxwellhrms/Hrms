<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-24 10:15:13 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 10:15:13 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 10:15:13 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 10:15:13 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 10:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 16:08:22 --> Query error: Column 'mxsal_sundays_from_attendance' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M0988', '202205', '1', '2', '2', '12', '15', '61', '36', '4', '21100', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 8862, 12238, 0, '0.00', '0.00', '0.00', '0.00', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0', 0, 0, '0.00', '12', 0, '426.00', 0, 0, 5, '0.00', 31, 0, 0, 0, '0.00', 426)
ERROR - 2022-09-24 17:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDE' at line 11 - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_date_of_join` > `IS` `NULL`
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-09-24 17:18:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDE' at line 11 - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_date_of_join` > `IS` `NULL`
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-09-24 11:51:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 11:51:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 11:51:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 11:51:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 11:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 17:29:56 --> Query error: Column 'mxsal_sundays_from_attendance' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M0390', '202205', '1', '1', '26', '8', '17', '77', '2', '4', '17450', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7329, 10121, 0, '0.00', '0.00', '0.00', '0.00', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, 0, 0, '0.00', '12', 0, '353.00', 0, 0, 5, '0.00', 31, 0, 0, 0, '0.00', 353)
ERROR - 2022-09-24 17:50:57 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_maxwell_attendance_2022_05' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`
FROM `maxwell_attendance_maxwell_attendance_2022_05`
WHERE `mx_attendance_emp_code` = 'M0038'
ERROR - 2022-09-24 12:36:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:36:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:36:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:36:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 12:39:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:39:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:39:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:39:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 12:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 13:08:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 13:08:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 13:08:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 13:08:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 13:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 16:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 16:18:53 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:18:53 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:18:53 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:18:54 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-24 16:19:04 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:19:04 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:19:04 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:19:06 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:22:14 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:22:14 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:22:14 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:22:14 --> 404 Page Not Found: Assets/js
ERROR - 2022-09-24 16:22:14 --> 404 Page Not Found: Assets/css
