<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-08-24 13:20:31 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session9a0f04fbd9eb010b47f1f490b0c9250e0c6269eb /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-08-24 13:20:31 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-08-24 16:39:07 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance_1970_01' doesn't exist - Invalid query: SELECT
     (
     select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentCL,
    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentSL,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentEL,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentML,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'OH' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentOH,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'OCH' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentOCH,
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
                -- ON DUTY
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                -- END ON DUTY
                -- ON TOUR
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                -- END ON TOUR
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
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS First_Half_Present_OT_Applied,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OT_Applied,
                
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
    FROM maxwell_attendance_1970_01
    INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
     where mx_attendance_emp_code = 'M1143'
    GROUP BY EmployeeID
ERROR - 2025-08-24 16:46:11 --> Query error: Column 'mxfandf_left_comp_id' cannot be null - Invalid query: INSERT INTO `maxwell_fandf_for_left_employee` (`mxfandf_left_emp_code`, `mxfandf_left_comp_id`, `mxfandf_left_div_id`, `mxfandf_left_branch_id`, `mxfandf_left_state_id`, `mxfandf_left_emp_type`, `mxfandf_left_relieve_date`, `mxfandf_left_fandf_date`, `mxfandf_left_earnings_details_1`, `mxfandf_left_earnings_cbs_date_1`, `mxfandf_left_earnings_amount_1`, `mxfandf_left_earnings_details_2`, `mxfandf_left_earnings_cbs_date_2`, `mxfandf_left_earnings_amount_2`, `mxfandf_left_earnings_details_3`, `mxfandf_left_earnings_cbs_date_3`, `mxfandf_left_earnings_amount_3`, `mxfandf_left_earnings_details_4`, `mxfandf_left_earnings_cbs_date_4`, `mxfandf_left_earnings_amount_4`, `mxfandf_left_earnings_details_5`, `mxfandf_left_earnings_cbs_date_5`, `mxfandf_left_earnings_amount_5`, `mxfandf_left_earnings_details_6`, `mxfandf_left_earnings_cbs_date_6`, `mxfandf_left_earnings_amount_6`, `mxfandf_left_earnings_details_7`, `mxfandf_left_earnings_cbs_date_7`, `mxfandf_left_earnings_amount_7`, `mxfandf_left_earnings_details_8`, `mxfandf_left_earnings_cbs_date_8`, `mxfandf_left_earnings_amount_8`, `mxfandf_left_earnings_details_9`, `mxfandf_left_earnings_cbs_date_9`, `mxfandf_left_earnings_amount_9`, `mxfandf_left_earnings_details_10`, `mxfandf_left_earnings_cbs_date_10`, `mxfandf_left_earnings_amount_10`, `mxfandf_left_deduction_details_1`, `mxfandf_left_deduction_amount_1`, `mxfandf_left_deduction_details_2`, `mxfandf_left_deduction_amount_2`, `mxfandf_left_deduction_details_3`, `mxfandf_left_deduction_amount_3`, `mxfandf_left_deduction_details_4`, `mxfandf_left_deduction_amount_4`, `mxfandf_left_deduction_details_5`, `mxfandf_left_deduction_amount_5`, `mxfandf_left_deduction_details_6`, `mxfandf_left_deduction_amount_6`, `mxfandf_left_deduction_details_7`, `mxfandf_left_deduction_amount_7`, `mxfandf_left_deduction_details_8`, `mxfandf_left_deduction_amount_8`, `mxfandf_left_deduction_details_9`, `mxfandf_left_deduction_amount_9`, `mxfandf_left_deduction_details_10`, `mxfandf_left_deduction_amount_10`, `mxfandf_left_total_earnings`, `mxfandf_left_total_deductions`, `mxfandf_left_total_net_pay`, `mxfandf_left_payable_flag`, `mxfandf_left_createdby`, `mxfandf_left_createdtime`, `mxfandf_left_created_ip`) VALUES ('R', NULL, NULL, NULL, NULL, NULL, '1970-01-01', '2025-08-24', ' Unpaid salary for the month of May 2025', '2025-01-01', ' Unpaid salary for the month of May 2025', ' leave encashment ', '2025-05-12', ' 1764', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'testing 123', '10', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '28582', '10', '28572', '0', 'M0009', '2025-08-24 16:46:11', '223.228.114.101')
ERROR - 2025-08-24 17:38:46 --> Severity: error --> Exception: Parent table not found for table cell /home/maxwellhrms/public_html/application/libraries/dompdf/vendor/dompdf/dompdf/src/FrameReflower/TableCell.php 40
ERROR - 2025-08-24 17:39:41 --> Severity: error --> Exception: Parent table not found for table cell /home/maxwellhrms/public_html/application/libraries/dompdf/vendor/dompdf/dompdf/src/FrameReflower/TableCell.php 40
ERROR - 2025-08-24 17:40:04 --> Severity: error --> Exception: Parent table not found for table cell /home/maxwellhrms/public_html/application/libraries/dompdf/vendor/dompdf/dompdf/src/FrameReflower/TableCell.php 40
ERROR - 2025-08-24 17:45:05 --> Severity: error --> Exception: syntax error, unexpected ')' /home/maxwellhrms/public_html/application/models/Salaries_model.php 4812
ERROR - 2025-08-24 17:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-24'
AND `mxesi_affect_to` >= '2025-08-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0
