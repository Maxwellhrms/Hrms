<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-23 15:33:59 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session76f88ea6eccffcca95e525d893d6e5408dfada83 /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-05-23 15:33:59 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-05-23 16:04:37 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session2d211a9f7fdae6f216608e2b7b5022033a17979c /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-05-23 16:04:37 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-05-23 18:14:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-23'
AND `mxesi_affect_to` >= '2025-05-23'
AND FIND_IN_SET(, mxesi_emp_types) > 0
