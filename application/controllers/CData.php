<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CData extends CI_Controller {

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
		$this->load->model('MData');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("CLogin"));
		}
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/navbar');
		$this->load->view('body/sidebar');
		$data['data'] = $this->MData->getData();
		$this->load->view('data',$data);
		$this->load->view('body/footer');
	}

	public function broken()
	{
		$id_master=$this->uri->segment(3);
		// var_dump($id_master); exit;
		$status='5';
		$where = array ('id_master' => $id_master);
        $data = array ('status' => $status
		);
		// var_dump($data); die;
        $hasil=$this->MData->update($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sayang sekali, sebuah asset berubah status menjadi rusak.');
				document.location.href='".base_url('CData')."';
			</script>
			";
        }
	}

	// <--Script delete data di DB-->
	// public function delete()
	// {
	// 	$id_master=$this->uri->segment(3);
	// 	$where = array ('id_master' => $id_master);
	// 	$hasil=$this->MData->delete($where,'asset.asset_master');
	// 	if($hasil) {
	// 		echo "
	// 		<script>
	// 		alert('Sebuah asset berhasil dihapus');
	// 			document.location.href='".base_url('CData')."';
	// 		</script>
	// 		";
	// 	}
	// }

	public function delete()
	{
		$id_master=$this->uri->segment(3);
		// var_dump($id_master); exit;
		$status='3';
		$where = array ('id_master' => $id_master);
        $data = array ('status' => $status
		);
		// var_dump($data); die;
        $hasil=$this->MData->update($data, $where);
        if($hasil) {
            echo "
			<script>	
			alert('Sebuah asset berhasil dihapus');
				document.location.href='".base_url('CData')."';
			</script>
			";
        }
	}
}
