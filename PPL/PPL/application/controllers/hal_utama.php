<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_utama extends CI_Controller {

	public function __construct(){
		parent ::__construct();

		$this->load->model('modelku');
	}

	public function index()
	{
        $this->load->view("form_login");
	}

	public function aksi_login()
	{
        $nama = $this->input->post('nama');
        $user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		
		$datapenunjuk = array(
			'user' => $user,
			'pass' => $pass
		);

		$cek = count($this->modelku->getData_khusus("duser", $datapenunjuk));
        
		if($cek > 0){
			$data_session = array(
				'nama' => $user,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url()."index.php/hal_admin");
		}else{
			redirect(base_url());
		}
	}

	public function daftar(){
		$this->load->view("form_daftar");
	}

	public function aksi_daftar(){
        $dataInputan = array(
            'nama' => $this->input->post('nama'),
            'user' => $this->input->post('username'),
            'pass' => md5($this->input->post('password'))
        );
        $this->modelku->masukkan('duser', $dataInputan);
        redirect(base_url(),'refresh');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	

}
?>