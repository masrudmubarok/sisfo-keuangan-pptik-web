<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index(){
		$param['main_content'] = 'kategori/list';
		$param['page_title'] = 'Daftar Kategori';
		$param['ktr_list'] = $this->Kategori_model->getAllKtr();
		$this->load->view('template', $param);
	}

	public function add_ktr(){
		$param['main_content'] = 'kategori/add';
		$param['page_title'] = 'Tambah Kategori';
		$this->load->view('template', $param);
	}

	public function create(){
		$kode 	= $this->input->post('kode_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		if (empty($kode) || empty($nama_kategori)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kategori/add_ktr');
		} else {
			$data = [
				'kode_kategori' => $kode, 
				'nama_kategori' => $nama_kategori,
			];
			$cek = $this->Kategori_model->insert($data);
			if($cek){
				$this->session->set_flashdata('success_message', 'Data kategori berhasil ditambahkan');
				redirect('Kategori');
			}else{
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Kategori/add_ktr');
			}

		}
	}

	public function edit_ktr($kode){
		$data['main_content'] = 'kategori/edit';
		$data['page_title'] = 'Edit Data Kategori';
		$data['ktr'] = $this->Kategori_model->getKtr($kode);
		$this->load->view('template', $data);
	}

	public function update(){
		$kode 	= $this->input->post('kode_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$reset = $this->input->post('reset');
		if (empty($kode) || empty($nama_kategori)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Kategori/edit_ktr/'.$kode);
		} else {
			$data = [
				'kode_kategori' => $kode, 
				'nama_kategori' => $nama_kategori,
				];
				$this->Kategori_model->update($kode, $data);
				if($reset == "on"){
					$this->Kategori_model->reset($kode);
				}

				$this->session->set_flashdata('success_message', 'Data kategori berhasil diubah');
				redirect('Kategori');
		}
	}

	public function delete($kode){
		$this->Kategori_model->delete($kode);
		$this->session->set_flashdata('success_message', 'Data kategori berhasil dihapus');
		redirect('Kategori');
	}
}