<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-26 00:00:01 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_05' doesn't exist - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 3 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, (sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end)) as total_daytaken
FROM `maxwell_attendance_2025_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2025-05-26'
GROUP BY `EmployeeID`
ERROR - 2025-05-26 00:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_company_master' doesn't exist - Invalid query: SELECT `mxcp_firsthalf_time`, `mxcp_secondhalf_time`, `mxcp_logoff_time`, `mxcp_secondbreak_time`, `mxcp_secondbreak_endtime`, `mxcp_firsthalf_gracetime`, `mxcp_secondhalf_gracetime`
FROM `maxwell_company_master`
WHERE `mxcp_status` = 1
AND `mxcp_id` = 1
ERROR - 2025-05-26 00:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_05' doesn't exist - Invalid query: SELECT (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 1 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, (sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end)) as total_daytaken
FROM `maxwell_attendance_2025_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2025-05-26'
GROUP BY `EmployeeID`
ERROR - 2025-05-26 00:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_info' doesn't exist - Invalid query: SELECT (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 12 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, `mxemp_emp_id` as `EmployeeID`, `mxemp_leave_bal_leave_type_shrt_name` as `leavetypeSN`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_emp_leave_balance` ON `mxemp_emp_id` = `mxemp_leave_bal_emp_id`
WHERE `mxemp_emp_resignation_status` != 'R'
AND `mxemp_leave_bal_leave_type` = 12
GROUP BY `EmployeeID`
ERROR - 2025-05-26 00:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_info' doesn't exist - Invalid query: SELECT `mxemp_emp_id`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
WHERE `mxemp_emp_resignation_relieving_date` = '2025-05-25'
AND `mxemp_emp_resignation_status` = 'R'
ERROR - 2025-05-26 00:00:03 --> Query error: Table 'maxwellhrms_hr.maxwell_company_master' doesn't exist - Invalid query: SELECT `mxcp_id`, `mxcp_name`
FROM `maxwell_company_master`
WHERE `mxcp_status` = 1
ERROR - 2025-05-26 00:00:03 --> Query error: Table 'maxwellhrms_hr.maxwell_config' doesn't exist - Invalid query: SELECT `notification_months`
FROM `maxwell_config`
ERROR - 2025-05-26 00:00:03 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_05' doesn't exist - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 2 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, (sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end)) as total_daytaken
FROM `maxwell_attendance_2025_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2025-05-26'
GROUP BY `EmployeeID`
ERROR - 2025-05-26 00:00:03 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_info' doesn't exist - Invalid query: SELECT `mxemp_emp_id`
FROM `maxwell_employees_info`
WHERE DATE_FORMAT(mxemp_emp_resignation_relieving_date,"%Y-%m-%d") >= '2025-05-01'
AND DATE_FORMAT(mxemp_emp_resignation_relieving_date,"%Y-%m-%d") <= '2025-05-26'
AND `mxemp_emp_resignation_status` != 'R'
ERROR - 2025-05-26 04:24:06 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 04:44:58 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 05:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_company_master' doesn't exist - Invalid query: SELECT `mxcp_firsthalf_time`, `mxcp_secondhalf_time`, `mxcp_logoff_time`, `mxcp_secondbreak_time`, `mxcp_secondbreak_endtime`, `mxcp_firsthalf_gracetime`, `mxcp_secondhalf_gracetime`
FROM `maxwell_company_master`
WHERE `mxcp_status` = 1
AND `mxcp_id` = 1
ERROR - 2025-05-26 05:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_company_master' doesn't exist - Invalid query: SELECT `mxcp_id`, `mxcp_name`
FROM `maxwell_company_master`
WHERE `mxcp_status` = 1
ERROR - 2025-05-26 05:22:09 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 06:26:15 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 06:27:25 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 06:42:00 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 06:47:28 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 06:49:35 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 06:52:02 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 07:06:45 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 07:06:46 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 07:40:30 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 07:41:29 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 09:50:32 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 09:50:34 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 10:24:16 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 10:53:08 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 11:18:02 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 11:34:44 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:34:46 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:34:50 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:34:57 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:12 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:13 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:14 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:14 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:15 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:15 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:17 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:35:58 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:36:00 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:36:01 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:36:01 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:38:04 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 11:38:04 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:00:01 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_info' doesn't exist - Invalid query: SELECT (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 12 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, `mxemp_emp_id` as `EmployeeID`, `mxemp_leave_bal_leave_type_shrt_name` as `leavetypeSN`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_emp_leave_balance` ON `mxemp_emp_id` = `mxemp_leave_bal_emp_id`
WHERE `mxemp_emp_resignation_status` != 'R'
AND `mxemp_leave_bal_leave_type` = 12
GROUP BY `EmployeeID`
ERROR - 2025-05-26 12:00:01 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_05' doesn't exist - Invalid query: SELECT (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 1 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, (sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end)) as total_daytaken
FROM `maxwell_attendance_2025_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2025-05-26'
GROUP BY `EmployeeID`
ERROR - 2025-05-26 12:00:01 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_05' doesn't exist - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 3 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, (sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end)) as total_daytaken
FROM `maxwell_attendance_2025_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2025-05-26'
GROUP BY `EmployeeID`
ERROR - 2025-05-26 12:00:02 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_05' doesn't exist - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 2 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, (sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end)+sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end)+ sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end)) as total_daytaken
FROM `maxwell_attendance_2025_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2025-05-26'
GROUP BY `EmployeeID`
ERROR - 2025-05-26 12:19:29 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:19:30 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:19:30 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:19:31 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:19:31 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:29:57 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:29:58 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:30:01 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:30:01 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 12:56:30 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 13:00:35 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 13:07:02 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 13:07:03 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 13:26:41 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 13:34:44 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 14:37:48 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:37:48 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:37:48 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:38:13 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:54:32 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:54:33 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:54:33 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:54:33 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 14:54:34 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:04:14 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:04:14 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:04:15 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:39:08 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:39:10 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:39:10 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:39:10 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:39:43 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:39:44 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 15:41:28 --> Query error: Table 'maxwellhrms_hr.maxwell_hrms_emp_login_history' doesn't exist - Invalid query: INSERT INTO `maxwell_hrms_emp_login_history` (`mxlg_emp_id`, `mxlg_name`, `mxlg_role`, `mxlg_type`, `mxlg_link`, `mxlg_createdby`, `mxlg_createdtime`, `mxlg_created_ip`) VALUES (NULL, NULL, NULL, 'logout', 'https://www.maxwellhrms.in/admin/logout?', NULL, '2025-05-26 15:41:28', '183.82.105.9')
ERROR - 2025-05-26 15:41:28 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 15:41:48 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:16:43 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 16:16:46 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 16:32:21 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:32:22 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:32:23 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:35:59 --> Query error: Table 'maxwellhrms_hr.maxwell_menu_user_wise_table' doesn't exist - Invalid query: SELECT `maxper_menuid`, `maxper_menuname`, `maxper_menuicon`
FROM `maxwell_menu_user_wise_table`
WHERE `maxper_menustatus` = 1
AND `maxper_roleid` IS NULL
AND `maxper_is_report` != 1
ORDER BY `maxper_menuname`
ERROR - 2025-05-26 16:36:18 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:36:19 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:52:17 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 16:52:18 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:33:42 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:33:42 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:33:42 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:33:42 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'm0978'
AND `mxemp_emp_lg_password` = 'Rads@2025'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:43:44 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:43:44 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:51:21 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:51:22 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:56:16 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
WHERE `mxemp_emp_lg_employee_id` = '888666'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
ERROR - 2025-05-26 17:56:19 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
WHERE `mxemp_emp_lg_employee_id` = '888666'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
ERROR - 2025-05-26 17:56:29 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
WHERE `mxemp_emp_lg_employee_id` = '888666'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
ERROR - 2025-05-26 17:58:43 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:58:43 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:58:43 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
ERROR - 2025-05-26 17:58:44 --> Query error: Table 'maxwellhrms_hr.maxwell_employees_login' doesn't exist - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_role`, `maxuser_roles_add`, `maxuser_roles_edit`, `maxuser_roles_delete`, `mxemp_emp_inbranch`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
INNER JOIN `maxwell_user_roles` ON `maxuser_roles_id` = `mxemp_emp_lg_role`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_lg_employee_id` = `mxemp_emp_id`
WHERE `mxemp_emp_lg_employee_id` = 'M0009'
AND `mxemp_emp_lg_password` = 'sandeep@143'
AND `mxemp_emp_lg_desktop_status` = 1
AND `mxemp_emp_lg_desktop_permissions` = 1
AND `mxemp_emp_resignation_status` != 'R'
AND `mxemp_emp_status` = 1
