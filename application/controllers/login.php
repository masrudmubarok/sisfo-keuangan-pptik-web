<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		if($user === "admin" && $pass === "admin"){
			$session = array(
        'who' => "admin",
        'isLogin' => true
      );
			$this->session->set_userdata($session);
			redirect('Welcome');
		}else{
			$this->session->set_flashdata('error_login', 'Username/Password is incorrect!');
			redirect('Welcome');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}