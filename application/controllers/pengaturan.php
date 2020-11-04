<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Pengaturan_model');
	}

	public function index(){
		$param['main_content'] = 'pengaturan/list';
		$param['page_title'] = 'Pengaturan';
		$param['row'] = $this->Pengaturan_model->getAllpgt();
		$this->load->view('template', $param);
	}

	public function add_pgt(){
		$param['main_content'] = 'pengaturan/add';
		$param['page_title'] = 'Tambah Rekening';

		$transaksi = new stdClass();
		$transaksi->id_transaksi = null;
		$transaksi->tanggal_transaksi = null;
		$transaksi->keterangan = null;
		$transaksi->pemasukan = null;
		$transaksi->pengeluaran = null;
		$this->load->view('template', $param);
	}

	public function create(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->Pengaturan_model->add($post);
		} else if(isset($_POST['edit'])){
			$this->Pengaturan_model->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('Pengaturan');
	}

	public function edit_rkn($id_rekening){
		$data['main_content'] = 'rekening/edit';
		$data['page_title'] = 'Edit Data Rekening';
		$data['rkn'] = $this->Rekening_model->getrkn($id_rekening);
		$this->load->view('dashboard', $data);
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