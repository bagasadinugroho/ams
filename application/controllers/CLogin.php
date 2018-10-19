<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('MLogin');

		// if($this->session->userdata('status') == "login"){
		// 	redirect(base_url("CDashboard"));
		// }
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('login');
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->MLogin->cek_login("asset.asset_user",$where);
		// var_dump($cek[0]->name); die;
		if(sizeof($cek) > 0){
 
			$data_session = array(
				'nama' => $cek[0]->name,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("CDashboard"));
 
		}else{
			echo "
			<script>	
			alert('Username dan Password salah!');
				document.location.href='".base_url()."';
			</script>
			";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('CLogin'));
	}

}
