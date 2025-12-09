<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-03 10:22:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-03'
AND `mxesi_affect_to` >= '2025-01-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-03 12:03:35 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 12:03:36 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 12:03:40 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and mx_attendance_emp_code = 'm0177'  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 12:03:41 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and mx_attendance_emp_code = 'm0177'  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 12:03:42 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and mx_attendance_emp_code = 'm0177'  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 12:03:42 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and mx_attendance_emp_code = 'm0177'  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 12:03:43 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name,mxd_name,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2025_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            INNER JOIN maxwell_division_master on mxd_id = mx_attendance_division_id
            WHERE mx_attendance_cmp_id = 1  and mx_attendance_emp_code = 'm0177'  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2025-01-03 13:17:56 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_11' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2025_11`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'MT0500'
ERROR - 2025-01-03 13:17:58 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_11' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2025_11`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'MT0500'
ERROR - 2025-01-03 13:18:04 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_11' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2025_11`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'mt0500'
ERROR - 2025-01-03 13:18:12 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_11' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2025_11`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'm0500'
ERROR - 2025-01-03 13:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-03'
AND `mxesi_affect_to` >= '2025-01-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-03 16:29:04 --> Query error: Column 'mxemp_leave_histroy_previous_bal' cannot be null - Invalid query: INSERT INTO `maxwell_emp_leave_detailed_history` (`mxemp_leave_history_comp_id`, `mxemp_leave_history_division_id`, `mxemp_leave_history_emp_id`, `mxemp_leave_history_leavetype`, `mxemp_leave_history_short_name`, `mxemp_leave_histroy_previous_bal`, `mxemp_leave_histroy_present_adding`, `mxemp_leave_history_crnt_bal`, `mxemp_leave_history_process_type`, `mxemp_leave_history_processdate`, `mxemp_leave_history_createdby`, `mxemp_leave_history_createdtime`, `mxemp_leave_history_created_ip`) VALUES ('1', '1', 'M1017', '13', 'LOP', NULL, '0.50', 0.5, 'manualRevert', '2024-12-27', 'M0978', '2025-01-03 16:29:04', '183.82.105.9')
