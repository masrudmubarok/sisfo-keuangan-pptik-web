<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Rekening_model');
	}

	public function index(){
		$param['main_content'] = 'rekening/list';
		$param['page_title'] = 'Data Rekening';
		$param['rkn_list'] = $this->Rekening_model->getAllrkn();
		$this->load->view('template', $param);
	}

	public function add_rkn(){
		$param['main_content'] = 'rekening/add';
		$param['page_title'] = 'Tambah Rekening';
		$this->load->view('template', $param);
	}

	public function create(){
		$id_rekening	= $this->input->post('id_rekening');
		$bank = $this->input->post('bank');
		$no_rekening = $this->input->post('no_rekening');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$saldo = $this->input->post('saldo');
		if (empty($id_rekening) || empty($bank) || empty($nama_pemilik) || empty($no_rekening) || empty($saldo)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('rekening/add_rkn');
		} else {
			$data = [
				'id_rekening' => $id_rekening, 
				'bank' => $bank,
				'no_rekening' => $no_rekening,
				'nama_pemilik' => $nama_pemilik,
				'saldo' => $saldo,
			];
			$cek = $this->Rekening_model->insert($data);
			if($cek){
				$this->session->set_flashdata('success_message', 'Data rekening berhasil ditambahkan');
				redirect('Rekening');
			}else{
				$this->session->set_flashdata('error_message', 'Terjadi kesalahan dalam menambahkan data!');
				redirect('Rekening/add_rkn');
			}

		}
	}

	public function edit_rkn($id_rekening){
		$data['main_content'] = 'rekening/edit';
		$data['page_title'] = 'Edit Data Rekening';
		$data['rkn'] = $this->Rekening_model->getrkn($id_rekening);
		$this->load->view('template', $data);
	}

	public function update(){
		$id_rekening	= $this->input->post('id_rekening');
		$bank = $this->input->post('bank');
		$no_rekening = $this->input->post('no_rekening');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$saldo = $this->input->post('saldo');
		if (empty($id_rekening) || empty($bank) || empty($nama_pemilik) || empty($no_rekening) || empty($saldo)) {
			$this->session->set_flashdata('error_message', 'Harap masukkan data dengan benar!');
			redirect('Rekening/edit_rkn/'.$id);
		} else {
			$data = [
				'id_rekening' => $id_rekening, 
				'bank' => $bank,
				'no_rekening' => $no_rekening,
				'nama_pemilik' => $nama_pemilik,
				'saldo' => $saldo,
				];
				$this->Rekening_model->update($id_rekening, $data);
				if($reset == "on"){
					$this->Rekening_model->reset($id_rekening);
				}

				$this->session->set_flashdata('success_message', 'Data rekening berhasil diubah');
				redirect('Rekening');
		}
	}

	public function delete($id_rekening){
		$this->Rekening_model->delete($id_rekening);
		$this->session->set_flashdata('success_message', 'Data rekening berhasil dihapus');
		redirect('Rekening');
	}
}