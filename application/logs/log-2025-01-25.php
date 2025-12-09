<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-25 10:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-25'
AND `mxesi_affect_to` >= '2025-01-25'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-25 12:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-01-25'
AND `mxesi_affect_to` >= '2025-01-25'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-01-25 15:43:25 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessionc8e9a3d051fabd49e59c564d68028d17f970424c /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-01-25 15:43:25 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-01-25 16:56:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Common.php:132) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-01-25 16:56:30 --> Severity: Compile Error --> Cannot declare class Common, because the name is already in use /home/maxwellhrms/public_html/application/controllers/Common.php 132
