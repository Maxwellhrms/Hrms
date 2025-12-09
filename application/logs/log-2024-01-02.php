<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-02 00:36:51 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-01-02 01:34:51 --> 404 Page Not Found: Console/index
ERROR - 2024-01-02 02:38:55 --> 404 Page Not Found: En/index
ERROR - 2024-01-02 02:39:25 --> 404 Page Not Found: _ignition/execute-solution
ERROR - 2024-01-02 02:41:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-01-02 03:23:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 06:21:49 --> 404 Page Not Found: Git/config
ERROR - 2024-01-02 06:34:00 --> 404 Page Not Found: Geoserver/index
ERROR - 2024-01-02 06:40:04 --> 404 Page Not Found: Git/config
ERROR - 2024-01-02 08:45:20 --> 404 Page Not Found: Analytics/1702603200000
ERROR - 2024-01-02 09:23:05 --> 404 Page Not Found: V2/14565770
ERROR - 2024-01-02 09:54:18 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2024_12`
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
            FROM maxwell_attendance_2024_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'm0978'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'm0978') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'm0978'
ERROR - 2024-01-02 09:54:22 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
FROM `maxwell_attendance_2024_12`
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
            FROM maxwell_attendance_2024_12
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'm0978'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'm0978') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'm0978'
ERROR - 2024-01-02 10:02:18 --> 404 Page Not Found: Public/js
ERROR - 2024-01-02 10:41:30 --> 404 Page Not Found: Public/js
ERROR - 2024-01-02 11:21:28 --> 404 Page Not Found: Web-interactives-embedjs/index
ERROR - 2024-01-02 11:59:40 --> 404 Page Not Found: F/1ba1685.js
ERROR - 2024-01-02 12:03:47 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:50 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:52 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:52 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:53 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:53 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:54 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:54 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:54 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:55 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:56 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:03:56 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_02' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance_2024_02`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` = 'M1072'
ERROR - 2024-01-02 12:37:33 --> 404 Page Not Found: Design/defaulttheme
ERROR - 2024-01-02 12:41:48 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session6f3d85545df7b53b719ae4818a61e5dbbdbd3f95 /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2024-01-02 12:41:48 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2024-01-02 12:41:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 12:41:49 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session6f3d85545df7b53b719ae4818a61e5dbbdbd3f95 /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2024-01-02 12:41:49 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2024-01-02 13:15:24 --> 404 Page Not Found: 14565770js/index
ERROR - 2024-01-02 13:49:53 --> 404 Page Not Found: Autodiscover/autodiscover.json
ERROR - 2024-01-02 14:34:06 --> 404 Page Not Found: Assets/index-19d4ecc1.js
ERROR - 2024-01-02 14:55:30 --> 404 Page Not Found: Git/config
ERROR - 2024-01-02 15:07:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-02 16:03:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 16:31:19 --> 404 Page Not Found: _s/v4
ERROR - 2024-01-02 16:53:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 16:55:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 16:55:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 17:08:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-02 17:50:17 --> 404 Page Not Found: Logger-1minjs/index
ERROR - 2024-01-02 18:29:03 --> 404 Page Not Found: Jquerymarquee/1.4.0
ERROR - 2024-01-02 18:45:50 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2024-01-02 21:10:08 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-02 21:10:08 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-02 21:11:45 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-02 21:11:45 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-02 21:19:34 --> 404 Page Not Found: Mediamughalcom/assets
ERROR - 2024-01-02 21:19:34 --> 404 Page Not Found: Mediamughalcom/assets
ERROR - 2024-01-02 21:19:34 --> 404 Page Not Found: Mediamughalcom/assets
ERROR - 2024-01-02 21:19:34 --> 404 Page Not Found: Mediamughalcom/assets
ERROR - 2024-01-02 21:19:36 --> 404 Page Not Found: Mediamughalcom/assets
ERROR - 2024-01-02 21:37:58 --> 404 Page Not Found: Admin/config.php
