<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $option  = array(
        	array('id' =>'admin' ,'name'=>'admin' ),
        	array('id' =>'superadmin' ,'name'=>'superadmin' ),
        );
        $this->field = array(
   			array('label' => 'ID','class'=>'form-control', 'col'=>'col-md-12','type'=>'HIDDEN','name'=>'id', 'table_show'=>'HIDDEN'),
   			array('label' => 'Username','class'=>'form-control', 'col'=>'col-md-12','type'=>'text','name'=>'username','table_show'=>'SHOW'),
   			array('label' => 'Name','class'=>'form-control', 'col'=>'col-md-12','type'=>'text','name'=>'name','table_show'=>'SHOW'),
   			array('label' => 'Level','class'=>'form-control', 'col'=>'col-md-12','type'=>'select','name'=>'level','table_show'=>'SHOW','option'=>$option,'key_value'=>'id','key_label'=>'name'),
   			array('label' => 'Password','class'=>'form-control', 'col'=>'col-md-12','type'=>'PASSWORD','name'=>'password', 'table_show'=>'HIDDEN'),
   		);
        $this->load->model('M_user','user');
         
    }
	public function index()
	{
		$data['title_page'] = 'User';
		$data['link_form'] = site_url('user/form');
		$data['field'] = $this->field;
		$data['user'] = $this->user->get();
		$data['page'] ='admin/pages/user';
		$this->load->view('admin/table',$data);
	}
	public function form($id=0)
	{		
		$data['title_page'] = 'User';
		$data['url_save'] = site_url('user/save');
		if ($id==0) {
			# code...
			$user = array();
		}else{
			$user = $this->user->by_id($id);
			// print_r($user);die;
		}
		$data['form'] = formbuilder($this->field,$user);
		$this->load->view('admin/form',$data);
	}
	public function save()
	{
		$post = $this->input->post();
		// print_r($post);
		$data  = array(
			'username' =>$post['username'],
			'name' =>$post['name'],
			'level' =>$post['level'],
		);
		if (empty($post['id'])) {
			# code...
			$data['password'] = md5($post['password']);
			$this->user->insert($data);
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di input", "success");</script>');
		}else{
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
			$this->user->update($data,$post['id']);
		}
		redirect('user');
	}
	public function delete($id=0)
	{
		$this->user->delete($id);
		$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
		redirect('user');
	}
}
