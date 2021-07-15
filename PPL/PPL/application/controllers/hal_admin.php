<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

	public function __construct(){
		parent ::__construct();
        $this->load->model('modelku');
        
        if($this->session->userdata('status') != "login"){
            redirect(base_url());
        }
    }

	public function index()
	{
		$dataBarang = $this->modelku->getData("tb_produk");
		$data = array(
			"dataKu" => $dataBarang
		);
		$this->load->view("home",$data);
	}

    public function baca_form(){
        $this->load->view('form_tambah');
    }

    public function grafik(){
        $this->load->view('form_grafik');
    }

    public function tambah_data(){
        $dataInputan = array(
            'no' => $this->input->post('no'),
            'nama_pr' => $this->input->post('nama_pr'),
            'harga_pr' => $this->input->post('harga_pr'),
            'jenis_pr' => $this->input->post('jenis_pr'),
            'stock_pr' => $this->input->post('stock_pr')
		);
		
		$this->modelku->masukkan('tb_produk', $dataInputan);
        redirect(base_url()."index.php/hal_admin/");
    }

    public function delete_data($pointer){
		$data_hapus = array(
			'no' => $pointer 
		);
		$this->modelku->hapus('tb_produk', $data_hapus);
		redirect(base_url()."index.php/hal_admin/");
	}

    public function ambilData($pointer){
		$data_Update = array(
			'no' => $pointer 
		);

		$dataFishlet = $this->modelku->getData_khusus("tb_produk", $data_Update);
 
		$data = array(
			'dataS' => $dataFishlet
		);

		$this->load->view('form_edit', $data);
	}

	public function DataUpdate(){
		$inputanData = array(
			'nama_pr' => $this->input->post('nama_pr'),
            'harga_pr' => $this->input->post('harga_pr'),
            'stock_pr' => $this->input->post('stock_pr'),
            'jenis_pr' => $this->input->post('jenis_pr')
		);
		
		$data_Update = array(
			'no' => $this->input->post('no')
		); 

		$dataFishlet = $this->modelku->perbarui("tb_produk", $inputanData, $data_Update);
		redirect(base_url()."index.php/hal_admin/"); 
	}

	
}
?>