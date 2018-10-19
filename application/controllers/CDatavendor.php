<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDatavendor extends CI_Controller {

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
		$this->load->model('MDatavendor');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("CLogin"));
		}
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['data'] = $this->MDatavendor->getData();
		$this->load->view('datavendor',$data);
		$this->load->view('body/footer');
	}
    
    public function delete()
	{
		$id_master=$this->uri->segment(3);
		$where = array ('id_vendor' => $id_vendor);
		$hasil=$this->MData->delete($where,'asset.asset_vendor');
		if($hasil) {
			echo "
			<script>
			alert('Sebuah vendor berhasil dihapus');
				document.location.href='".base_url('CDatavendor')."';
			</script>
			";
		}
	}
}
