<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('role')==1){
			redirect('admin');
		}
	}
	public function index()
	{
		if($this->input->post('login')){
			$this->db->where(array('user'=>$_POST['user'],'pass'=>sha1($_POST['pass'])));
			$row = $this->db->get('login')->row_array();
			if($row){
				$userdata = array('id_user'=>$row['id_user'],'role'=>$row['role'],'login'=>'true');
				$this->session->set_userdata($userdata);
				redirect('admin');
			}else{
				$this->session->set_userdata('msg',"<div class='alert alert-danger'>Username Atau Password Salah</div>");
			}
		}
		$this->load->view('login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */