<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         if (!$this->session->userdata('login_id')) {
         	redirect('Login');
         }
        $this->field = array(
   			array('label' => 'ID','class'=>'form-control', 'col'=>'col-md-12','type'=>'HIDDEN','name'=>'id', 'table_show'=>'HIDDEN'),
   			array('label' => 'Image','class'=>'form-control', 'col'=>'col-md-12','type'=>'FILE','name'=>'image','table_show'=>'SHOW'),
   			array('label' => 'Name','class'=>'form-control', 'col'=>'col-md-12','type'=>'text','name'=>'name','table_show'=>'SHOW'),
   			array('label' => 'Description','class'=>'form-control', 'col'=>'col-md-12','type'=>'TEXTAREA','name'=>'description','table_show'=>'SHOW'),
   			array('label' => 'Harga','class'=>'form-control', 'col'=>'col-md-12','type'=>'NUMBER','name'=>'harga','table_show'=>'SHOW'),
   		);
        $this->load->model('M_product','product');
         
    }
	public function index()
	{
		$data['title_page'] = 'product';
		$data['link_form'] = site_url('product/form');
		$data['field'] = $this->field;
		$data['product'] = $this->product->get();
		$data['page'] ='admin/pages/product';
		$this->load->view('admin/table',$data);
	}
	public function form($id=0)
	{		
		$data['title_page'] = 'product';
		$data['url_save'] = site_url('product/save');
		if ($id==0) {
			# code...
			$product = array();
		}else{
			$product = $this->product->by_id($id);
			// print_r($product);die;
		}
		$data['form'] = formbuilder($this->field,$product);
		$this->load->view('admin/form',$data);
	}
	public function save()
	{
		$post = $this->input->post();
		// print_r($post);
		$data  = array(
			'name' =>$post['name'],
			'description' =>$post['description'],
			'harga' =>$post['harga'],
		);
		if (!empty($_FILES['image']['name'])) {
			# code...
			$new_name = explode('.', $_FILES['image']['name']);
			$new_name = 'product_'.date('YmdHis').'.'.end($new_name);
			$config['file_name'] 			= $new_name;
			$config['upload_path']          = './assets/img/product/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('image'))
	        {
	                $error = array('error' => $this->upload->display_errors());
	                echo json_encode($error);die;
	        }
	        else
	        {
	                $data['image'] = '/assets/img/product/'.$new_name;
	        }
		}
		if (empty($post['id'])) {

			# code...
			$this->product->insert($data);
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di input", "success");</script>');
		}else{
			$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
			$this->product->update($data,$post['id']);
		}
		redirect('product');
	}
	public function delete($id=0,$product='')
	{
		// delete_files($product);
		$this->product->delete($id);
		$this->session->set_flashdata('msg','<script>swal("Berhasil", "Data berhasil di update", "success");</script>');
		redirect('product');
	}
}
