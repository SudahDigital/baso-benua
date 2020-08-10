<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         if (!$this->session->userdata('login_id')) {
         	redirect('Login');
         }
        $this->field = array(
   			array('label' => 'ID','class'=>'form-control', 'col'=>'col-md-12','type'=>'HIDDEN','name'=>'id', 'table_show'=>'HIDDEN'),
   			array('label' => 'Informasi','class'=>'form-control', 'col'=>'col-md-12','type'=>'text','name'=>'isi','table_show'=>'SHOW'),
   		);
        $this->load->model('M_informasi','informasi');
         
    }
	public function index()
	{
		$data['title_page'] = 'informasi';
		$data['link_form'] = site_url('informasi/form');
		$data['field'] = $this->field;
		$data['informasi'] = $this->informasi->get();
		$data['page'] ='admin/pages/informasi';
		$this->load->view('admin/table',$data);
	}
	public function form($id=0)
	{		
		$data['title_page'] = 'informasi';
		$data['url_save'] = site_url('informasi/save');
		if ($id==0) {
			# code...
			$informasi = array();
		}else{
			$informasi = $this->informasi->by_id($id);
			// print_r($informasi);die;
		}
		$data['form'] = formbuilder($this->field,$informasi);
		$this->load->view('admin/form',$data);
	}
	public function save()
	{
		$post = $this->input->post();
		// print_r($post);
		$data  = array(
			'isi' =>$post['isi'],
		);
		if (empty($post['id'])) {
			# code...
			$this->informasi->insert($data);
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di input", "success");</script>');
		}else{
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
			$this->informasi->update($data,$post['id']);
		}
		redirect('informasi');
	}
	public function delete($id=0)
	{
		$this->informasi->delete($id);
		$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
		redirect('informasi');
	}
}
