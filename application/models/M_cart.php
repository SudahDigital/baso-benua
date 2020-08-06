<?php 
	
class M_cart extends MY_Model{

	function __construct()
    {
        // parent::__construct();
       $this->table  = array(
        	'name' => 'cart',
        	'primary_key' => 'id'
        );
         
    }
	public function get($user)
	{
		$query = $this->db
		->join('product','product.id = cart.product_id')
		->where('user',$user)
		->get($this->table['name'])
		->result_array();
		return $query;
	}
	public function check($product_id,$user)
	{
		$query = $this->db
		->where('user',$user)
		->where('product_id',$product_id)
		->where('status','prosses')
		->get($this->table['name'])
		->row_array();
		return $query;
	}


}