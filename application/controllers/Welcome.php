<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         add_cookies();
        $this->load->model('M_product','product');
        $this->load->model('M_cart','cart');
        $this->load->model('M_fitur','fitur');
        $this->load->model('M_benefit','benefit');
        $this->load->model('M_informasi','informasi');

         
    }
	public function index()
	{

		$cookie = get_cookies();
		$cart = $this->cart->get($cookie);
		// print_r($cart);die;
		$href = '*hello* Saya Ingin Membeli ';
		$total = 0;
		$jumlah = count($cart);
		if ($jumlah<1) {
			# code...
			$data['link'] =  '<a target="_BLANK" style="display:block" href="#" id="beliFloating" class="btn btn-success"><span class="float-left">0 item | Rp 0</span><span class="float-right"><i class="fa fa-shopping-cart"></i></span></a>';
		}else{
			foreach ($cart as $key => $value) {
				$href .= '*'.$value['name'].'* QTY *'.$value['jumlah'].'*, ';
				$total += $value['total'];
			}
			// echo $href;die;
			$data['link'] =  '<a target="_BLANK" style="display:block" href="https://wa.me/6282125555031?text='.$href.'" id="beliFloating" class="btn btn-success"><span class="float-left">'.$jumlah.' item | Rp '.number_format($total).'</span><span class="float-right"><i class="fa fa-shopping-cart"></i></span></a>';

		}
		$data['product'] = $this->product->get();
		$data['fitur'] = $this->fitur->get();
		$data['benefit'] = $this->benefit->get();
		$data['informasi'] = $this->informasi->get();
		$this->load->view('index',$data);
	}
	public function add()
	{
		$get = $this->input->get();
		// print_r($get);die;
		$product = $this->product->by_id($get['id_product']);
		$cookie = get_cookies();
		$data = array(
			'user' => $cookie,
			'product_id' => $get['id_product'],
			'jumlah' => $get['mount'],
			'total' => $product['harga']*$get['mount'],
			'status' => 'prosses',
		);
		$check = $this->cart->check($get['id_product'],$cookie);
		if (empty($check)) {
			# code...
			$this->cart->insert($data);
		}else{
			$this->cart->update($data,$check['id']);
		}
		$cart = $this->cart->get($cookie);
		// print_r($cart);die;
		$href = '*hello* Saya Ingin Membeli ';
		$total = 0;
		$jumlah = count($cart);
		foreach ($cart as $key => $value) {
			$href .= '*'.$value['name'].'* QTY *'.$value['jumlah'].'*, ';
			$total += $value['total'];
		}
		// echo $href;die;
		$link =  '<a  target="_BLANK" style="display:block" href="https://wa.me/6282125555031?text='.$href.'" id="beliFloating" class="btn btn-success"><span class="float-left">'.$jumlah.' item | Rp '.number_format($total).'</span><span class="float-right"><i class="fa fa-shopping-cart"></i></span></a>';
		echo $link;
	}
}
