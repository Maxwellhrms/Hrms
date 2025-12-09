<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-02 00:00:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 12 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, `mxemp_emp_id` as `EmployeeID`, `mxemp_leave_bal_leave_type_shrt_name` as `leavetypeSN`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_emp_leave_balance` ON `mxemp_emp_id` = `mxemp_leave_bal_emp_id`
WHERE `mxemp_emp_resignation_status` != 'R'
AND `mxemp_leave_bal_leave_type` = 12
GROUP BY `EmployeeID`
ERROR - 2023-04-02 00:00:02 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 2 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent, sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2023-04-02'
GROUP BY `EmployeeID`
ERROR - 2023-04-02 00:00:02 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 3 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent, sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2023-04-02'
GROUP BY `EmployeeID`
ERROR - 2023-04-02 00:00:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 4 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, `mxemp_emp_id` as `EmployeeID`, `mxemp_leave_bal_leave_type_shrt_name` as `leavetypeSN`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_emp_leave_balance` ON `mxemp_emp_id` = `mxemp_leave_bal_emp_id`
WHERE `mxemp_emp_resignation_status` != 'R'
AND `mxemp_leave_bal_leave_type` = 4
GROUP BY `EmployeeID`
ERROR - 2023-04-02 00:00:03 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 1 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent, sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2023-04-02'
GROUP BY `EmployeeID`
ERROR - 2023-04-02 02:09:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 02:10:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 02:23:00 --> 404 Page Not Found: Autodiscover/autodiscover.json
ERROR - 2023-04-02 04:01:08 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 05:43:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-02 06:36:59 --> 404 Page Not Found: Cgi-bin/config.exp
ERROR - 2023-04-02 06:43:43 --> 404 Page Not Found: Maxwellhrmsin:80/index
ERROR - 2023-04-02 07:22:55 --> 404 Page Not Found: Actuator/gateway
ERROR - 2023-04-02 07:50:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:50:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 07:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 07:51:12 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:51:12 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:51:27 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:51:27 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:51:27 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 07:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 07:51:27 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 08:44:21 --> 404 Page Not Found: Owa/auth
ERROR - 2023-04-02 09:48:27 --> 404 Page Not Found: Owa/auth
ERROR - 2023-04-02 09:55:13 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-04-02 10:02:33 --> 404 Page Not Found: Owa/auth
ERROR - 2023-04-02 10:19:46 --> 404 Page Not Found: Maxwellhrmsin:80/index
ERROR - 2023-04-02 11:11:02 --> 404 Page Not Found: Public/home
ERROR - 2023-04-02 11:11:03 --> 404 Page Not Found: Public/home
ERROR - 2023-04-02 11:11:04 --> 404 Page Not Found: Static/admin
ERROR - 2023-04-02 11:11:04 --> 404 Page Not Found: Static/admin
ERROR - 2023-04-02 11:46:01 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN (SELECT
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
                -- OCCASIONAL HOLIDAY
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'OCH' then 1 else 0 end) AS occasional_full_day,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half != 'OCH' then 0.5 else 0 end) AS First_Half_occasional,
                sum(case when mx_attendance_first_half != 'OCH' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS Second_Half_occasional,
                -- END OCCASIONAL HOLIDAY
                -- REGULATION
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS regulation_full_day,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_regulation,
                sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_regulation,
                -- END REGULATION
                -- ON TOUR
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                -- ON TOUR
                -- ON DUTY
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                -- END ON DUTY
                -- Absent History
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                -- End Absent History
                -- SHORT LEAVE History
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS Shortleave,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_Shortleave,
                sum(case when mx_attendance_second_half = 'SHRT' AND mx_attendance_first_half != 'SHRT' then 0.5 else 0 end) AS Second_Half_Shortleave,
                -- End SHORT LEAVE History
                
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
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS First_Half_Present_WO_Applied,
                sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_WO_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS First_Half_Present_PH_Applied,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_PH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS First_Half_Present_OCH_Applied,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OCH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS First_Half_Present_AR_Applied,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_AR_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS First_Half_Present_OD_Applied,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OD_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS First_Half_Present_ML_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_ML_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                -- End Present History
                -- Maternity History
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                -- End Maternity History
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
            FROM maxwell_attendance_2023_04
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-04-02 11:46:25 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:25 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:25 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:25 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 11:46:31 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance__' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance__`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN (SELECT
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
                -- OCCASIONAL HOLIDAY
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'OCH' then 1 else 0 end) AS occasional_full_day,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half != 'OCH' then 0.5 else 0 end) AS First_Half_occasional,
                sum(case when mx_attendance_first_half != 'OCH' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS Second_Half_occasional,
                -- END OCCASIONAL HOLIDAY
                -- REGULATION
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS regulation_full_day,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_regulation,
                sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_regulation,
                -- END REGULATION
                -- ON TOUR
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                -- ON TOUR
                -- ON DUTY
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                -- END ON DUTY
                -- Absent History
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                -- End Absent History
                -- SHORT LEAVE History
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS Shortleave,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_Shortleave,
                sum(case when mx_attendance_second_half = 'SHRT' AND mx_attendance_first_half != 'SHRT' then 0.5 else 0 end) AS Second_Half_Shortleave,
                -- End SHORT LEAVE History
                
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
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS First_Half_Present_WO_Applied,
                sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_WO_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS First_Half_Present_PH_Applied,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_PH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS First_Half_Present_OCH_Applied,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OCH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS First_Half_Present_AR_Applied,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_AR_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS First_Half_Present_OD_Applied,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OD_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS First_Half_Present_ML_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_ML_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                -- End Present History
                -- Maternity History
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                -- End Maternity History
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
            FROM maxwell_attendance__
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-04-02 11:46:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 11:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 11:46:46 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:46 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:46 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:46 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:46:46 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN (SELECT
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
                -- OCCASIONAL HOLIDAY
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'OCH' then 1 else 0 end) AS occasional_full_day,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half != 'OCH' then 0.5 else 0 end) AS First_Half_occasional,
                sum(case when mx_attendance_first_half != 'OCH' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS Second_Half_occasional,
                -- END OCCASIONAL HOLIDAY
                -- REGULATION
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS regulation_full_day,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_regulation,
                sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_regulation,
                -- END REGULATION
                -- ON TOUR
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                -- ON TOUR
                -- ON DUTY
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                -- END ON DUTY
                -- Absent History
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                -- End Absent History
                -- SHORT LEAVE History
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS Shortleave,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_Shortleave,
                sum(case when mx_attendance_second_half = 'SHRT' AND mx_attendance_first_half != 'SHRT' then 0.5 else 0 end) AS Second_Half_Shortleave,
                -- End SHORT LEAVE History
                
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
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS First_Half_Present_WO_Applied,
                sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_WO_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS First_Half_Present_PH_Applied,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_PH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS First_Half_Present_OCH_Applied,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OCH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS First_Half_Present_AR_Applied,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_AR_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS First_Half_Present_OD_Applied,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OD_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS First_Half_Present_ML_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_ML_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                -- End Present History
                -- Maternity History
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                -- End Maternity History
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
            FROM maxwell_attendance_2023_04
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-04-02 11:55:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:55:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:55:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 11:55:04 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:55:04 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN (SELECT
                (
                select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentCL,
            (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentSL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentEL,
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
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'OCH' then 1 else 0 end) AS occasional_full_day,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half != 'OCH' then 0.5 else 0 end) AS First_Half_occasional,
                sum(case when mx_attendance_first_half != 'OCH' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS Second_Half_occasional,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS regulation_full_day,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_regulation,
                sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_regulation,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                -- SHORT LEAVE History
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS Shortleave,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_Shortleave,
                sum(case when mx_attendance_second_half = 'SHRT' AND mx_attendance_first_half != 'SHRT' then 0.5 else 0 end) AS Second_Half_Shortleave,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS First_Half_Present_WO_Applied,
                sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_WO_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS First_Half_Present_PH_Applied,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_PH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS First_Half_Present_OCH_Applied,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OCH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS First_Half_Present_AR_Applied,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_AR_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS First_Half_Present_OD_Applied,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OD_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS First_Half_Present_ML_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_ML_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
            FROM maxwell_attendance_2023_04
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-04-02 11:56:10 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 11:56:11 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:56:11 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:56:11 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 11:56:11 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN (SELECT
                (
                select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentCL,
            (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentSL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentEL,
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
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'OCH' then 1 else 0 end) AS occasional_full_day,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half != 'OCH' then 0.5 else 0 end) AS First_Half_occasional,
                sum(case when mx_attendance_first_half != 'OCH' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS Second_Half_occasional,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS regulation_full_day,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_regulation,
                sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_regulation,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS Shortleave,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_Shortleave,
                sum(case when mx_attendance_second_half = 'SHRT' AND mx_attendance_first_half != 'SHRT' then 0.5 else 0 end) AS Second_Half_Shortleave,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS First_Half_Present_WO_Applied,
                sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_WO_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS First_Half_Present_PH_Applied,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_PH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS First_Half_Present_OCH_Applied,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OCH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS First_Half_Present_AR_Applied,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_AR_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS First_Half_Present_OD_Applied,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OD_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS First_Half_Present_ML_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_ML_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
            FROM maxwell_attendance_2023_04
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-04-02 12:00:01 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 2 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent, sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2023-04-02'
GROUP BY `EmployeeID`
ERROR - 2023-04-02 12:00:01 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 1 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent, sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2023-04-02'
GROUP BY `EmployeeID`
ERROR - 2023-04-02 12:00:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 4 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, `mxemp_emp_id` as `EmployeeID`, `mxemp_leave_bal_leave_type_shrt_name` as `leavetypeSN`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_emp_leave_balance` ON `mxemp_emp_id` = `mxemp_leave_bal_emp_id`
WHERE `mxemp_emp_resignation_status` != 'R'
AND `mxemp_leave_bal_leave_type` = 4
GROUP BY `EmployeeID`
ERROR - 2023-04-02 12:00:01 --> Query error: Expression #3 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT ( select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) 
            from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as Currentbal, (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 3 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as EmployeeName, `mx_attendance_emp_code` as `EmployeeID`, count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent, sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
FROM `maxwell_attendance_2023_04`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_date` <= '2023-04-02'
GROUP BY `EmployeeID`
ERROR - 2023-04-02 12:00:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_comp_code' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT (select mxlt_leave_short_name from maxwell_leave_type_master where mxlt_id = 12 and mxlt_status=1 ) as leavetypeSN, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_type` as `emptype`, `mxemp_emp_id` as `EmployeeID`, `mxemp_leave_bal_leave_type_shrt_name` as `leavetypeSN`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_emp_leave_balance` ON `mxemp_emp_id` = `mxemp_leave_bal_emp_id`
WHERE `mxemp_emp_resignation_status` != 'R'
AND `mxemp_leave_bal_leave_type` = 12
GROUP BY `EmployeeID`
ERROR - 2023-04-02 12:32:48 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 12:32:48 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 12:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-02 12:32:48 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 12:32:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-02 12:39:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 12:39:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 12:58:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-02 12:58:09 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-04-02 15:46:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 17:51:59 --> 404 Page Not Found: Maxwellhrmsin:80/index
ERROR - 2023-04-02 17:54:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 19:00:30 --> 404 Page Not Found: Ab2g/index
ERROR - 2023-04-02 19:00:31 --> 404 Page Not Found: Ab2h/index
ERROR - 2023-04-02 19:00:39 --> 404 Page Not Found: T4/index
ERROR - 2023-04-02 19:00:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 20:49:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-02 21:09:22 --> 404 Page Not Found: J7tG/index
ERROR - 2023-04-02 22:15:43 --> 404 Page Not Found: Actuator/health
ERROR - 2023-04-02 23:00:51 --> 404 Page Not Found: Webclient/index
