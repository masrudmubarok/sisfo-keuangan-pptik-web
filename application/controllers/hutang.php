<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hutang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Hutang_model');
	}

	public function index(){
		$param['main_content'] = 'hutang/list';
		$param['page_title'] = 'Data Hutang';
		$param['htg_list'] = $this->Hutang_model->getAllHtg();
		$this->load->view('template', $param);
	}

	public function add_htg(){
		$param['main_content'] = 'hutang/add';
		$param['page_title'] = 'Tambah Hutang';
		$this->load->view('template', $param);
	}

	public function create(){
		$id	= $this->input->post('id_hutang');
		$tanggal_hutang = $this->input->post('tanggal_hutang');
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');
		if (empty($tanggal_hutang) || empty($keterangan) || empty($nominal)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('hutang/add_htg');
		} else {
			$data = [
				'id_hutang' => $id, 
				'tanggal_hutang' => $tanggal_hutang,
				'keterangan' => $keterangan,
				'nominal' => $nominal,
			];
			$cek = $this->Hutang_model->insert($data);
			if($cek){
				$this->session->set_flashdata('success_message', 'Data hutang berhasil ditambahkan');
				redirect('Hutang');
			}else{
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Hutang/add_htg');
			}

		}
	}

	public function edit_htg($id){
		$data['main_content'] = 'hutang/edit';
		$data['page_title'] = 'Edit Data Hutang';
		$data['htg'] = $this->Hutang_model->getHtg($id);
		$this->load->view('template', $data);
	}

	public function update(){
		$id = $this->input->post('id_hutang');
		$tanggal_hutang = $this->input->post('tanggal_hutang');
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');
		$reset = $this->input->post('reset');
		if (empty($id) || empty($tanggal_hutang) || empty($keterangan) || empty($nominal)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Hutang/edit_htg/'.$id);
		} else {
			$data = [
				'id_hutang' => $id, 
				'tanggal_hutang' => $tanggal_hutang,
				'keterangan' => $keterangan,
				'nominal' => $nominal,
				];
				$this->Hutang_model->update($id, $data);
				if($reset == "on"){
					$this->Hutang_model->reset($id);
				}

				$this->session->set_flashdata('success_message', 'Data hutang berhasil diubah');
				redirect('Hutang');
		}
	}

	public function delete($id){
		$this->Hutang_model->delete($id);
		$this->session->set_flashdata('success_message', 'Data hutang berhasil dihapus');
		redirect('Hutang');
	}
}