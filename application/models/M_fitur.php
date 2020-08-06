<?php 
	
class M_fitur extends MY_Model{

	function __construct()
    {
        // parent::__construct();
       $this->table  = array(
        	'name' => 'fitur',
        	'primary_key' => 'id'
        );
         
    }
	public function get()
	{
		$query = $this->db
		->get($this->table['name'])
		->result_array();
		return $query;
	}

}