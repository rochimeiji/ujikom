<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('role')!=1){
			redirect('login');
		}
	}
	function index(){
		$this->load->model('all');
		$this->all->keren();
		$data = array('title'=>'Home','page'=>'home');
		$this->load->view('main',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */