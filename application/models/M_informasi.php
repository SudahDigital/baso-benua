<?php 
	
class M_informasi extends MY_Model{

	function __construct()
    {
        // parent::__construct();
       $this->table  = array(
        	'name' => 'informasi',
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