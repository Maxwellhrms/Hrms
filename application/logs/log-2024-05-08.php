<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-08 00:04:58 --> 404 Page Not Found: Dev/.git
ERROR - 2024-05-08 01:59:36 --> 404 Page Not Found: Developer/.git
ERROR - 2024-05-08 03:59:35 --> 404 Page Not Found: Dotgit/config
ERROR - 2024-05-08 04:49:18 --> 404 Page Not Found: ReportServer/index
ERROR - 2024-05-08 06:04:50 --> 404 Page Not Found: Flock/.git
ERROR - 2024-05-08 08:10:00 --> 404 Page Not Found: Git/.git
ERROR - 2024-05-08 10:10:10 --> 404 Page Not Found: Env/index
ERROR - 2024-05-08 10:15:06 --> 404 Page Not Found: Live/.git
ERROR - 2024-05-08 10:31:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-05-08 10:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 10:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 12:17:34 --> 404 Page Not Found: M/.git
ERROR - 2024-05-08 12:25:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 12:30:20 --> Query error: Unknown column 'descr' in 'order clause' - Invalid query: SELECT *
FROM `maxwell_esi_reasons`
WHERE `mxesi_rsn_status` = '1'
ORDER BY `descr`
ERROR - 2024-05-08 12:30:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-05-08 12:30:21 --> Query error: Unknown column 'descr' in 'order clause' - Invalid query: SELECT *
FROM `maxwell_esi_reasons`
WHERE `mxesi_rsn_status` = '1'
ORDER BY `descr`
ERROR - 2024-05-08 12:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 12:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 12:33:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:33:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:33:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 12:33:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:53:33 --> Query error: Unknown column 'mxesi_rsn_code' in 'field list' - Invalid query:  select @serial_number:=@serial_number+1 as serial_number,mxemp_emp_esi_number as esi_no,concat(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxsal_total_days_from_attendance as no_of_days,mxsal_actual_gross as gross_wages,mxesi_rsn_code as reason,date_format(mxemp_emp_resignation_relieving_date, '%d/%m/%Y') as relieve_date from mxsal_m inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code inner join maxwell_division_master on mxd_id = mxemp_emp_division_code inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code inner join maxwell_state_master on mxst_id = mxemp_emp_state_code inner join (SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
                    -- Present History
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied,
                    -- End Present History
                    -- Casualleave History
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                    sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                    -- End Casualleave History
                    -- Sickleave History
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                    sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                    -- End Sickleave History
                    -- Earnedleave History
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                    sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                    -- End Earnedleave History
                    -- Meternityleave History
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                    sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
                    -- End Meternityleave History
                FROM maxwell_attendance_2023_12
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance on  EmployeeID = mxsal_emp_code where mxsal_status=1 and mxsal_year_month=202312 and mxsal_cmp_id = 1
ERROR - 2024-05-08 12:57:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:57:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:57:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 12:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 12:57:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 13:22:45 --> Query error: Column 'mxsal_sundays_from_attendance' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_pt_id`, `mxsal_pt_no`, `mxsal_pt_status`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M00143', '202312', '1', '1', '1', '6', '3', '3', '36', '4', '22000', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9240, 12760, 0, '0.00', '0.00', '0.00', '0.00', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0', '11', '36340429969', 'YES', 0, 0, '0.00', '12', 0, '444.00', '770.00', '770.00', 5, '0.00', 31, 0, 0, 0, '0.00', 1984)
ERROR - 2024-05-08 13:22:50 --> Query error: Column 'mxsal_sundays_from_attendance' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_pt_id`, `mxsal_pt_no`, `mxsal_pt_status`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M00143', '202312', '1', '1', '1', '6', '3', '3', '36', '4', '22000', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9240, 12760, 0, '0.00', '0.00', '0.00', '0.00', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0', '11', '36340429969', 'YES', 0, 0, '0.00', '12', 0, '444.00', '770.00', '770.00', 5, '0.00', 31, 0, 0, 0, '0.00', 1984)
ERROR - 2024-05-08 13:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 13:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 13:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 13:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 13:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 13:23:05 --> Query error: Column 'mxsal_sundays_from_attendance' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_pt_id`, `mxsal_pt_no`, `mxsal_pt_status`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M00143', '202312', '1', '1', '1', '6', '3', '3', '36', '4', '22000', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9240, 12760, 0, '0.00', '0.00', '0.00', '0.00', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0', '11', '36340429969', 'YES', 0, 0, '0.00', '12', 0, '444.00', '770.00', '770.00', 5, '0.00', 31, 0, 0, 0, '0.00', 1984)
ERROR - 2024-05-08 13:26:45 --> Query error: Column 'mxsal_sundays_from_attendance' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_pt_id`, `mxsal_pt_no`, `mxsal_pt_status`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M00143', '202312', '1', '1', '1', '6', '3', '3', '36', '4', '22000', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9240, 12760, 0, '0.00', '0.00', '0.00', '0.00', 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0', '11', '36340429969', 'YES', 0, 0, '0.00', '12', 0, '444.00', '770.00', '770.00', 5, '0.00', 31, 0, 0, 0, '0.00', 1984)
ERROR - 2024-05-08 14:03:17 --> 404 Page Not Found: New/.git
ERROR - 2024-05-08 14:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 15:03:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-08 15:15:27 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:15:27 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:15:32 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:36:01 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:36:01 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 15:41:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:41:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:41:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:41:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 15:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 15:42:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:42:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:42:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 15:42:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:43:14 --> 404 Page Not Found: Old-cuburn/.git
ERROR - 2024-05-08 15:53:05 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:53:05 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:53:37 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:53:37 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-08 15:53:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:53:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 15:53:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:53:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 15:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 17:00:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 17:01:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-08'
AND `mxesi_affect_to` >= '2024-05-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-08 17:18:01 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:18:01 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:23:29 --> 404 Page Not Found: Prodgit/config
ERROR - 2024-05-08 17:26:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-05-08 17:34:13 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:34:16 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:34:16 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:34:18 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:34:18 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:34:21 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-08 17:34:22 --> 404 Page Not Found: Query/index
ERROR - 2024-05-08 17:34:26 --> 404 Page Not Found: Query/index
ERROR - 2024-05-08 17:34:27 --> 404 Page Not Found: Query/index
ERROR - 2024-05-08 17:34:28 --> 404 Page Not Found: Query/index
ERROR - 2024-05-08 17:34:29 --> 404 Page Not Found: Query/index
ERROR - 2024-05-08 17:34:30 --> 404 Page Not Found: Query/index
ERROR - 2024-05-08 17:34:31 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-08 17:34:32 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-08 17:34:33 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-08 17:34:34 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-08 17:34:36 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-08 17:34:36 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-08 18:54:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 18:54:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 18:54:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 18:54:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-08 18:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-08 18:55:23 --> 404 Page Not Found: Public/.git
ERROR - 2024-05-08 20:29:15 --> 404 Page Not Found: Qa/.git
ERROR - 2024-05-08 20:56:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-08 20:56:47 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-08 20:56:48 --> 404 Page Not Found: Forgot-passwordhtml/index
ERROR - 2024-05-08 20:56:49 --> 404 Page Not Found: Securitytxt/index
ERROR - 2024-05-08 20:56:50 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-08 20:56:51 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-08 20:56:52 --> 404 Page Not Found: Humanstxt/index
ERROR - 2024-05-08 22:00:57 --> 404 Page Not Found: Repos/.git
ERROR - 2024-05-08 22:22:22 --> 404 Page Not Found: Wp-includes/js
ERROR - 2024-05-08 22:53:24 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-05-08 23:24:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-08 23:24:07 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-08 23:24:09 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-08 23:48:31 --> 404 Page Not Found: Repository/.git
ERROR - 2024-05-08 23:51:21 --> 404 Page Not Found: Aaa9/index
ERROR - 2024-05-08 23:51:24 --> 404 Page Not Found: Aab8/index
