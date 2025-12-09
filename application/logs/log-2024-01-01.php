<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-01 04:36:28 --> 404 Page Not Found: Temporary_Listen_Addresses/index
ERROR - 2024-01-01 04:36:29 --> 404 Page Not Found: Ews/exchanges
ERROR - 2024-01-01 04:36:30 --> 404 Page Not Found: Ews/exchange%20
ERROR - 2024-01-01 04:36:31 --> 404 Page Not Found: Ews/exchange
ERROR - 2024-01-01 04:36:32 --> 404 Page Not Found: Ews/%20
ERROR - 2024-01-01 04:36:32 --> 404 Page Not Found: Ews/ews
ERROR - 2024-01-01 04:36:33 --> 404 Page Not Found: Ews/autodiscovers
ERROR - 2024-01-01 04:36:34 --> 404 Page Not Found: Autodiscover/autodiscovers
ERROR - 2024-01-01 04:36:35 --> 404 Page Not Found: Autodiscover/autodiscover%20
ERROR - 2024-01-01 04:36:36 --> 404 Page Not Found: Autodiscover/autodiscoverrs
ERROR - 2024-01-01 04:36:36 --> 404 Page Not Found: Autodiscove/index
ERROR - 2024-01-01 04:44:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-01 04:44:00 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-01-01 08:25:03 --> 404 Page Not Found: Epa/scripts
ERROR - 2024-01-01 08:29:49 --> 404 Page Not Found: Owa/auth
ERROR - 2024-01-01 08:29:50 --> 404 Page Not Found: Ecp/Current
ERROR - 2024-01-01 08:29:50 --> 404 Page Not Found: Owa/auth
ERROR - 2024-01-01 08:30:18 --> 404 Page Not Found: V1/statement
ERROR - 2024-01-01 08:30:32 --> 404 Page Not Found: Dana-na/nc
ERROR - 2024-01-01 08:30:32 --> 404 Page Not Found: Dana-cached/hc
ERROR - 2024-01-01 08:30:40 --> 404 Page Not Found: Remote/index
ERROR - 2024-01-01 08:30:40 --> 404 Page Not Found: RDWeb/index
ERROR - 2024-01-01 08:30:47 --> 404 Page Not Found: Wsman/index
ERROR - 2024-01-01 08:30:58 --> 404 Page Not Found: SslvpnLoginhtml/index
ERROR - 2024-01-01 08:30:58 --> 404 Page Not Found: Auth1html/index
ERROR - 2024-01-01 08:30:58 --> 404 Page Not Found: Api/sonicos
ERROR - 2024-01-01 08:30:58 --> 404 Page Not Found: Authhtml/index
ERROR - 2024-01-01 08:30:58 --> 404 Page Not Found: Api/sonicos
ERROR - 2024-01-01 08:35:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-01 10:16:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-01 10:16:55 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-01-01 10:16:56 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-01-01 10:44:28 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
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
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'M0978'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'M0978') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'M0978'
ERROR - 2024-01-01 10:47:36 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
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
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'M0978'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'M0978') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'M0978'
ERROR - 2024-01-01 10:47:52 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
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
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'M0978'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'M0978') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'M0978'
ERROR - 2024-01-01 10:48:00 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2024_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD, (Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR, `Full_day_Ml_Applied` as `total_ML`, `Week_Off` as `total_WO`, (Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH, (Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH, (occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH, (regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR, (ot_full_day + First_Half_ot + Second_Half_ot) as total_OT, (onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD, (Absent + First_Half_Absent + Second_Half_Absent) as total_AB, (Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL, (Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL, (Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL
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
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'M0978'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'M0978') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'M0978'
ERROR - 2024-01-01 11:42:34 --> Query error: Incorrect parameter count in the call to native function 'DATE_FORMAT' - Invalid query: SELECT `mx_holiday_id`, `mx_holiday_type`, `mx_holiday_company_id`, `mx_holiday_state_id`, `mx_holiday_branch_id`, `mx_holiday_date`, `mx_holiday_name`, `mxst_state`, `mxcp_name`, `mxb_name`, `mxd_name`
FROM `maxwell_holiday_master`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mx_holiday_company_id`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mx_holiday_division_id`
LEFT OUTER JOIN `maxwell_state_master` ON `mxst_id` = `mx_holiday_state_id`
LEFT OUTER JOIN `maxwell_branch_master` ON `mxb_id` = `mx_holiday_branch_id`
WHERE `mx_holiday_status` = 1
ORDER BY `mx_holiday_createdtime` DESC, DATE_FORMAT(mx_holiday_date)
ERROR - 2024-01-01 11:42:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-01 11:43:25 --> Query error: Incorrect parameter count in the call to native function 'DATE_FORMAT' - Invalid query: SELECT `mx_holiday_id`, `mx_holiday_type`, `mx_holiday_company_id`, `mx_holiday_state_id`, `mx_holiday_branch_id`, `mx_holiday_date`, `mx_holiday_name`, `mxst_state`, `mxcp_name`, `mxb_name`, `mxd_name`
FROM `maxwell_holiday_master`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mx_holiday_company_id`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mx_holiday_division_id`
LEFT OUTER JOIN `maxwell_state_master` ON `mxst_id` = `mx_holiday_state_id`
LEFT OUTER JOIN `maxwell_branch_master` ON `mxb_id` = `mx_holiday_branch_id`
WHERE `mx_holiday_status` = 1
ORDER BY `mx_holiday_createdtime` DESC, DATE_FORMAT(mx_holiday_date), `%Y`
ERROR - 2024-01-01 12:57:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-01 14:14:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-01 14:58:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-01-01 15:02:58 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 15:03:02 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 15:04:13 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 15:38:41 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 15:39:09 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 15:41:35 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 16:40:37 --> 404 Page Not Found: Git/config
ERROR - 2024-01-01 16:46:43 --> 404 Page Not Found: Owa/auth
ERROR - 2024-01-01 19:27:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:27:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:27:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:27:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-01 19:28:32 --> 404 Page Not Found: Git/config
ERROR - 2024-01-01 19:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-01 19:33:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:33:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:33:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:33:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:34:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:34:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:34:54 --> Severity: error --> Exception: WriteHTML() requires $html be an integer, float, string, boolean or an object with the __toString() magic method. /home/maxwellhrms/public_html/application/controllers/mpdf/mpdf/mpdf/src/Mpdf.php 13150
ERROR - 2024-01-01 19:34:55 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-01-01 19:35:29 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:36:21 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:36:21 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-01-01 19:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-01-01 19:41:54 --> Query error: Unknown column 'pdfdata' in 'field list' - Invalid query: UPDATE `maxwell_letters` SET `letter_status` = '1', `typeofletter` = '1', `personname` = 'Harish kumar lakkoju', `address` = '<p>test addres</p>\r\n', `letterno` = '6668Lcm-3434', `appdate` = '17-12-2023', `effectivedate` = '17-12-2023', `designation` = 'Software 1', `placeofposting` = 'Developer', `salary` = '50000', `basic` = '35000', `hra` = '15000', `pdfdata` = '', `templateid` = '4', `modifyby` = 'Developers Login', `modifiedtime` = '2024-01-01 19:41:53', `modified_ip` = '43.241.123.38'
WHERE `id` = '1'
ERROR - 2024-01-01 19:42:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:42:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:42:59 --> Severity: error --> Exception: WriteHTML() requires $html be an integer, float, string, boolean or an object with the __toString() magic method. /home/maxwellhrms/public_html/application/controllers/mpdf/mpdf/mpdf/src/Mpdf.php 13150
ERROR - 2024-01-01 19:50:26 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:50:26 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:51:19 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:51:19 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:53:35 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:53:35 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:53:54 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:53:54 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:54:18 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:54:18 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 19:54:58 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 20:48:53 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 20:48:53 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 20:49:53 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 20:49:53 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2024-01-01 22:13:49 --> 404 Page Not Found: Autodiscover/Autodiscover.xml
ERROR - 2024-01-01 23:11:58 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2024-01-01 23:52:40 --> 404 Page Not Found: Vendor/phpunit
