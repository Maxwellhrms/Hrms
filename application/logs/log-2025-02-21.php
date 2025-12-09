<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-21 15:20:30 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session3b67a6f54a7da1631c7cd8e20161c3d1436d7eb5 /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-02-21 15:20:30 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-02-21 15:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-21'
AND `mxesi_affect_to` >= '2025-02-21'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-21 15:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-21'
AND `mxesi_affect_to` >= '2025-02-21'
AND FIND_IN_SET(, mxesi_emp_types) > 0
