<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-05 01:44:44 --> 404 Page Not Found: Envwww/index
ERROR - 2023-05-05 01:44:46 --> 404 Page Not Found: Envwww/index
ERROR - 2023-05-05 01:44:46 --> 404 Page Not Found: Env_1/index
ERROR - 2023-05-05 01:44:47 --> 404 Page Not Found: Env_1/index
ERROR - 2023-05-05 01:44:48 --> 404 Page Not Found: Env_sample/index
ERROR - 2023-05-05 01:44:49 --> 404 Page Not Found: Env_sample/index
ERROR - 2023-05-05 01:44:49 --> 404 Page Not Found: Aws/credentials
ERROR - 2023-05-05 01:44:50 --> 404 Page Not Found: Aws/credentials
ERROR - 2023-05-05 01:44:51 --> 404 Page Not Found: _static/.env
ERROR - 2023-05-05 01:44:52 --> 404 Page Not Found: _static/.env
ERROR - 2023-05-05 01:44:52 --> 404 Page Not Found: C9/metadata
ERROR - 2023-05-05 01:44:53 --> 404 Page Not Found: C9/metadata
ERROR - 2023-05-05 01:44:54 --> 404 Page Not Found: Docker/.env
ERROR - 2023-05-05 01:44:55 --> 404 Page Not Found: Docker/.env
ERROR - 2023-05-05 01:44:55 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 01:44:56 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 01:44:57 --> 404 Page Not Found: Envbackup/index
ERROR - 2023-05-05 01:44:58 --> 404 Page Not Found: Envbackup/index
ERROR - 2023-05-05 01:44:58 --> 404 Page Not Found: Envdev/index
ERROR - 2023-05-05 01:44:59 --> 404 Page Not Found: Envdev/index
ERROR - 2023-05-05 01:45:00 --> 404 Page Not Found: Envbak%20/index
ERROR - 2023-05-05 01:45:00 --> 404 Page Not Found: Envbak%20/index
ERROR - 2023-05-05 01:45:01 --> 404 Page Not Found: Envold/index
ERROR - 2023-05-05 01:45:02 --> 404 Page Not Found: Envold/index
ERROR - 2023-05-05 01:45:03 --> 404 Page Not Found: Pnp/index
ERROR - 2023-05-05 01:45:04 --> 404 Page Not Found: Pnp/index
ERROR - 2023-05-05 01:45:04 --> 404 Page Not Found: Pnpjs/index
ERROR - 2023-05-05 01:45:05 --> 404 Page Not Found: Pnpjs/index
ERROR - 2023-05-05 01:45:06 --> 404 Page Not Found: Debuglog/index
ERROR - 2023-05-05 01:45:07 --> 404 Page Not Found: Debuglog/index
ERROR - 2023-05-05 01:45:07 --> 404 Page Not Found: Webconfig/index
ERROR - 2023-05-05 01:45:08 --> 404 Page Not Found: Webconfig/index
ERROR - 2023-05-05 01:45:09 --> 404 Page Not Found: Configjson/index
ERROR - 2023-05-05 01:45:10 --> 404 Page Not Found: Configjson/index
ERROR - 2023-05-05 01:45:10 --> 404 Page Not Found: Meta-data/index
ERROR - 2023-05-05 01:45:11 --> 404 Page Not Found: Meta-data/index
ERROR - 2023-05-05 01:45:12 --> 404 Page Not Found: Latest/meta-data
ERROR - 2023-05-05 01:45:12 --> 404 Page Not Found: Latest/meta-data
ERROR - 2023-05-05 02:51:57 --> 404 Page Not Found: Autodiscover/autodiscover.json
ERROR - 2023-05-05 02:52:36 --> 404 Page Not Found: Aaaaaaaaaaaaaaaaaaaaaaaaaqr/index
ERROR - 2023-05-05 02:52:36 --> 404 Page Not Found: Res/login.html
ERROR - 2023-05-05 02:52:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 02:52:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 02:52:37 --> 404 Page Not Found: 99vt/index
ERROR - 2023-05-05 02:52:37 --> 404 Page Not Found: 99vu/index
ERROR - 2023-05-05 03:24:12 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 03:51:39 --> 404 Page Not Found: Owa/auth
ERROR - 2023-05-05 04:10:52 --> 404 Page Not Found: Remote/login
ERROR - 2023-05-05 05:22:37 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 05:38:03 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 06:37:12 --> 404 Page Not Found: Backupzip/index
ERROR - 2023-05-05 09:43:12 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            WHERE mx_attendance_cmp_id = 1  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2023-05-05 09:43:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_leave_type_master.mxlt_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mxemp_ty_id`, `mxemp_ty_name`, GROUP_CONCAT(mxlt_leave_short_name) as shortnames, `mxlt_id`, GROUP_CONCAT(mxlt_leave_name) as leavenames, `mxlass_min_leaves`, `mxlass_apply_min_leave_days`, `mxlass_is_max_leave`, `mxlass_applicable_on_wo`, `mxlass_applicable_on_ph`, `mxlass_applicable_on_pr`, `mxfny_name`
FROM `maxwell_leave_assigning_master`
INNER JOIN `maxwell_employee_type_master` ON `mxlass_emp_type_id` = `mxemp_ty_id`
INNER JOIN `maxwell_leave_type_master` ON `mxlt_id` = `mxlass_leave_type_id`
INNER JOIN `maxwell_financial_year_type_master` ON `mxlass_financial_year_id` = `mxfny_id`
WHERE `mxlass_status` = 1
GROUP BY `mxemp_ty_id`, `mxlt_leave_short_name`
ERROR - 2023-05-05 09:43:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 09:43:25 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            WHERE mx_attendance_cmp_id = 1  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2023-05-05 09:43:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_leave_type_master.mxlt_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mxemp_ty_id`, `mxemp_ty_name`, GROUP_CONCAT(mxlt_leave_short_name) as shortnames, `mxlt_id`, GROUP_CONCAT(mxlt_leave_name) as leavenames, `mxlass_min_leaves`, `mxlass_apply_min_leave_days`, `mxlass_is_max_leave`, `mxlass_applicable_on_wo`, `mxlass_applicable_on_ph`, `mxlass_applicable_on_pr`, `mxfny_name`
FROM `maxwell_leave_assigning_master`
INNER JOIN `maxwell_employee_type_master` ON `mxlass_emp_type_id` = `mxemp_ty_id`
INNER JOIN `maxwell_leave_type_master` ON `mxlt_id` = `mxlass_leave_type_id`
INNER JOIN `maxwell_financial_year_type_master` ON `mxlass_financial_year_id` = `mxfny_id`
WHERE `mxlass_status` = 1
GROUP BY `mxemp_ty_id`, `mxlt_leave_short_name`
ERROR - 2023-05-05 09:53:59 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 09:54:08 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 09:54:14 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 09:54:17 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 09:54:26 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 10:43:55 --> 404 Page Not Found: Forgotuserpasswordaction/index
ERROR - 2023-05-05 10:44:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 10:44:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 11:19:12 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:19:23 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance__' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
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
            FROM maxwell_attendance__
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:19:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 11:21:14 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:21:14 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:21:14 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:21:14 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:21:14 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:22:12 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:12 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:12 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:13 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:13 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:22:37 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:38 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:22:38 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:38 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:22:38 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:10 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:23:31 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:31 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:31 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:32 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:23:32 --> Query error: Expression #5 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2023_05`
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
            FROM maxwell_attendance_2023_05
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2023-05-05 11:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 11:34:26 --> 404 Page Not Found: ShowLogincc/index
ERROR - 2023-05-05 11:54:32 --> 404 Page Not Found: Explore/index
ERROR - 2023-05-05 13:01:55 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 13:42:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 13:42:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 14:09:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 14:09:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 14:16:32 --> 404 Page Not Found: Uploads/empdocuments
ERROR - 2023-05-05 14:17:08 --> 404 Page Not Found: Uploads/empdocuments
ERROR - 2023-05-05 14:17:10 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Infophp/index
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Telescope/requests
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Server-status/index
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Git/config
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Debug/default
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: Api/search
ERROR - 2023-05-05 14:24:23 --> 404 Page Not Found: V2/_catalog
ERROR - 2023-05-05 14:24:24 --> 404 Page Not Found: Loginaction/index
ERROR - 2023-05-05 14:24:24 --> 404 Page Not Found: About/index
ERROR - 2023-05-05 14:24:24 --> 404 Page Not Found: Configjson/index
ERROR - 2023-05-05 14:26:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 14:26:04 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-05-05 14:26:06 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-05-05 14:55:39 --> 404 Page Not Found: Uploads/empdocuments
ERROR - 2023-05-05 14:55:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 14:55:56 --> 404 Page Not Found: Uploads/empdocuments
ERROR - 2023-05-05 15:04:20 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 15:10:28 --> 404 Page Not Found: Actuator/gateway
ERROR - 2023-05-05 15:19:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 15:30:04 --> 404 Page Not Found: Env/index
ERROR - 2023-05-05 16:30:52 --> 404 Page Not Found: Uploads/empdocuments
ERROR - 2023-05-05 16:30:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 17:10:22 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 17:10:22 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 17:10:22 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 17:10:22 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-05 17:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 17:11:37 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 17:15:16 --> 404 Page Not Found: Geoserver/web
ERROR - 2023-05-05 17:50:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 18:17:54 --> 404 Page Not Found: Dns-query/index
ERROR - 2023-05-05 18:24:35 --> 404 Page Not Found: Ab2g/index
ERROR - 2023-05-05 18:24:36 --> 404 Page Not Found: Ab2h/index
ERROR - 2023-05-05 18:24:43 --> 404 Page Not Found: T4/index
ERROR - 2023-05-05 18:24:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 19:03:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 22:12:54 --> 404 Page Not Found: Agent/timeclock.php
ERROR - 2023-05-05 22:12:54 --> 404 Page Not Found: Agc/timeclock.php
ERROR - 2023-05-05 22:53:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 23:09:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-05-05 23:34:15 --> 404 Page Not Found: Owa/auth
ERROR - 2023-05-05 23:36:40 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-05-05 23:38:13 --> 404 Page Not Found: Owa/auth
ERROR - 2023-05-05 23:43:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 23:51:25 --> 404 Page Not Found: Version/index
