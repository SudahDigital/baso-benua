<?php 
	
class MY_Model extends CI_Model{


	public function delete($id)
	{
		$this->db
		->where($this->table['primary_key'],$id)
		->delete($this->table['name']);
	}
	public function update($data,$id)
	{
		$this->db
		->where($this->table['primary_key'],$id)
		->update($this->table['name'],$data);
	}
	public function insert($data)
	{
		$this->db
		->insert($this->table['name'],$data);
	}
	public function count()
	{
		return $this->db->count_all($this->table['name']);
	}
	public function by_id($id)
	{
		$query = $this->db
		->where($this->table['primary_key'],$id)
		->get($this->table['name'])->row_array();
		return $query;
	}
	public function insert_batch($data)
	{
		$this->db->insert_batch($this->table['name'], $data);
	}

}