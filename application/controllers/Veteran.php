<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veteran extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('number','global','form'));
		$this->load->library(array('parser','Utils','form_validation'));
		$this->load->model('M_login');
		$this->auth->cek_auth();

		$this->veteran = $this->load->database('veteran', TRUE);
    }

    public function index()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Statistik & Chart Veteran Berdasarkan Babin - Sistem Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'veteran/index';
		$data['modules'] 		= 'veteran';
		$data['tahun'] 			= date('Y');
		$data['babin'] 			= '';

		$data['data'] 			= $this->veteran->query("
								SELECT `babin`, COUNT(babin) AS jml, COUNT(kode_kep) AS jml_kep FROM `z_event_eis` GROUP BY `z_event_eis`.`babin` ORDER BY `jml` DESC
								")->result();

		if($data['tahun'])
		{
			$tahun = "AND YEAR(a.`tgl_pengajuan`) = '".$data['tahun']."'";
		} else {
			$tahun = "";
		}
		if($data['babin'])
		{
			$babin = "AND a.`babin` = '".$data['babin']."'";
		} else {
			$babin = "";
		}

		$qry = "SELECT a.`babin`, b.`namababin`, COUNT(a.`babin`) AS jml, COUNT(a.`kode_kep`) AS jml_kep, a.`tgl_pengajuan` 
				FROM `z_event_eis` a
				LEFT JOIN `tbabin` b ON `b`.`babin` = `a`.`babin` WHERE a.`tgl_pengajuan` <> 'NULL' 
				AND a.`babin` <> 'NULL' $tahun $babin
				GROUP BY `a`.`babin`
				ORDER BY b.`urut` ASC";

		$data['list'] = $this->veteran->query($qry)->result();

		$this->load->view('shared/template',$data);
	}

	public function triwulan()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Statistik & Chart Veteran Per-Triwulan - Sistem Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'veteran/triwulan';
		$data['modules'] 		= 'triwulan';
		$data['tahun'] 			= date('Y');
		$data['babin'] 			= '';

		$data['data'] 			= $this->veteran->query("
								SELECT `babin`, COUNT(babin) AS jml, COUNT(kode_kep) AS jml_kep FROM `z_event_eis` GROUP BY `z_event_eis`.`babin` ORDER BY `jml` DESC
								")->result();

		if($data['tahun'])
		{
			$tahun = "AND YEAR(a.`tgl_pengajuan`) = '".$data['tahun']."'";
		} else {
			$tahun = "";
		}
		if($data['babin'])
		{
			$babin = "AND a.`babin` = '".$data['babin']."'";
		} else {
			$babin = "";
		}

		$qry = "SELECT a.`babin`, b.`namababin`, COUNT(a.`babin`) AS jml, a.`tgl_pengajuan` 
				FROM `z_event_eis` a
				LEFT JOIN `tbabin` b ON `b`.`babin` = `a`.`babin` WHERE a.`tgl_pengajuan` <> 'NULL' 
				AND a.`babin` <> 'NULL' $tahun $babin
				GROUP BY `a`.`babin`
				ORDER BY b.`urut` ASC";

		$data['list'] = $this->veteran->query($qry)->result();

		$this->load->view('shared/template',$data);
	}

	public function summary_kep_babin()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= $stat;
		$data['title'] 			= "Page Summary KEP Per-Babin - Sistem Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 'veteran/summary_kep_babin';
		$data['modules'] 		= 'summary_kep_babin';
		$data['tahun'] 			= date('Y');
		$data['babin'] 			= '';

		$data['data'] 			= $this->veteran->query("
								SELECT `babin`, COUNT(babin) AS jml, COUNT(kode_kep) AS jml_kep FROM `z_event_eis` GROUP BY `z_event_eis`.`babin` ORDER BY `jml` DESC
								")->result();

		if($data['tahun'])
		{
			$tahun = "AND YEAR(a.`tgl_pengajuan`) = '".$data['tahun']."'";
		} else {
			$tahun = "";
		}
		if($data['babin'])
		{
			$babin = "AND a.`babin` = '".$data['babin']."'";
		} else {
			$babin = "";
		}

		$qry = "SELECT a.*, b.`babin`, b.`namababin` FROM tkep_baru a LEFT JOIN tbabin b ON b.`babin`=a.`babin` WHERE YEAR(a.`tanggal`) = '2017' ORDER BY a.`tanggal` DESC";

		$data['list'] = $this->veteran->query($qry)->result();

		/*echo "<pre>";
		var_dump($data['list']);
		echo "</pre>"; 
		die();*/

		$this->load->view('shared/template',$data);
	}
}
