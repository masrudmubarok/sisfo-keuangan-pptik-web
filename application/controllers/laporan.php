<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Laporan_model');
	}

	public function index(){
		$param['main_content'] = 'laporan/list';
		$param['page_title'] = 'Data Laporan';
		$param['lpr_list'] = $this->Laporan_model->getAlllpr();
		$this->load->view('template', $param);
	}

	public function print(){
		$data['main_content'] = 'laporan/list';
		$data['laporan'] = $this->Laporan_model->getAlllpr();
		$data['lpr_jprog'] = $this->Laporan_model->lpr_jprog();
		$data['lpr_ihouse'] = $this->Laporan_model->lpr_ihouse();
		$data['lpr_scourse'] = $this->Laporan_model->lpr_scourse();
		$data['lpr_toeic'] = $this->Laporan_model->lpr_toeic();
		$data['lpr_toefl'] = $this->Laporan_model->lpr_toefl();
		$data['lpr_icert'] = $this->Laporan_model->lpr_icert();
		$data['lpr_lain'] = $this->Laporan_model->lpr_lain();
		$data['tot_masuk'] = $this->Laporan_model->tot_masuk();
		$data['tot_keluar'] = $this->Laporan_model->tot_keluar();
		$this->load->view('laporan/print',$data);
	}

}