<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy_model extends CI_Model {

	/**
	 * Fetch all active policies
	 */
	public function get_all_policies()
	{
		return $this->db
			->where('status', 1)
			->order_by('id', 'ASC')
			->get('maxwell_employees_policies')
			->result();
	}

	/**
	 * Get acknowledged policy IDs for employee
	 */
	public function get_acknowledged_policy_ids($emp_id)
	{
		$sql =  $this->db
			->select('policy_id_fk')
			->where('mx_emp_id_fk', $emp_id)
			->get('maxwell_employees_policy_activity');
		// echo $this->db->last_query();exit();
			return $sql->result_array();

		//return array_column($rows, 'policy_id_fk');
	}

	/**
	 * Check duplicate
	 */
	public function is_already_acknowledged($emp_id, $policy_id)
	{
		return $this->db
				->where('mx_emp_id_fk', $emp_id)
				->where('policy_id_fk', $policy_id)
				->count_all_results('maxwell_employees_policy_activity') > 0;
	}

	/**
	 * Save acknowledgment
	 */
	public function save_acknowledgment($data)
	{
		return $this->db->insert(
			'maxwell_employees_policy_activity',
			$data
		);
	}

	public function pendingPolicies($emp_id)
	{
		// Total active policies
		$total = $this->db
			->where('status', 1) // if you have status column
			->count_all_results('maxwell_employees_policies'); // master policy table

		// Policies acknowledged by employee
		$acknowledged = $this->db
			->where('mx_emp_id_fk', $emp_id)
			->count_all_results('maxwell_employees_policy_activity');

		//echo $total."-----".$acknowledged;exit();

		return max(0, $total - $acknowledged);
	}

}
