<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fitur extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         if (!$this->session->userdata('login_id')) {
         	redirect('Login');
         }
        $this->field = array(
   			array('label' => 'ID','class'=>'form-control', 'col'=>'col-md-12','type'=>'HIDDEN','name'=>'id', 'table_show'=>'HIDDEN'),
   			array('label' => 'fitur','class'=>'form-control', 'col'=>'col-md-12','type'=>'text','name'=>'fitur','table_show'=>'SHOW'),
   		);
        $this->load->model('M_fitur','fitur');
         
    }
	public function index()
	{
		$data['title_page'] = 'fitur';
		$data['link_form'] = site_url('fitur/form');
		$data['field'] = $this->field;
		$data['fitur'] = $this->fitur->get();
		$data['page'] ='admin/pages/fitur';
		$this->load->view('admin/table',$data);
	}
	public function form($id=0)
	{		
		$data['title_page'] = 'fitur';
		$data['url_save'] = site_url('fitur/save');
		if ($id==0) {
			# code...
			$fitur = array();
		}else{
			$fitur = $this->fitur->by_id($id);
			// print_r($fitur);die;
		}
		$data['form'] = formbuilder($this->field,$fitur);
		$this->load->view('admin/form',$data);
	}
	public function save()
	{
		$post = $this->input->post();
		// print_r($post);
		$data  = array(
			'fitur' =>$post['fitur'],
		);
		if (empty($post['id'])) {
			# code...
			$this->fitur->insert($data);
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di input", "success");</script>');
		}else{
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
			$this->fitur->update($data,$post['id']);
		}
		redirect('fitur');
	}
	public function delete($id=0)
	{
		$this->fitur->delete($id);
		$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
		redirect('fitur');
	}
}
