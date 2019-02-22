<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->load->helper('url');
		// $this->load->library('session');
		
		$this->load->model('model_data');
		
	}
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
	public function login()
	{
		$this->load->view('login');
	}

	public function masuk()
	{
		$data = $this->input->post('nama');
		$cek = $this->model_data->cekkar();

		foreach ($cek as $hasil) {
			if ($hasil->nama == $data) {		
				$this->session->set_userdata('data_kar',$data);
				
				redirect('welcome/halutam','refresh');
					
						
			}
		}
		// redirect('welcome/index');
	}

	public function halutam()
	{
		$this->load->view('halutama');
		
	}

	public function paket()
	{
		$data['data_penghuni'] = $this->model_data->allpenghuni(); 
		$this->load->view('inputpak', $data);
		
	}

	public function prosesinput()
	{
		$isi = $this->input->post('isi');
		$sasaran = $this->input->post('sasaran');
		$tgl = date('d-m-y');
		$penerima = $this->input->post('penerima');
		
		$input = $this->model_data->inputpaket($tgl,$sasaran,$penerima,$isi);
		
		
	}

	public function allpaket()
	{
		$data['isi'] = $this->model_data->alldata();
		$this->load->view('listpaket',$data);
		
	}

	public function inppeng()
	{
		$this->load->view('isipeng');
		
	}

	public function allpeng()
	{
		$data['isi'] = $this->model_data->allpenghuni();
		$this->load->view('listpenghuni',$data);
		
	}

	public function prosespeng()
	{
		$namap = $this->input->post('namap');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');

		$input = $this->model_data->inputpenghuni($namap,$unit,$ktp);
		
	}

	public function editpaket()
	{
		$id = $this->input->get('id');
		$data['isi'] = $this->model_data->detailpaket($id);
		$this->load->view('editpaket', $data);
	}

	public function prosesedit()
	{
		$id = $this->input->post('id');
		$isi = $this->input->post('isipaket');
		$tgl_ambil = date('d-m-y');

		$this->model_data->updatepaket($isi,$tgl_ambil,$id);
	
	}

	public function editpenghuni()
	{
		$id = $this->input->get('id');
		$data['isi'] = $this->model_data->detailpenghuni($id);
		$this->load->view('editpenghuni', $data);
	}

	public function proseseditpeng()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');

		$this->model_data->updatepenghuni($nama,$unit,$id);
	
	}
}