<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tekindhan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('number','global','form'));
		$this->load->library(array('parser','Utils','form_validation'));
		$this->load->model('M_login');
		$this->auth->cek_auth();

		$this->tekindhan = $this->load->database('tekindhan', TRUE);
    }

    public function index()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Statistik & Chart Teknologi dan Industri Pertahanan - Sistem Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'tekindhan/index';
		$data['modules'] 		= 'tekindhan';
		$data['data'] 			= $this->tekindhan->query("SELECT * FROM tb_indhan")->result();
		$data['data_bumn']		= $this->tekindhan->query("SELECT count(*) as total FROM tb_indhan WHERE ketegori='BUMN'")->row();
		$data['data_bums']		= $this->tekindhan->query("SELECT count(*) as total FROM tb_indhan WHERE ketegori='BUMS'")->row();

		$this->load->view('shared/template',$data);
	}
}
