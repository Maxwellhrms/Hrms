<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-23 15:22:30 --> Severity: error --> Exception: Class 'PHPExcel' not found /home/maxwellhrms/public_html/application/controllers/Export_excell_spreadsheet.php 214
ERROR - 2025-03-23 15:31:56 --> Severity: error --> Exception: Class 'PHPExcel' not found /home/maxwellhrms/public_html/application/controllers/Export_excell_spreadsheet.php 326
ERROR - 2025-03-23 15:32:00 --> Severity: error --> Exception: Class 'PHPExcel' not found /home/maxwellhrms/public_html/application/controllers/Export_excell_spreadsheet.php 326
ERROR - 2025-03-23 15:32:10 --> Severity: error --> Exception: Class 'PHPExcel' not found /home/maxwellhrms/public_html/application/controllers/Export_excell_spreadsheet.php 326
ERROR - 2025-03-23 15:58:02 --> Severity: error --> Exception: Invalid cell coordinate C /home/maxwellhrms/public_html/application/libraries/PHPExcel/Classes/PHPExcel/Cell.php 594
ERROR - 2025-03-23 16:52:27 --> Severity: error --> Exception: Call to a member function getPaysheet() on null /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 336
ERROR - 2025-03-23 18:11:28 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT
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
                sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'OH' then 1 else 0 end) AS Optional_Holiday,
                sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half != 'OH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                sum(case when mx_attendance_first_half != 'OH' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
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
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
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
            FROM maxwell_attendance_2024_10
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                where mx_attendance_emp_code = ''
                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = '')
            GROUP BY EmployeeID
ERROR - 2025-03-23 21:38:59 --> Severity: error --> Exception: Invalid cell coordinate ATOTAL /home/maxwellhrms/public_html/application/libraries/PHPExcel/Classes/PHPExcel/Cell.php 594
ERROR - 2025-03-23 22:13:14 --> Severity: Notice --> Undefined variable: saltype /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 641
ERROR - 2025-03-23 22:13:14 --> Severity: Notice --> Undefined variable: emp_code /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 641
ERROR - 2025-03-23 22:13:14 --> Severity: Notice --> Undefined variable: daysInMonth /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 688
ERROR - 2025-03-23 22:13:14 --> Severity: Notice --> Undefined variable: exportType /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1054
ERROR - 2025-03-23 22:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1068
ERROR - 2025-03-23 22:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1071
ERROR - 2025-03-23 22:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1072
ERROR - 2025-03-23 22:18:41 --> Severity: Notice --> Undefined variable: saltype /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 642
ERROR - 2025-03-23 22:18:41 --> Severity: Notice --> Undefined variable: emp_code /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 642
ERROR - 2025-03-23 22:18:41 --> Severity: Notice --> Undefined variable: daysInMonth /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 689
ERROR - 2025-03-23 22:19:12 --> Severity: Notice --> Undefined variable: emp_code /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 642
ERROR - 2025-03-23 22:19:12 --> Severity: Notice --> Undefined variable: daysInMonth /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 689
ERROR - 2025-03-23 22:19:30 --> Severity: Notice --> Undefined variable: daysInMonth /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 689
ERROR - 2025-03-23 22:20:16 --> Severity: Notice --> Undefined variable: exportType /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1077
ERROR - 2025-03-23 22:20:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1100
ERROR - 2025-03-23 22:20:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1103
ERROR - 2025-03-23 22:20:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:20:48 --> Severity: Notice --> Undefined variable: exportType /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1077
ERROR - 2025-03-23 22:20:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1100
ERROR - 2025-03-23 22:20:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1103
ERROR - 2025-03-23 22:20:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:20:51 --> Severity: Notice --> Undefined variable: exportType /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1077
ERROR - 2025-03-23 22:20:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1100
ERROR - 2025-03-23 22:20:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1103
ERROR - 2025-03-23 22:20:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:21:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1078) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1096
ERROR - 2025-03-23 22:21:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1078) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1103
ERROR - 2025-03-23 22:21:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1078) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:21:48 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-23 22:22:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1078) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-23 22:22:18 --> Severity: Error --> Maximum execution time of 30 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
ERROR - 2025-03-23 22:25:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1097
ERROR - 2025-03-23 22:25:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:25:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1105
ERROR - 2025-03-23 22:25:11 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-23 22:28:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1097
ERROR - 2025-03-23 22:28:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:28:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1105
ERROR - 2025-03-23 22:28:29 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-23 22:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-23 22:30:11 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
ERROR - 2025-03-23 22:33:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-23 22:33:29 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18144
ERROR - 2025-03-23 22:33:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1097
ERROR - 2025-03-23 22:33:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1104
ERROR - 2025-03-23 22:33:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1105
ERROR - 2025-03-23 22:33:29 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-23 22:38:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php:1091) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-23 22:38:29 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
ERROR - 2025-03-23 22:38:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
ERROR - 2025-03-23 22:51:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
ERROR - 2025-03-23 22:56:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
