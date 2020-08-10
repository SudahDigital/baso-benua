<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class benefit extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         if (!$this->session->userdata('login_id')) {
         	redirect('Login');
         }
        $option  = array(
        	array('faficon' =>'fa fa-users' ,'name'=>'<i class="fa fa-users"></i>' ),
        	array('faficon' =>'fa fa-book' ,'name'=>'<i class="fa fa-book"></i>' ), 
        	array('faficon' =>'fa fa-address-book' ,'name'=>'<i class="fa fa-address-book"></i>' ),
        	array('faficon' =>'fa fa-envelope-open-o' ,'name'=>'<i class="fa fa-envelope-open-o"></i>' ),
        	array('faficon' =>'fa fa-phone' ,'name'=>'<i class="fa fa-phone"></i>' ),
        	array('faficon' =>'fa fa-film' ,'name'=>'<i class="fa fa-film"></i>' ),
        	array('faficon' =>'fa fa-gift' ,'name'=>'<i class="fa fa-gift"></i>' ),
        	array('faficon' =>'fa fa-pencil' ,'name'=>'<i class="fa fa-pencil"></i>' ),
        	array('faficon' =>'fa fa-user' ,'name'=>'<i class="fa fa-user"></i>' ), 
        	array('faficon' =>'fa fa-money' ,'name'=>'<i class="fa fa-money"></i>' ), 
        	array('faficon' =>'fa fa-paper-plane' ,'name'=>'<i class="fa fa-paper-plane"></i>' ), 
        	array('faficon' =>'fa fa-photo' ,'name'=>'<i class="fa fa-photo"></i>' ), 
        	array('faficon' =>'fa fa-coffee' ,'name'=>'<i class="fa fa-coffee"></i>' ), 
        	array('faficon' =>'fa fa-comment' ,'name'=>'<i class="fa fa-comment"></i>' ), 
        	array('faficon' =>'fa fa-credit-card' ,'name'=>'<i class="fa fa-credit-card"></i>' ), 
        	array('faficon' =>'fa fa-lightbulb' ,'name'=>'<i class="fa fa-lightbulb-o"></i>' ),
        	array('faficon' =>'fa fa-user-shield' ,'name'=>'<i class="fa fa-user-shield"></i>' ),
        );
        $this->field = array(
   			array('label' => 'ID','class'=>'form-control', 'col'=>'col-md-12','type'=>'HIDDEN','name'=>'id', 'table_show'=>'HIDDEN'),
   			array('label' => 'name','class'=>'form-control', 'col'=>'col-md-12','type'=>'text','name'=>'name','table_show'=>'SHOW'),
   			array('label' => 'descriptios','class'=>'form-control', 'col'=>'col-md-12','type'=>'TEXTAREA','name'=>'descriptios','table_show'=>'SHOW'),
   			array('label' => 'icon','class'=>'form-control', 'col'=>'col-md-4','type'=>'RADIO','name'=>'icon','table_show'=>'SHOW','option'=>$option,'key_value'=>'faficon','key_label'=>'name'),
   		);
        $this->load->model('M_benefit','benefit');
         
    }
	public function index()
	{
		$data['title_page'] = 'benefit';
		$data['link_form'] = site_url('benefit/form');
		$data['field'] = $this->field;
		$data['benefit'] = $this->benefit->get();
		$data['page'] ='admin/pages/benefit';
		$this->load->view('admin/table',$data);
	}
	public function form($id=0)
	{		
		$data['title_page'] = 'benefit';
		$data['url_save'] = site_url('benefit/save');
		if ($id==0) {
			# code...
			$benefit = array();
		}else{
			$benefit = $this->benefit->by_id($id);
			// print_r($benefit);die;
		}
		$data['form'] = formbuilder($this->field,$benefit);
		$this->load->view('admin/form',$data);
	}
	public function save()
	{
		$post = $this->input->post();
		// print_r($post);
		$data  = array(
			'name' =>$post['name'],
			'descriptios' =>$post['descriptios'],
			'icon' =>$post['icon'],
		);
		if (empty($post['id'])) {
			# code...
			$this->benefit->insert($data);
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di input", "success");</script>');
		}else{
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
			$this->benefit->update($data,$post['id']);
		}
		redirect('benefit');
	}
	public function delete($id=0)
	{
		$this->benefit->delete($id);
		$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
		redirect('benefit');
	}
}
