<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-08 10:39:21 --> Query error: Column 'mx_loan_master_id' cannot be null - Invalid query: INSERT INTO `maxwell_loan_sal_log` (`mx_loan_emp_id`, `mx_loan_month`, `mx_loan_emi_amount`, `mx_loan_master_id`, `mx_loan_transaction_id`) VALUES ('M0571', '202409', 0, NULL, NULL)
ERROR - 2024-10-08 16:36:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-10-08'
AND `mxesi_affect_to` >= '2024-10-08'
AND FIND_IN_SET(, mxesi_emp_types) > 0
