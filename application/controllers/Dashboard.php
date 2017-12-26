<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->eis_pothan = $this->load->database('eis_pothan', TRUE);
        $this->load->model('M_login');
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->auth->cek_auth();
    }

	public function index()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Dashboard - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'dashboard/index';

		$this->load->view('shared/template',$data);
	}
}
