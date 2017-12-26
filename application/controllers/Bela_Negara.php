<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bela_Negara extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('number','global','form'));
		$this->load->library(array('parser','Utils','form_validation'));
		$this->load->model('M_login');
		$this->auth->cek_auth();

		$this->belneg = $this->load->database('belneg', TRUE);
    }

    public function index()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Statistik & Chart Bela Negara - Sistem Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'bela_negara/index';
		$data['modules'] 		= 'bela_negara';
		$data['data'] 			= $this->belneg->query("SELECT * FROM db_belneg")->result();
		$data['data_laki2']		= $this->belneg->query("SELECT count(*) as total FROM db_belneg WHERE jeniskelamin='Laki-Laki'")->row();
		$data['data_pr']		= $this->belneg->query("SELECT count(*) as total FROM db_belneg WHERE jeniskelamin='Perempuan'")->row();

		$this->load->view('shared/template',$data);
	}
}
