<?php 
	
class M_benefit extends MY_Model{

	function __construct()
    {
        // parent::__construct();
       $this->table  = array(
        	'name' => 'benefit',
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