<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->eis_pothan = $this->load->database('eis_pothan', TRUE);
    }

	public function index()
	{
		$data['title'] 				= "Front Page Home - Lab Simulasi Siber Pothan ke Daerah";
		$data['data'] 				= 	$this->eis_pothan->query("SELECT * FROM modul")->result();
		$data['data_banner'] 		= 	$this->eis_pothan->query("SELECT * FROM banner WHERE type='header'")->row();
		$data['data_tooltip'] 		= 	$this->eis_pothan->query("SELECT * FROM section WHERE type='tooltip'")->row();
		$data['data_listaplikasi'] 	= 	$this->eis_pothan->query("SELECT * FROM section WHERE type='list aplikasi'")->row();
		$data['data_footer'] 		= 	$this->eis_pothan->query("SELECT * FROM section WHERE type='footer'")->row();
		
		$this->load->view('front_page/index',$data);
	}
}
