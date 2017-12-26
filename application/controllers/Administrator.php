<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('number','global','form'));
		$this->load->library(array('parser','Utils','form_validation'));
		$this->load->model('M_login');
		$this->auth->cek_auth();
		$this->eis_pothan = $this->load->database('eis_pothan', TRUE);
    }

	public function users()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Administrator Users - Sistem Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'users/index';
		$data['modules'] 		= 'users';
		$data['data'] 			= $this->eis_pothan->query("SELECT * FROM users")->result();

		$this->load->view('shared/template',$data);
	}
}
