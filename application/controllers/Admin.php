<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_user','user');
         if (!$this->session->userdata('login_id')) {
         	redirect('Login');
         }
    }
	public function index()
	{
		$data['page'] ='admin/pages/dashboard';
		$this->load->view('admin/index',$data);
	}
}
