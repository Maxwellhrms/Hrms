<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policies_model extends CI_Model {

    private $table = "maxwell_employees_policies";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Kolkata');
    }

    public function getAll()
    {
        return $this->db->order_by("id", "DESC")->get($this->table)->result();
    }

    public function getById($id)
    {
        return $this->db->where("id", $id)->get($this->table)->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateData($id, $data)
    {
        return $this->db->where("id", $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->where("id", $id)->delete($this->table);
    }

}
