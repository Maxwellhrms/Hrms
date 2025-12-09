<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-26 00:20:29 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_12' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (PH_Full_Day + First_Half_PH + Second_Half_PH) as PH, (AB_Full_Day + First_Half_AB + Second_Half_AB) as AB, (PR_Full_Day + First_Half_PR + Second_Half_PR) as PR, (CL_Full_Day + First_Half_CL + Second_Half_CL) as CL, (SL_Full_Day + First_Half_SL + Second_Half_SL) as SL, (EL_Full_Day + First_Half_EL + Second_Half_EL) as EL, (OD_Full_Day + First_Half_OD + Second_Half_OD) as OD, (AR_Full_Day + First_Half_AR + Second_Half_AR) as AR, (SHRT_Full_Day + First_Half_SHRT + Second_Half_SHRT) as SHRT, (LOP_Full_Day + First_Half_LOP + Second_Half_LOP) as LOP, (ML_Full_Day + First_Half_ML + Second_Half_ML) as ML, (OT_Full_Day + First_Half_OT + Second_Half_OT) as OT, (OH_Full_Day + First_Half_OH + Second_Half_OH) as OH, (WO_Full_Day + First_Half_WO + Second_Half_WO) as WO, (PH_Full_Day + First_Half_PH + Second_Half_PH +AB_Full_Day + First_Half_AB + Second_Half_AB +PR_Full_Day + First_Half_PR + Second_Half_PR +CL_Full_Day + First_Half_CL + Second_Half_CL +SL_Full_Day + First_Half_SL + Second_Half_SL +EL_Full_Day + First_Half_EL + Second_Half_EL +OD_Full_Day + First_Half_OD + Second_Half_OD +AR_Full_Day + First_Half_AR + Second_Half_AR +SHRT_Full_Day + First_Half_SHRT + Second_Half_SHRT +LOP_Full_Day + First_Half_LOP + Second_Half_LOP +ML_Full_Day + First_Half_ML + Second_Half_ML +OT_Full_Day + First_Half_OT + Second_Half_OT +OH_Full_Day + First_Half_OH + Second_Half_OH +WO_Full_Day + First_Half_WO + Second_Half_WO ) as totaldays
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
ERROR - 2024-12-26 00:20:39 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_2025_01' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, (PH_Full_Day + First_Half_PH + Second_Half_PH) as PH, (AB_Full_Day + First_Half_AB + Second_Half_AB) as AB, (PR_Full_Day + First_Half_PR + Second_Half_PR) as PR, (CL_Full_Day + First_Half_CL + Second_Half_CL) as CL, (SL_Full_Day + First_Half_SL + Second_Half_SL) as SL, (EL_Full_Day + First_Half_EL + Second_Half_EL) as EL, (OD_Full_Day + First_Half_OD + Second_Half_OD) as OD, (AR_Full_Day + First_Half_AR + Second_Half_AR) as AR, (SHRT_Full_Day + First_Half_SHRT + Second_Half_SHRT) as SHRT, (LOP_Full_Day + First_Half_LOP + Second_Half_LOP) as LOP, (ML_Full_Day + First_Half_ML + Second_Half_ML) as ML, (OT_Full_Day + First_Half_OT + Second_Half_OT) as OT, (OH_Full_Day + First_Half_OH + Second_Half_OH) as OH, (WO_Full_Day + First_Half_WO + Second_Half_WO) as WO, (PH_Full_Day + First_Half_PH + Second_Half_PH +AB_Full_Day + First_Half_AB + Second_Half_AB +PR_Full_Day + First_Half_PR + Second_Half_PR +CL_Full_Day + First_Half_CL + Second_Half_CL +SL_Full_Day + First_Half_SL + Second_Half_SL +EL_Full_Day + First_Half_EL + Second_Half_EL +OD_Full_Day + First_Half_OD + Second_Half_OD +AR_Full_Day + First_Half_AR + Second_Half_AR +SHRT_Full_Day + First_Half_SHRT + Second_Half_SHRT +LOP_Full_Day + First_Half_LOP + Second_Half_LOP +ML_Full_Day + First_Half_ML + Second_Half_ML +OT_Full_Day + First_Half_OT + Second_Half_OT +OH_Full_Day + First_Half_OH + Second_Half_OH +WO_Full_Day + First_Half_WO + Second_Half_WO ) as totaldays
FROM `maxwell_attendance_2025_01`
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
                count(*) AS Totaldays, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS PH_Full_Day, sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_PH, sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_PH, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS AB_Full_Day, sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_AB, sum(case when mx_attendance_first_half != 'AB' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS Second_Half_AB, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS PR_Full_Day, sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half != 'PR' then 0.5 else 0 end) AS First_Half_PR, sum(case when mx_attendance_first_half != 'PR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_PR, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS CL_Full_Day, sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_CL, sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_CL, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS SL_Full_Day, sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_SL, sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_SL, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS EL_Full_Day, sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_EL, sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_EL, sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS OD_Full_Day, sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_OD, sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_OD, sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS AR_Full_Day, sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_AR, sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_AR, sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS SHRT_Full_Day, sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_SHRT, sum(case when mx_attendance_first_half != 'SHRT' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS Second_Half_SHRT, sum(case when mx_attendance_first_half = 'LOP' AND mx_attendance_second_half = 'LOP' then 1 else 0 end) AS LOP_Full_Day, sum(case when mx_attendance_first_half = 'LOP' AND mx_attendance_second_half != 'LOP' then 0.5 else 0 end) AS First_Half_LOP, sum(case when mx_attendance_first_half != 'LOP' AND mx_attendance_second_half = 'LOP' then 0.5 else 0 end) AS Second_Half_LOP, sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS ML_Full_Day, sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_ML, sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_ML, sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS OT_Full_Day, sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_OT, sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_OT, sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end) AS OH_Full_Day, sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end) AS First_Half_OH, sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end) AS Second_Half_OH, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS WO_Full_Day, sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 0.5 else 0 end) AS First_Half_WO, sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS Second_Half_WO FROM maxwell_attendance_2025_01 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2024-12-26 00:20:50 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance__' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
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
                count(*) AS Totaldays FROM maxwell_attendance__ INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
GROUP BY `mx_attendance_emp_code`
ERROR - 2024-12-26 09:53:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:54:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:55:01 --> Query error: Column 'mxauth_auth_comp_id' cannot be null - Invalid query: INSERT INTO `maxwell_emp_authorsations` (`mxauth_parent_log_id`, `mxauth_auth_type`, `mxauth_comp_id`, `mxauth_comp_name`, `mxauth_div_id`, `mxauth_div_name`, `mxauth_state_id`, `mxauth_state_name`, `mxauth_branch_id`, `mxauth_branch_name`, `mxauth_dept_id`, `mxauth_dept_name`, `mxauth_emp_code`, `mxauth_auth_comp_id`, `mxauth_auth_comp_name`, `mxauth_auth_div_id`, `mxauth_auth_div_name`, `mxauth_auth_state_id`, `mxauth_auth_state_name`, `mxauth_auth_branch_id`, `mxauth_auth_branch_name`, `mxauth_auth_dept_id`, `mxauth_auth_dept_name`, `mxauth_reporting_head_emp_code`, `mxauth_year_month`, `mxauth_joining_date`, `mxauth_status`, `mxauth_createdby`, `mxauth_createdtime`, `mxauth_created_ip`) VALUES (1451, '1', '1', 'MAXWELL LOGISTICS PRIVATE LIMITED', '2', 'RELOCATION ', '9', 'DELHI', '29', 'DELHI R', '8', NULL, 'M0563', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '201507', '2015-07-01', 1, 'M0009', '2024-12-26 09:55:01', '183.82.105.9')
ERROR - 2024-12-26 09:55:03 --> Query error: Column 'mxauth_auth_comp_id' cannot be null - Invalid query: INSERT INTO `maxwell_emp_authorsations` (`mxauth_parent_log_id`, `mxauth_auth_type`, `mxauth_comp_id`, `mxauth_comp_name`, `mxauth_div_id`, `mxauth_div_name`, `mxauth_state_id`, `mxauth_state_name`, `mxauth_branch_id`, `mxauth_branch_name`, `mxauth_dept_id`, `mxauth_dept_name`, `mxauth_emp_code`, `mxauth_auth_comp_id`, `mxauth_auth_comp_name`, `mxauth_auth_div_id`, `mxauth_auth_div_name`, `mxauth_auth_state_id`, `mxauth_auth_state_name`, `mxauth_auth_branch_id`, `mxauth_auth_branch_name`, `mxauth_auth_dept_id`, `mxauth_auth_dept_name`, `mxauth_reporting_head_emp_code`, `mxauth_year_month`, `mxauth_joining_date`, `mxauth_status`, `mxauth_createdby`, `mxauth_createdtime`, `mxauth_created_ip`) VALUES (1452, '1', '1', 'MAXWELL LOGISTICS PRIVATE LIMITED', '2', 'RELOCATION ', '9', 'DELHI', '29', 'DELHI R', '8', NULL, 'M0563', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '201507', '2015-07-01', 1, 'M0009', '2024-12-26 09:55:03', '183.82.105.9')
ERROR - 2024-12-26 09:55:06 --> Query error: Column 'mxauth_auth_comp_id' cannot be null - Invalid query: INSERT INTO `maxwell_emp_authorsations` (`mxauth_parent_log_id`, `mxauth_auth_type`, `mxauth_comp_id`, `mxauth_comp_name`, `mxauth_div_id`, `mxauth_div_name`, `mxauth_state_id`, `mxauth_state_name`, `mxauth_branch_id`, `mxauth_branch_name`, `mxauth_dept_id`, `mxauth_dept_name`, `mxauth_emp_code`, `mxauth_auth_comp_id`, `mxauth_auth_comp_name`, `mxauth_auth_div_id`, `mxauth_auth_div_name`, `mxauth_auth_state_id`, `mxauth_auth_state_name`, `mxauth_auth_branch_id`, `mxauth_auth_branch_name`, `mxauth_auth_dept_id`, `mxauth_auth_dept_name`, `mxauth_reporting_head_emp_code`, `mxauth_year_month`, `mxauth_joining_date`, `mxauth_status`, `mxauth_createdby`, `mxauth_createdtime`, `mxauth_created_ip`) VALUES (1453, '1', '1', 'MAXWELL LOGISTICS PRIVATE LIMITED', '2', 'RELOCATION ', '9', 'DELHI', '29', 'DELHI R', '8', NULL, 'M0563', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '201507', '2015-07-01', 1, 'M0009', '2024-12-26 09:55:06', '183.82.105.9')
ERROR - 2024-12-26 09:56:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:56:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:56:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:57:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:57:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 09:59:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 10:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 10:02:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 10:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 10:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 10:04:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 10:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 11:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 11:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 12:01:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 12:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 14:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 14:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 14:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 15:02:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 15:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 15:07:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 15:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 15:11:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-26'
AND `mxesi_affect_to` >= '2024-12-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-26 19:54:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1,mxsal_total_ded as total_deduction, mxsal_net_sal as net_sal from mxsal_m inne' at line 1 - Invalid query:  select @serial_number:=@serial_number+1 as serial_number,mxsal_year_month as yearmonth,mxsal_emp_code as emp_code,concat(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxemp_emp_panno as pan,mxemp_emp_uan_number as uan,designation as designation,mxemp_emp_date_of_birth as dob,mxemp_emp_date_of_join as doj,mxemp_emp_resignation_relieving_date as dol,mxsal_actual_basic as basic,mxsal_actual_hra as hra,mxsal_misc_income as misc_income,mxsal_lta_amount as lta_amount,mxsal_mediclaim_amount as mediclaim_amount,mxsal_bonus as bonus,mxsal_incentive_amount as incenti_amount,others as others,others as others,total_sal as total_sal,mxsal_pf_comp_cont as pf,mxsal_esi_comp_cont as esi,mxsal_pt as pt,mxsal_tds_amount as tds,staff advance,others 1,mxsal_total_ded as total_deduction, mxsal_net_sal as net_sal from mxsal_m inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code inner join maxwell_division_master on mxd_id = mxemp_emp_division_code inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code inner join maxwell_state_master on mxst_id = mxemp_emp_state_code left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason inner join (SELECT
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
                FROM maxwell_attendance_2024_11
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance on  EmployeeID = mxsal_emp_code where mxsal_status=1 and mxsal_year_month=202411 and mxsal_cmp_id = 1 UNION ALL select @serial_number:=@serial_number+1 as serial_number,mxsal_year_month as yearmonth,mxsal_emp_code as emp_code,concat(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxemp_emp_panno as pan,mxemp_emp_uan_number as uan,designation as designation,mxemp_emp_date_of_birth as dob,mxemp_emp_date_of_join as doj,mxemp_emp_resignation_relieving_date as dol,mxsal_actual_basic as basic,mxsal_actual_hra as hra,mxsal_misc_income as misc_income,mxsal_lta_amount as lta_amount,mxsal_mediclaim_amount as mediclaim_amount,mxsal_bonus as bonus,mxsal_incentive_amount as incenti_amount,others as others,others as others,total_sal as total_sal,mxsal_pf_comp_cont as pf,mxsal_esi_comp_cont as esi,mxsal_pt as pt,mxsal_tds_amount as tds,staff advance,others 1,mxsal_total_ded as total_deduction, mxsal_net_sal as net_sal from mxsal_md inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code inner join maxwell_division_master on mxd_id = mxemp_emp_division_code inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code inner join maxwell_state_master on mxst_id = mxemp_emp_state_code left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason inner join (SELECT
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
                FROM maxwell_attendance_2024_11
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance on  EmployeeID = mxsal_emp_code where mxsal_status=1 and mxsal_year_month=202411 and mxsal_cmp_id = 1
ERROR - 2024-12-26 20:48:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `a`.`mxps_status` = 1
AND `b`.`mxpsc_status` = 1
AND `b`.`mxpsc_ispf`' at line 5 - Invalid query: SELECT `a`.`mxps_emptype_id`
FROM `maxwell_pay_structure_master` as `a`
INNER JOIN `maxwell_pay_structure_child` as `b` ON `b`.`mxpsc_parent_id` = `a`.`mxps_id`
WHERE `a`.`mxps_affect_from` <= 'first_quarter'
AND `a`.`mxps_affect_to` > `IS` `NULL`
AND `a`.`mxps_status` = 1
AND `b`.`mxpsc_status` = 1
AND `b`.`mxpsc_ispf` = 1
ERROR - 2024-12-26 20:58:19 --> Severity: error --> Exception: syntax error, unexpected '?>', expecting ')' /home/maxwellhrms/public_html/application/views/reports/excelreports/mastersfilters_paystructure.php 78
ERROR - 2024-12-26 20:58:52 --> Severity: error --> Exception: syntax error, unexpected '?>', expecting ')' /home/maxwellhrms/public_html/application/views/reports/excelreports/mastersfilters_paystructure.php 78
ERROR - 2024-12-26 20:59:43 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ',' or ';' /home/maxwellhrms/public_html/application/views/reports/excelreports/mastersfilters_paystructure.php 81
