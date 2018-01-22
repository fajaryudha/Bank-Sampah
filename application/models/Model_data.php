<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {

		public function insert($table,$data)
	{
		$query = $this->db->insert($table,$data);
		return $query;
	}
	
	public function select($table)
    {
        $query = $this->db->select('*')
                        ->from($table)
                        ->get();
        return $query->result_array();
    }

    public function select_chart($table)
    {
        $query = $this->db->select('SUM(berat_sampah) as berat_sampah, SUM(poin) as poin, penyetor')
                        ->from($table)
                        ->group_by('penyetor')
                        ->get();
        return $query->result_array();
    }

    public function select_where($table,$where)
    {
    	$query = $this->db->select('*')
    					->from($table)
    					->where($where)
    					->get();
    	return $query->result_array();
    }

    public function select_join($table,$table_join,$join)
    {
    	$query = $this->db->select('*')
                    ->from($table)
                    ->join($table_join, $join, 'inner')
                    ->get();
        return $query->result_array();
    }

    public function select_join_where($table,$table_join,$join,$where)
    {
    	$query = $this->db->select('*')
    					->from($table)
    					->join($table_join, $join, 'inner')
    					->where($where)
    					->get();
    	return $query->result_array();
    }

    public function update($table,$data)
    {
    	$query = $this->db->set($data)
    					->update($table);
    	return $query;
    }

    public function update_where($table,$data,$where)
    {
    	$query = $this->db->set($data)
    					->where($where)
    					->update($table);
    	return $query;
    }

    public function delete($table)
    {
		$query = $this->db->empty_table($table);
		return $query;
    }

    public function delete_where($table,$where) 
    {
    	$query = $this->db->where($where)
                      ->delete($table);
    	return $query;
    }

    public function getstaff($id)
    {
        $query = $this->db->query("SELECT * FROM data_staff WHERE id = '$id'");
        return $query->row();
    }

    public function hapusstaff($id)
    {
        $query = $this->db->query("DELETE FROM data_staff WHERE id = '$id'");
        return $query;
    }

     public function getsampah($id)
    {
        $query = $this->db->query("SELECT * FROM data_sampah WHERE id = '$id'");
        return $query->row();
    }

    public function hapussampah($id)
    {
        $query = $this->db->query("DELETE FROM data_sampah WHERE id = '$id'");
        return $query;
    }
}

/* End of file Model_data.php */
/* Location: ./application/models/Model_data.php */