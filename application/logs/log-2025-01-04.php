<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-04 11:06:41 --> Query error: Column 'mxemp_leave_histroy_previous_bal' cannot be null - Invalid query: INSERT INTO `maxwell_emp_leave_detailed_history` (`mxemp_leave_history_comp_id`, `mxemp_leave_history_division_id`, `mxemp_leave_history_emp_id`, `mxemp_leave_history_leavetype`, `mxemp_leave_history_short_name`, `mxemp_leave_histroy_previous_bal`, `mxemp_leave_histroy_present_adding`, `mxemp_leave_history_crnt_bal`, `mxemp_leave_history_process_type`, `mxemp_leave_history_processdate`, `mxemp_leave_history_createdby`, `mxemp_leave_history_createdtime`, `mxemp_leave_history_created_ip`) VALUES ('1', '2', 'M1099', '13', 'LOP', NULL, '0.50', 0.5, 'manualRevert', '2024-12-16', 'M0978', '2025-01-04 11:06:41', '183.82.105.9')
ERROR - 2025-01-04 11:06:44 --> Query error: Column 'mxemp_leave_histroy_previous_bal' cannot be null - Invalid query: INSERT INTO `maxwell_emp_leave_detailed_history` (`mxemp_leave_history_comp_id`, `mxemp_leave_history_division_id`, `mxemp_leave_history_emp_id`, `mxemp_leave_history_leavetype`, `mxemp_leave_history_short_name`, `mxemp_leave_histroy_previous_bal`, `mxemp_leave_histroy_present_adding`, `mxemp_leave_history_crnt_bal`, `mxemp_leave_history_process_type`, `mxemp_leave_history_processdate`, `mxemp_leave_history_createdby`, `mxemp_leave_history_createdtime`, `mxemp_leave_history_created_ip`) VALUES ('1', '2', 'M1099', '13', 'LOP', NULL, '0.50', 0.5, 'manualRevert', '2024-12-16', 'M0978', '2025-01-04 11:06:44', '183.82.105.9')
ERROR - 2025-01-04 11:36:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-04'
AND `mxesi_affect_to` >= '2025-01-04'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-04 11:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-04'
AND `mxesi_affect_to` >= '2025-01-04'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-04 12:17:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-04'
AND `mxesi_affect_to` >= '2025-01-04'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-04 13:12:28 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (PH_Full_Day + First_Half_PH + Second_Half_PH) as PH, (AB_Full_Day + First_Half_AB + Second_Half_AB) as AB, (PR_Full_Day + First_Half_PR + Second_Half_PR) as PR, (CL_Full_Day + First_Half_CL + Second_Half_CL) as CL, (SL_Full_Day + First_Half_SL + Second_Half_SL) as SL, (EL_Full_Day + First_Half_EL + Second_Half_EL) as EL, (OD_Full_Day + First_Half_OD + Second_Half_OD) as OD, (AR_Full_Day + First_Half_AR + Second_Half_AR) as AR, (SHRT_Full_Day + First_Half_SHRT + Second_Half_SHRT) as SHRT, (LOP_Full_Day + First_Half_LOP + Second_Half_LOP) as LOP, (ML_Full_Day + First_Half_ML + Second_Half_ML) as ML, (OT_Full_Day + First_Half_OT + Second_Half_OT) as OT, (OH_Full_Day + First_Half_OH + Second_Half_OH) as OH, (WO_Full_Day + First_Half_WO + Second_Half_WO) as WO, (PH_Full_Day + First_Half_PH + Second_Half_PH +AB_Full_Day + First_Half_AB + Second_Half_AB +PR_Full_Day + First_Half_PR + Second_Half_PR +CL_Full_Day + First_Half_CL + Second_Half_CL +SL_Full_Day + First_Half_SL + Second_Half_SL +EL_Full_Day + First_Half_EL + Second_Half_EL +OD_Full_Day + First_Half_OD + Second_Half_OD +AR_Full_Day + First_Half_AR + Second_Half_AR +SHRT_Full_Day + First_Half_SHRT + Second_Half_SHRT +LOP_Full_Day + First_Half_LOP + Second_Half_LOP +ML_Full_Day + First_Half_ML + Second_Half_ML +OT_Full_Day + First_Half_OT + Second_Half_OT +OH_Full_Day + First_Half_OH + Second_Half_OH +WO_Full_Day + First_Half_WO + Second_Half_WO ) as totaldays
FROM `maxwell_attendance_2025_12`
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
                count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS PH_Full_Day, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_PH, sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_PH, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS AB_Full_Day, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_AB, sum(case when mx_attendance_first_half != 'AB' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS Second_Half_AB, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS PR_Full_Day, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end) AS First_Half_PR, sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_PR, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS CL_Full_Day, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_CL, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_CL, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS SL_Full_Day, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_SL, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_SL, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS EL_Full_Day, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_EL, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_EL, sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS OD_Full_Day, sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_OD, sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_OD, sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS AR_Full_Day, sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_AR, sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_AR, sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS SHRT_Full_Day, sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_SHRT, sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS Second_Half_SHRT, sum(case when mx_attendance_first_half = 'LOP' AND mx_attendance_second_half = 'LOP' then 1 else 0 end) AS LOP_Full_Day, sum(case when mx_attendance_first_half = 'LOP' AND mx_attendance_second_half != 'LOP' then 0.5 else 0 end) AS First_Half_LOP, sum(case when mx_attendance_first_half != 'LOP' AND mx_attendance_second_half = 'LOP' then 0.5 else 0 end) AS Second_Half_LOP, sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS ML_Full_Day, sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_ML, sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_ML, sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS OT_Full_Day, sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_OT, sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_OT, sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end) AS OH_Full_Day, sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end) AS First_Half_OH, sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end) AS Second_Half_OH, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS WO_Full_Day, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end) AS First_Half_WO, sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS Second_Half_WO FROM maxwell_attendance_2025_12 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2025-01-04 13:12:43 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2025_12`
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
                count(*) AS Totaldays FROM maxwell_attendance_2025_12 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'm0896'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'm0896') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'm0896'
ERROR - 2025-01-04 13:12:46 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2025_12`
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
                count(*) AS Totaldays FROM maxwell_attendance_2025_12 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'm0896'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'm0896') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'm0896'
ERROR - 2025-01-04 13:12:47 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2025_12`
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
                count(*) AS Totaldays FROM maxwell_attendance_2025_12 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'm0896'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'm0896') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'm0896'
ERROR - 2025-01-04 13:12:47 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2025_12`
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
                count(*) AS Totaldays FROM maxwell_attendance_2025_12 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code where mx_attendance_emp_code = 'm0896'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = 'm0896') GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_emp_code` = 'm0896'
ERROR - 2025-01-04 16:33:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-04'
AND `mxesi_affect_to` >= '2025-01-04'
AND FIND_IN_SET(, mxesi_emp_types) > 0
