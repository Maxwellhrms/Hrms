<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-29 10:30:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-03-29'
AND `mxesi_affect_to` >= '2025-03-29'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-03-29 11:01:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-03-29'
AND `mxesi_affect_to` >= '2025-03-29'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-03-29 11:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
ERROR - 2025-03-29 11:57:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
ERROR - 2025-03-29 12:02:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
ERROR - 2025-03-29 18:03:10 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:08:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:08:10 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18144
ERROR - 2025-03-29 18:08:10 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1071
ERROR - 2025-03-29 18:08:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1078
ERROR - 2025-03-29 18:08:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1079
ERROR - 2025-03-29 18:08:10 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:08:10 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:13:10 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18144
ERROR - 2025-03-29 18:13:10 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1059
ERROR - 2025-03-29 18:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:13:10 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18147
ERROR - 2025-03-29 18:13:10 --> Severity: Notice --> Undefined variable: filename /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1073
ERROR - 2025-03-29 18:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1079
ERROR - 2025-03-29 18:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1086
ERROR - 2025-03-29 18:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1087
ERROR - 2025-03-29 18:13:10 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:18:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:18:10 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
ERROR - 2025-03-29 18:18:10 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1059
ERROR - 2025-03-29 18:18:11 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1059
ERROR - 2025-03-29 18:18:11 --> Severity: Notice --> Undefined variable: filename /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1073
ERROR - 2025-03-29 18:18:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1079
ERROR - 2025-03-29 18:18:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1086
ERROR - 2025-03-29 18:18:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1087
ERROR - 2025-03-29 18:18:11 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:21:05 --> Severity: Notice --> Undefined variable: filename /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 682
ERROR - 2025-03-29 18:21:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 688
ERROR - 2025-03-29 18:21:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 695
ERROR - 2025-03-29 18:21:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 696
ERROR - 2025-03-29 18:21:05 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:22:40 --> Severity: Notice --> Undefined variable: saltype /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 647
ERROR - 2025-03-29 18:22:40 --> Severity: Notice --> Undefined variable: emp_code /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 647
ERROR - 2025-03-29 18:22:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1070
ERROR - 2025-03-29 18:22:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1077
ERROR - 2025-03-29 18:22:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1078
ERROR - 2025-03-29 18:22:41 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:23:11 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
ERROR - 2025-03-29 18:23:11 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1059
ERROR - 2025-03-29 18:23:11 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1071
ERROR - 2025-03-29 18:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1078
ERROR - 2025-03-29 18:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1079
ERROR - 2025-03-29 18:23:11 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:25:37 --> Severity: Notice --> Undefined variable: saltype /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 647
ERROR - 2025-03-29 18:25:37 --> Severity: Notice --> Undefined variable: emp_code /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 647
ERROR - 2025-03-29 18:27:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:27:41 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18159
ERROR - 2025-03-29 18:27:41 --> Severity: Notice --> Undefined variable: emp_code /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 647
ERROR - 2025-03-29 18:28:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:28:11 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18129
ERROR - 2025-03-29 18:28:11 --> Severity: Notice --> ob_end_clean(): failed to delete buffer. No buffer to delete /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1071
ERROR - 2025-03-29 18:28:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1078
ERROR - 2025-03-29 18:28:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/application/controllers/Export_paysheet.php 1079
ERROR - 2025-03-29 18:28:11 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:29:54 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 18:33:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:33:11 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
ERROR - 2025-03-29 18:34:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 18:34:54 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18147
ERROR - 2025-03-29 18:59:43 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 19:04:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 19:04:43 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18147
ERROR - 2025-03-29 19:04:43 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 16542
ERROR - 2025-03-29 19:09:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-29 19:09:43 --> Severity: Error --> Maximum execution time of 300 seconds exceeded /home/maxwellhrms/public_html/application/libraries/tcpdf/tcpdf.php 18146
