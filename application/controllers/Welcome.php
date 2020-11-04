<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
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
	public function index()
	{
		if ($this->session->userdata('isLogin')){
			$param['main_content'] = 'dashboard';
			$param['page_title'] = 'Dashboard';
			// Data box
			$param['sum_pemasukan'] = $this->Dashboard_model->sum_pemasukan();
			$param['sum_pengeluaran'] = $this->Dashboard_model->sum_pengeluaran();
			$param['get_saldo'] = $this->Dashboard_model->get_saldo();
			$param['sum_piutang'] = $this->Dashboard_model->sum_piutang();
			// Data Charts
			$param['in_agustus'] = $this->Dashboard_model->in_agustus();
			$param['out_agustus'] = $this->Dashboard_model->out_agustus();
			$param['in_september'] = $this->Dashboard_model->in_september();
			$param['out_september'] = $this->Dashboard_model->out_september();
			$param['in_oktober'] = $this->Dashboard_model->in_oktober();
			$param['out_oktober'] = $this->Dashboard_model->out_oktober();
			$param['in_november'] = $this->Dashboard_model->in_november();
			$param['out_november'] = $this->Dashboard_model->out_november();
			$param['in_desember'] = $this->Dashboard_model->in_desember();
			$param['out_desember'] = $this->Dashboard_model->out_desember();
			$param['in_januari'] = $this->Dashboard_model->in_januari();
			$param['out_januari'] = $this->Dashboard_model->out_januari();
			$this->load->view('template',$param);
		} else {
			$this->load->view('login');
		}
	}

}
