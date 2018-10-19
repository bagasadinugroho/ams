<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CNew extends CI_Controller {

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
		$this->load->model('MNew');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("CLogin"));
		}
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['vendor'] = $this->MNew->getVendor();
		$this->load->view('new',$data);
		$this->load->view('body/footer');
    }

    public function registrasi(){
		$id = $this->MNew->getIdRegister()->nextval;
		// var_dump($id); exit;
		$data = array(
		'name_asset' => $this->input->post('name_asset'),
		'sn' => $this->input->post('sn'),
		'merk' => $this->input->post('merk'),
		'model' => $this->input->post('model'),
		'purchasing_date' => $this->input->post('purchasing_date'),
		'status' => $this->input->post('status'),
		'supplier' => $this->input->post('supplier'),
		'attachment' => $this->input->post('attachment')
		);
		$hasil = $this->MNew->doRegister($data);
		if ($hasil) {
			echo "
			<script>	
			alert('Sebuah asset baru berhasil ditambahkan');
				document.location.href='".base_url('CList')."';
			</script>
			";			
		}
	}
}
