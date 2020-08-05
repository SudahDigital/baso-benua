<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_user','user');
         
    }
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function act()
	{
		$post = $this->input->post();
		$check = $this->user->login($post['username'],md5($post['password']));
		if (!empty($check)) {
			# code...
			$this->session->set_userdata('login_id',$check['id']);
			$this->session->set_userdata('level',$check['level']);
			$this->session->set_userdata('username',$check['username']);
			$this->session->set_userdata('name',$check['name']);
			$this->session->set_flashdata('msg','<script>swal("Selamat Datang", "", "success");</script>');
			redirect('admin');
		}else{

			$this->session->set_flashdata('msg','<script>swal("OPPS", "Username Atau Password Salah", "error");</script>');
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');

	}
}
