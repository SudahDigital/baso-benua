<?php 
	
class M_user extends MY_Model{

	function __construct()
    {
        // parent::__construct();
       $this->table  = array(
        	'name' => 'user',
        	'primary_key' => 'id'
        );
         
    }
	public function login($email,$password)
	{
		$query = $this->db
		->where('username',$email)
		->where('password',$password)
		->get($this->table['name'])
		->row_array();
		return $query;
	}
	public function get()
	{
		$query = $this->db
		->get($this->table['name'])
		->result_array();
		return $query;
	}

}