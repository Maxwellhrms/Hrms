<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-25 09:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 09:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 06:52:28 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:52:28 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:52:28 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 06:55:49 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:55:49 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:55:49 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 06:58:34 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:58:34 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:58:34 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 06:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:01:17 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:01:18 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:01:18 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:02:01 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:02:01 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:02:01 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:02:59 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:02:59 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:03:00 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:13:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:13:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:13:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:17:26 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:17:26 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:17:26 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 07:18:56 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:18:56 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 07:18:56 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 17:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:11:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:11:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 11:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-25 11:48:51 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 11:48:52 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-25 17:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:21:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 17:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_emp(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 21:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_testing(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 21:06:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_testing(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
ERROR - 2022-03-25 22:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) N' at line 56 - Invalid query: create table mxsal_test(  mxsal_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,  
            mxsal_emp_code varchar(55) NOT NULL,
            mxsal_year_month INT(11) NOT NULL,
            mxsal_cmp_id INT(11) NOT NULL,
            mxsal_div_id INT(11) NOT NULL,
            mxsal_branch_code INT(11) NOT NULL,
            mxsal_dept_code INT(11) NOT NULL,
            mxsal_grade_code INT(11) NOT NULL,
            mxsal_desg_code INT(11) NOT NULL,
            mxsal_state_code INT(11) NOT NULL,
            mxsal_emp_type INT(11) NOT NULL,
            mxsal_emp_weak_offs INT(11) NOT NULL comment 'sundays',
                       
            
            mxsal_pf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_pension_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_eps_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_edli DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_edli_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_pf_admin DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_esi_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_esi_wages DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_pt DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_lwf_emp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lwf_comp_cont DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_bonus DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_bonus_percentage varchar(10) NOT NULL DEFAULT 0,
            mxsal_gratuity_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_lta_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_mediclaim_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_gross_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_gross DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_net_sal DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_other_allowances DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_basic DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_hra DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_tsp DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_actual_prof_charges DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_total_ded DOUBLE(16,2) NOT NULL DEFAULT '0.00',

            mxsal_ctc DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_tds_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_weak_offs DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_present_days DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_emp_days_in_month DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_miscelleneous_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            mxsal_loan_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00',
            //--------NEW BY SHABABU (12-09-2021)
            mxsal_el_amount DOUBLE(16,2) NOT NULL DEFAULT '0.00' comment 'At fandf we get these amount',
            mxsal_fandf_flag numeric(1) NOT NULL DEFAULT 0 comment 'if fandf completed the flag = 1 if not ie for monthly transacions flag=0',
            mxsal_bank_transfered_flag numeric(1) NOT NULL DEFAULT 0 comment 'if Bank transfer for fandf completed the flag = 1 if not ie for only fanf transacions flag=0',
            //--------END NEW BY SHABABU (12-09-2021)
            mxsal_status numeric(1) NOT NULL DEFAULT 1,
            mxsal_createdby varchar(255) DEFAULT NULL,
            mxsal_createdtime timestamp,
            mxsal_created_ip varchar(150) DEFAULT NULL,
            mxsal_modifyby varchar(255) DEFAULT NULL,
            mxsal_modifiedtime datetime,
            mxsal_modified_ip varchar(150) DEFAULT NULL
          );
