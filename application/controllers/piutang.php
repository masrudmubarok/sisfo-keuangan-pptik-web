<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Piutang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Piutang_model');
	}

	public function index(){
		$param['main_content'] = 'piutang/list';
		$param['page_title'] = 'Data Piutang';
		$param['ptg_list'] = $this->Piutang_model->getAllptg();
		$this->load->view('template', $param);
	}

	public function add_ptg(){
		$param['main_content'] = 'piutang/add';
		$param['page_title'] = 'Tambah Piutang';
		$this->load->view('template', $param);
	}

	public function create(){
		$tanggal_piutang = $this->input->post('tanggal_piutang');
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');
		if (empty($tanggal_piutang) || empty($keterangan) || empty($nominal)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('piutang/add_ptg');
		} else {
			$data = [
				'tanggal_piutang' => $tanggal_piutang,
				'keterangan' => $keterangan,
				'nominal' => $nominal,
			];
			$cek = $this->Piutang_model->insert($data);
			if($cek){
				$this->session->set_flashdata('success_message', 'Data piutang berhasil ditambahkan');
				redirect('Piutang');
			}else{
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Piutang/add_ptg');
			}

		}
	}

	public function edit_ptg($id_piutang){
		$data['main_content'] = 'piutang/edit';
		$data['page_title'] = 'Edit Data Piutang';
		$data['ptg'] = $this->Piutang_model->getptg($id_piutang);
		$this->load->view('template', $data);
	}

	public function update(){
		$id_piutang = $this->input->post('id_piutang');
		$tanggal_piutang = $this->input->post('tanggal_piutang');
		$keterangan = $this->input->post('keterangan');
		$nominal = $this->input->post('nominal');
		if (empty($id_piutang) || empty($tanggal_piutang) || empty($keterangan) || empty($nominal)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Piutang/edit_ptg/'.$id_piutang);
		} else {
			$data = [
				'id_piutang' => $id_piutang, 
				'tanggal_piutang' => $tanggal_piutang,
				'keterangan' => $keterangan,
				'nominal' => $nominal,
				];
				$this->Piutang_model->update($id_piutang, $data);
				if($reset == "on"){
					$this->Piutang_model->reset($id_piutang);
				}

				$this->session->set_flashdata('success_message', 'Data piutang berhasil diubah');
				redirect('Piutang');
		}
	}

	public function delete($id_piutang){
		$this->Piutang_model->delete($id_piutang);
		$this->session->set_flashdata('success_message', 'Data piutang berhasil dihapus');
		redirect('Piutang');
	}
}