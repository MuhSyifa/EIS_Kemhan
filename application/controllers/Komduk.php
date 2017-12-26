<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komduk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('number','global','form'));
		$this->load->library(array('parser','Utils','form_validation'));
		$this->load->model('M_login');
		$this->auth->cek_auth();

		$this->komduk = $this->load->database('komduk', TRUE);
    }

    function getYear() {
		$year = $this->komduk->query("select max(tahun) as tahun from t_sdm")->row();
		return $year->tahun?$year->tahun:date("Y");
	}

	////////////////////////////////////// SDM //////////////////////////////////
	public function sdm()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdm/sdm';
		$data['modules'] 		= 	'sdm_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * ,b.kd_bidang as kd_kategori, b.nm_bidang as nm_kategori,
								b.title_bidang AS nama 
								FROM m_bidang b LEFT JOIN 
									(SELECT kd_bidang,sum(jml_laki+jml_perempuan) as jumlah 
									FROM t_sdm WHERE 1=1 and kd_bidang in('GARBA','TAHLI','WNL') and tahun='2016' 
									GROUP BY kd_bidang )a 
								ON a.kd_bidang = b.kd_bidang 
								WHERE b.kd_komponen='SDM' ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* 
								from (select kd_prop as kd, kd_kab as kd2, c.nm_kabupaten, b.nm_propinsi,
								sum(CASE WHEN kd_bidang='GARBA' THEN (jml_laki+jml_perempuan) else 0 end) as p1, 
								sum(CASE WHEN kd_bidang='TAHLI' THEN (jml_laki+jml_perempuan) else 0 end) as p2, 
								sum(CASE WHEN kd_bidang='WNL' THEN (jml_laki+jml_perempuan) else 0 end) as p3,
								sum(jml_laki+jml_perempuan) as jumlah 
								from t_sdm 
								left join m_propinsi as b on t_sdm.kd_prop =b.kd_propinsi
								left join m_kabupaten as c on t_sdm.kd_kab=c.kd_wilayah
								where 1=1 and kd_bidang in('GARBA','TAHLI','WNL') and tahun='2016' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function garda_bangsa()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Garda Bangsa Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/garda_bangsa/garda_bangsa';
		$data['modules'] 		= 	'garda_bangsa';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori,b.title_kategori AS nama FROM m_kategori b LEFT JOIN (SELECT kd_bidang,kd_kategori,sum(jml_laki+jml_perempuan) as jumlah FROM t_sdm WHERE 1=1 and kd_bidang='GARBA' and tahun='2015' GROUP BY kd_bidang,kd_kategori )a ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori WHERE b.kd_bidang='GARBA' ORDER BY jumlah DESC")->result();

		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2, c.nm_kabupaten, b.nm_propinsi, sum(CASE WHEN kd_bidang='GARBA' and kd_kategori='PL' THEN (jml_laki+jml_perempuan) else 0 end) as p1, sum(CASE WHEN kd_bidang='GARBA' and kd_kategori='MP' THEN (jml_laki+jml_perempuan) else 0 end) as p2, sum(CASE WHEN kd_bidang='GARBA' and kd_kategori='BD' THEN (jml_laki+jml_perempuan) else 0 end) as p3,sum(jml_laki+jml_perempuan) as jumlah from t_sdm left join m_propinsi as b on t_sdm.kd_prop =b.kd_propinsi
								left join m_kabupaten as c on t_sdm.kd_kab=c.kd_wilayah where 1=1 and kd_bidang='GARBA' and tahun='2015' group by kd,kd2) a ORDER BY `a`.`jumlah`  DESC")->result();

		$this->load->view('shared/template',$data);
	}

	public function tenaga_ahli()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Tenaga Ahli KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/tenaga_ahli/tenaga_ahli';
		$data['modules'] 		= 	'tenaga_ahli';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori,b.title_kategori AS nama FROM m_kategori b LEFT JOIN (SELECT kd_bidang,kd_kategori,sum(jml_laki+jml_perempuan) as jumlah FROM t_sdm WHERE 1=1 and kd_bidang='TAHLI' and tahun='2015' GROUP BY kd_bidang,kd_kategori )a ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori WHERE b.kd_bidang='TAHLI' ORDER BY jumlah DESC")->result();
		//var_dump($data['bidang']); die();

		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,sum(CASE WHEN kd_bidang='TAHLI' and kd_kategori='MD' THEN (jml_laki+jml_perempuan) else 0 end) as p1, sum(CASE WHEN kd_bidang='TAHLI' and kd_kategori='AT' THEN (jml_laki+jml_perempuan) else 0 end) as p2, sum(CASE WHEN kd_bidang='TAHLI' and kd_kategori in('AN','PM','AS','OA') THEN (jml_laki+jml_perempuan) else 0 end) as p3,sum(jml_laki+jml_perempuan) as jumlah from t_sdm left join m_propinsi as b on t_sdm.kd_prop =b.kd_propinsi left join m_kabupaten as c on t_sdm.kd_kab=c.kd_wilayah where 1=1 and kd_bidang='TAHLI' and tahun='2015' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function warga_lainnya()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Warga Lainnya KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/warga_lainnya/warga_lainnya';
		$data['modules'] 		= 	'warga_lainnya';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori,b.title_kategori AS nama FROM m_kategori b LEFT JOIN (SELECT kd_bidang,kd_kategori,sum(jml_laki+jml_perempuan) as jumlah FROM t_sdm WHERE 1=1 and kd_bidang='WNL' and tahun='2016' GROUP BY kd_bidang,kd_kategori )a ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori WHERE b.kd_bidang='WNL' ORDER BY jumlah DESC")->result();
		//var_dump($data['bidang']); die();

		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,sum(CASE WHEN kd_bidang='WNL' and kd_kategori='IP' THEN (jml_laki+jml_perempuan) else 0 end) as p1, sum(CASE WHEN kd_bidang='WNL' and kd_kategori='OR' THEN (jml_laki+jml_perempuan) else 0 end) as p2, sum(CASE WHEN kd_bidang='WNL' and kd_kategori in('HK','VT','PNS','AG','PR','ID','SB','EK') THEN (jml_laki+jml_perempuan) else 0 end) as p3,sum(jml_laki+jml_perempuan) as jumlah from t_sdm left join m_propinsi as b on t_sdm.kd_prop =b.kd_propinsi left join m_kabupaten as c on t_sdm.kd_kab=c.kd_wilayah where 1=1 and kd_bidang='WNL' and tahun='2016' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}
	////////////////////////////////////// End SDM //////////////////////////////////

	////////////////////////////////////// SDAB //////////////////////////////////
	public function sdab()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Padi Palawija Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/pp';
		$data['modules'] 		= 	'sdab_pp_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM 
								(SELECT kd_bidang,kd_kategori,sum(jml_produksi) as jumlah FROM t_sda_palawija WHERE 1=1 and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from 
								(select kd_prop as kd,kd_kab as kd2, c.nm_kabupaten, b.nm_propinsi,
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='PD' THEN (jml_produksi) else 0 end) as padi, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='JG' THEN (jml_produksi) else 0 end) as jagung, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='KD' THEN (jml_produksi) else 0 end) as kedelai, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='KH' THEN (jml_produksi) else 0 end) as kacang_hijau, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='KT' THEN (jml_produksi) else 0 end) as kacang_tanah, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='UJ' THEN (jml_produksi) else 0 end) as ubi_jalar, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori='UK' THEN (jml_produksi) else 0 end) as ubi_kayu, 
								sum(CASE WHEN kd_bidang='PP' and kd_kategori in('UK','UJ','KT','KD','KH') THEN (jml_produksi) else 0 end) as lain,
								sum(jml_produksi) as jumlah from t_sda_palawija 
								left join m_propinsi as b on t_sda_palawija.kd_prop =b.kd_propinsi
								left join m_kabupaten as c on t_sda_palawija.kd_kab=c.kd_wilayah
								where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_hk(){
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Padi Hortikultura Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/hk';
		$data['modules'] 		= 	'sdab_hk_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(jml_produksi) as jumlah FROM t_sda_hortikultura WHERE 1=1 and tahun='2015' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from 
								(select kd_prop as kd,kd_kab as kd2, c.nm_kabupaten, b.nm_propinsi,
								sum(CASE WHEN kd_bidang='HK' and kd_kategori='JR' THEN (coalesce(jml_produksi,0)) else 0 end) as f1, 
								sum(CASE WHEN kd_bidang='HK' and kd_kategori='PSG' THEN (coalesce(jml_produksi,0)) else 0 end) as f2, 
								sum(CASE WHEN kd_bidang='HK' and kd_kategori='JH' THEN (coalesce(jml_produksi,0)) else 0 end) as f3, 
								sum(CASE WHEN kd_bidang='HK' and kd_kategori='KG' THEN (coalesce(jml_produksi,0)) else 0 end) as f4,
								sum(coalesce(jml_produksi,0)) as jumlah 
								from t_sda_hortikultura 
								left join m_propinsi as b on t_sda_hortikultura .kd_prop =b.kd_propinsi
								left join m_kabupaten as c on t_sda_hortikultura .kd_kab=c.kd_wilayah
								where 1=1 and tahun='2015' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_kebun(){
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Padi Perkebunan Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/kebun';
		$data['modules'] 		= 	'sdab_kebun_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(jml_produksi) as jumlah FROM t_sda_perkebunan WHERE 1=1 and tahun='2015' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from 
								(select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
								sum(CASE WHEN kd_bidang='PB' and kd_kategori='KP' THEN (coalesce(jml_produksi,0)) else 0 end) as f1, sum(CASE WHEN kd_bidang='PB' and kd_kategori='TEH' THEN (coalesce(jml_produksi,0)) else 0 end) as f2, sum(CASE WHEN kd_bidang='PB' and kd_kategori='KLP' THEN (coalesce(jml_produksi,0)) else 0 end) as f3, sum(CASE WHEN kd_bidang='PB' and kd_kategori='KLS' THEN (coalesce(jml_produksi,0)) else 0 end) as f4,sum(coalesce(jml_produksi,0)) as jumlah 
								from t_sda_perkebunan 
								left join m_propinsi as b on t_sda_perkebunan.kd_prop =b.kd_propinsi
								left join m_kabupaten as c on t_sda_perkebunan.kd_kab=c.kd_wilayah
								where 1=1 and tahun='2015' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_peternakan()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Peternakan Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/peternakan';
		$data['modules'] 		= 	'sdab_peternakan_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(produksi,0)) as jumlah FROM t_sda_peternakan WHERE 1=1 and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from 
								(select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
								sum(CASE WHEN kd_bidang='PT' and kd_kategori in ('SP','SPR','KB') THEN (coalesce(produksi,0)) else 0 end) as f1, 
								sum(CASE WHEN kd_bidang='PT' and kd_kategori in ('KMB','DMB') THEN (coalesce(produksi,0)) else 0 end) as f2, 
								sum(CASE WHEN kd_bidang='PT' and kd_kategori in ('AP','AB','AD','ITIK') THEN (coalesce(produksi,0)) else 0 end) as f3, 
								sum(CASE WHEN kd_bidang='PT' and kd_kategori in ('KDA') THEN (coalesce(produksi,0)) else 0 end) as f4,
								sum(coalesce(produksi,0)) as jumlah 
								from t_sda_peternakan
								left join m_propinsi as b on t_sda_peternakan.kd_prop =b.kd_propinsi
								left join m_kabupaten as c on t_sda_peternakan.kd_kab=c.kd_wilayah 
								where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_ind_perkebunan()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Industri Perkebunan Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/ind_perkebunan';
		$data['modules'] 		= 	'sdab_ind_perkebunan_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(produksi,0)) as jumlah FROM t_sda_industri_perkebunan WHERE 1=1 and tahun='2015' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='HI' and kd_kategori='KS' THEN 1 else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='HI' and kd_kategori='KR' THEN 1 else 0 end) as f2, 
			sum(CASE WHEN kd_bidang='HI' and kd_kategori='KD' THEN 1 else 0 end) as f3,count(idx) as jumlah 
			from t_sda_industri_perkebunan
			left join m_propinsi as b on t_sda_industri_perkebunan.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_industri_perkebunan.kd_kab=c.kd_wilayah 
			where 1=1 and tahun='2015' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_ind_perikanan()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Industri Perikanan Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/ind_perikanan';
		$data['modules'] 		= 	'sdab_ind_perikanan_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(produksi,0)) as jumlah FROM t_sda_industri_perikanan WHERE 1=1 and kd_bidang='IP' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='IP' THEN (coalesce(produksi,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='IP' THEN (coalesce(volume,0)) else 0 end) as f2,count(idx) as jumlah 
			from t_sda_industri_perikanan
			left join m_propinsi as b on t_sda_industri_perikanan.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_industri_perikanan.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='IP' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_listrik()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Listrik Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/listrik';
		$data['modules'] 		= 	'sdab_listrik_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(produksi,0)) as jumlah FROM t_sda_listrik WHERE 1=1 and kd_bidang='LI' and tahun='2015' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTMH' THEN (coalesce(produksi,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTPG' THEN (coalesce(produksi,0)) else 0 end) as f2, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTUM' THEN (coalesce(produksi,0)) else 0 end) as f3, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTUGA' THEN (coalesce(produksi,0)) else 0 end) as f4, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTUB' THEN (coalesce(produksi,0)) else 0 end) as f5, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTD' THEN (coalesce(produksi,0)) else 0 end) as f6, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTDR' THEN (coalesce(produksi,0)) else 0 end) as f7, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTGM' THEN (coalesce(produksi,0)) else 0 end) as f8, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTGG' THEN (coalesce(produksi,0)) else 0 end) as f9, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTGUM' THEN (coalesce(produksi,0)) else 0 end) as f10, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTMG' THEN (coalesce(produksi,0)) else 0 end) as f11, 
			sum(CASE WHEN kd_bidang='LI' and kd_kategori='PLTS' THEN (coalesce(produksi,0)) else 0 end) as f12,
			sum(coalesce(produksi,0)) as jumlah from t_sda_listrik
			left join m_propinsi as b on t_sda_listrik.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_listrik.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='LI' and tahun='2015' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_bbm()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan BBM Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/bbm';
		$data['modules'] 		= 	'sdab_bbm_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(produksi,0)) as jumlah FROM t_sda_bbm WHERE 1=1 and kd_bidang='BBM' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2, c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='AFGAS' THEN (coalesce(produksi,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='AFTUR' THEN (coalesce(produksi,0)) else 0 end) as f2, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='SOLAR48' THEN (coalesce(produksi,0)) else 0 end) as f3, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='KEROSIN' THEN (coalesce(produksi,0)) else 0 end) as f4, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='BENSIN95' THEN (coalesce(produksi,0)) else 0 end) as f5, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='PREMIUM' THEN (coalesce(produksi,0)) else 0 end) as f6, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='IDO' THEN (coalesce(produksi,0)) else 0 end) as f7, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='MB' THEN (coalesce(produksi,0)) else 0 end) as f8, 
			sum(CASE WHEN kd_bidang='BBM' and kd_kategori='NAPTHA' THEN (coalesce(produksi,0)) else 0 end) as f9,
			sum(coalesce(produksi,0)) as jumlah from t_sda_bbm
			left join m_propinsi as b on t_sda_bbm.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_bbm.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='BBM' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_mineral_ra()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Mineral Radio Aktif Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/mineral_ra';
		$data['modules'] 		= 	'sdab_mineral_ra_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(sumber_daya,0)) as jumlah FROM t_sda_mineral WHERE 1=1 and kd_bidang='RA' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='RA' and kd_kategori='UR' THEN (coalesce(sumber_daya,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='RA' and kd_kategori='AND' THEN (coalesce(sumber_daya,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='RA' and kd_kategori='BAS' THEN (coalesce(sumber_daya,0)) else 0 end) as f3,
			sum(coalesce(sumber_daya,0)) as jumlah from t_sda_mineral
			left join m_propinsi as b on t_sda_mineral.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_mineral.kd_kab=c.kd_wilayah  
			where 1=1 and kd_bidang='RA' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_mineral_logam()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Mineral Logam Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/mineral_logam';
		$data['modules'] 		= 	'sdab_mineral_logam_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(sumber_daya,0)) as jumlah FROM t_sda_mineral WHERE 1=1 and kd_bidang='LG' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("select a.* from (select kd_prop as kd,kd_kab as kd2, c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='EMAS' THEN (coalesce(sumber_daya,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='TB' THEN (coalesce(sumber_daya,0)) else 0 end) as f2, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='BS' THEN (coalesce(sumber_daya,0)) else 0 end) as f3, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='MG' THEN (coalesce(sumber_daya,0)) else 0 end) as f4, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='SENG' THEN (coalesce(sumber_daya,0)) else 0 end) as f5, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='BA' THEN (coalesce(sumber_daya,0)) else 0 end) as f6, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='ANT' THEN (coalesce(sumber_daya,0)) else 0 end) as f7, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='CIN' THEN (coalesce(sumber_daya,0)) else 0 end) as f8, 
			sum(CASE WHEN kd_bidang='LG' and kd_kategori='BAR' THEN (coalesce(sumber_daya,0)) else 0 end) as f9,
			sum(coalesce(sumber_daya,0)) as jumlah from t_sda_mineral 
			left join m_propinsi as b on t_sda_mineral.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_mineral.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='LG' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_mineral_nonlogam()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Mineral Non Logam Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/mineral_nonlogam';
		$data['modules'] 		= 	'sdab_mineral_nonlogam_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(sumber_daya,0)) as jumlah FROM t_sda_mineral WHERE 1=1 and kd_bidang='NL' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='MIKA' THEN (coalesce(sumber_daya,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='BG' THEN (coalesce(sumber_daya,0)) else 0 end) as f2, 
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='KAO' THEN (coalesce(sumber_daya,0)) else 0 end) as f3, 
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='BAL' THEN (coalesce(sumber_daya,0)) else 0 end) as f4, 
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='PK' THEN (coalesce(sumber_daya,0)) else 0 end) as f5, 
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='INT' THEN (coalesce(sumber_daya,0)) else 0 end) as f6, 
			sum(CASE WHEN kd_bidang='NL' and kd_kategori='KK' THEN (coalesce(sumber_daya,0)) else 0 end) as f7,
			sum(coalesce(sumber_daya,0)) as jumlah from t_sda_mineral
			left join m_propinsi as b on t_sda_mineral.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_mineral.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='NL' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sdab_mineral_batuan()
	{
	 	$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sumber Daya Manusia Dan Buatan Mineral Batuan Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sdab/mineral_batuan';
		$data['modules'] 		= 	'sdab_mineral_batuan_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,sum(coalesce(sumber_daya,0)) as jumlah FROM t_sda_mineral WHERE 1=1 and kd_bidang='BT' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='BT' and kd_kategori='SIR' THEN (coalesce(sumber_daya,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='BT' and kd_kategori='PSU' THEN (coalesce(sumber_daya,0)) else 0 end) as f2,
			sum(coalesce(sumber_daya,0)) as jumlah from t_sda_mineral
			left join m_propinsi as b on t_sda_mineral.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sda_mineral.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='BT' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}
	////////////////////////////////////// END SDAB //////////////////////////////////

	////////////////////////////////////// SARPRAS //////////////////////////////////
	public function sarpras_in()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Industri Nasional Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/industri_nasional';
		$data['modules'] 		= 	'sarpras_industri_nasional_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.ur_kbli2 AS nama FROM (SELECT substr(kbli,1,2) as kd_kbli,count(idx) as jumlah FROM t_sarpras_industri_nasional WHERE 1=1 GROUP BY substr(kbli,1,2))a LEFT JOIN m_kbli2 b ON a.kd_kbli=b.kd_kbli2 ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,c.nm_kabupaten, b.nm_propinsi,
			sum(CASE WHEN kd_bidang='IN' and substr(kbli,1,2)='10' THEN 1 else 0 end) as makanan, 
			sum(CASE WHEN kd_bidang='IN' and substr(kbli,1,2)='11' THEN 1 else 0 end) as minuman, 
			sum(CASE WHEN kd_bidang='IN' and (substr(kbli,1,2) not in('10','11')) THEN 1 else 0 end) as lain,count(idx) as jumlah 
			from t_sarpras_industri_nasional 
			left join m_propinsi as b on t_sarpras_industri_nasional .kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_industri_nasional .kd_kab=c.kd_wilayah 
			where 1=1 group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_lbb()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Logistik Bahan Bakar Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/logistik_bb';
		$data['modules'] 		= 	'sarpras_logistik_bb_komduk';
		$data['bidang'] 	= 	$this->komduk->query("select sum(coalesce(pertamina_bumn,0)+coalesce(pertamina_bumd,0)+coalesce(pertamina_bump,0)+coalesce(pertamina_swst,0)) as pertamina, sum(coalesce(spbu_bumn,0)+coalesce(spbu_bumd,0)+coalesce(spbu_bump,0)+coalesce(spbu_swst,0)) as spbu from t_sarpras_darat_bbm where 1=1 and tahun='2017'")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.*,
			pertamina+spbu as jumlah from 
			(select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(coalesce(pertamina_bumn,0)+coalesce(pertamina_bumd,0)+coalesce(pertamina_bump,0)+coalesce(pertamina_swst,0)) as pertamina, sum(coalesce(spbu_bumn,0)+coalesce(spbu_bumd,0)+coalesce(spbu_bump,0)+coalesce(spbu_swst,0)) as spbu 
			from t_sarpras_darat_bbm 
			left join m_propinsi as b on t_sarpras_darat_bbm.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_darat_bbm.kd_kab=c.kd_wilayah
			where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);	
	}


	public function sarpras_fk()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Fasilitas Komunikasi Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/fk';
		$data['modules'] 		= 	'sarpras_fk_komduk';
		$data['bidang'] 	= 	$this->komduk->query("select sum(coalesce(relay_bumn,0)+coalesce(relay_bumd,0)+coalesce(relay_bump,0)+coalesce(relay_swst,0)) as relay, sum(coalesce(pos_bumn,0)+coalesce(pos_bumd,0)+coalesce(pos_bump,0)+coalesce(pos_swst,0)) as pos, sum(coalesce(expedisi_bumn,0)+coalesce(expedisi_bumd,0)+coalesce(expedisi_bump,0)+coalesce(expedisi_swst,0)) as expedisi from t_sarpras_darat_kom where 1=1 and tahun='2017'")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.*,
			relay+pos+expedisi as jumlah from 
			(select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(coalesce(relay_bumn,0)+coalesce(relay_bumd,0)+coalesce(relay_bump,0)+coalesce(relay_swst,0)) as relay, sum(coalesce(pos_bumn,0)+coalesce(pos_bumd,0)+coalesce(pos_bump,0)+coalesce(pos_swst,0)) as pos, sum(coalesce(expedisi_bumn,0)+coalesce(expedisi_bumd,0)+coalesce(expedisi_bump,0)+coalesce(expedisi_swst,0)) as expedisi from t_sarpras_darat_kom
			left join m_propinsi as b on t_sarpras_darat_kom.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_darat_kom.kd_kab=c.kd_wilayah 
			where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_sp()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Stasiun Pemancar Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/sp';
		$data['modules'] 		= 	'sarpras_sp_komduk';
		$data['bidang'] 	= 	$this->komduk->query(" select 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='RADIO' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as radio, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='TV' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as tv, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='SB' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as bumi, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item in ('RADIO','TV','SB') THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as total 
			from t_sarpras_darat where 1=1 and tahun='2017'")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.*,radio+tv+bumi as jumlah 
			from (select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='RADIO' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as radio, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='TV' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as tv, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='SB' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as bumi 
			from t_sarpras_darat 
			left join m_propinsi as b on t_sarpras_darat.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_darat.kd_kab=c.kd_wilayah
			where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_rt()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Radio Transmisi Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/rt';
		$data['modules'] 		= 	'sarpras_rt_komduk';
		$data['bidang'] 	= 	$this->komduk->query("select sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='STT' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as stt, sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='RAPI' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as rapi, sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='ORARI' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as orari from t_sarpras_darat where 1=1 and tahun='2017'")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.*,stt+rapi+orari as jumlah 
			from (select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='STT' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as stt, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='RAPI' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as rapi, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KOM' and kd_item='ORARI' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as orari 
			from t_sarpras_darat 
			left join m_propinsi as b on t_sarpras_darat.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_darat.kd_kab=c.kd_wilayah
			where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_id()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Industri Darat Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/id';
		$data['modules'] 		= 	'sarpras_id_komduk';
		$data['bidang'] 	= 	$this->komduk->query("select sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IOT' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1, sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IKOM' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2, sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='ITX' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3, sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IBJ' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4, sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IKM' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f5 from t_sarpras_darat where 1=1 and tahun='2017'")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.*,f1+f2+f3+f4+f5 as jumlah 
			from (select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IOT' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IKOM' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='ITX' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IBJ' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='IND' and kd_item='IKM' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f5 
			from t_sarpras_darat
			left join m_propinsi as b on t_sarpras_darat.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_darat.kd_kab=c.kd_wilayah 
			where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_rs()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Rumah Sakit Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/rs';
		$data['modules'] 		= 	'sarpras_rs_komduk';
		$data['bidang'] 	= 	$this->komduk->query("select sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IA' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1, sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IIB' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2, sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IIIC' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3, sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IVD' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4 from t_sarpras_darat where 1=1 and tahun='2017'")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.*,f1+f2+f3+f4 as jumlah 
			from (select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IA' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IIB' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IIIC' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3, 
			sum(CASE WHEN kd_bidang='DR' and kd_kategori='KES' and kd_item='IVD' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4 
			from t_sarpras_darat
			left join m_propinsi as b on t_sarpras_darat.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_darat.kd_kab=c.kd_wilayah 
			where 1=1 and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_il()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Industri Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/il';
		$data['modules'] 		= 	'sarpras_il_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='IPK' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2, b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='IPK' and kd_item='DOK' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='IPK' and kd_item='GAL' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='LT' and kd_kategori='IPK' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_pel_pelayanan_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Pelayanan Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_pelayanan_laut';
		$data['modules'] 		= 	'sarpras_pel_pelayanan_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PPY%' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPYPK' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPYPU' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah  
			where 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PPY%' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_pel_pelayaran_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Pelayaran Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_pelayaran_laut';
		$data['modules'] 		= 	'sarpras_pel_pelayaran_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PPL%' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPLPN' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPLPR' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPLPS' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut 
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PPL%' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_pel_singgah_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Kapal Singgah Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_kapal_singgah_laut';
		$data['modules'] 		= 	'sarpras_pel_kapal_singgah_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PKS%' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PKSPL' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PKSPP' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PKS%' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_pel_perikanan_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Perikanan Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_perikanan_laut';
		$data['modules'] 		= 	'sarpras_pel_perikanan_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PPK%' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPKN' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPKP' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLB' and kd_item='PPKS' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut 
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='LT' and kd_kategori='PLB' and kd_item like 'PPK%' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_perahu_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Perahu Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_perahu_laut';
		$data['modules'] 		= 	'sarpras_pel_perahu_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='PRH' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PRH' and kd_item='PRHKR' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PRH' and kd_item='PRHLY' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PRH' and kd_item='PRHPM' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut 
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='LT' and kd_kategori='PRH' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_kapal_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Kapal Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_kapal_laut';
		$data['modules'] 		= 	'sarpras_pel_kapal_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='KPL' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='KPL' and kd_item='KPLKB' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='KPL' and kd_item='KPLKP' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='KPL' and kd_item='KPLKR' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='KPL' and kd_item='KPLKW' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut 
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='LT' and kd_kategori='KPL' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_layanan_kapal_laut()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Pelabuhan Layanan Kapal Laut Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/pel_layanan_kapal_laut';
		$data['modules'] 		= 	'sarpras_pel_layanan_kapal_laut_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_laut WHERE 1=1 and kd_bidang='LT' and kd_kategori='PLK' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLK' and kd_item='PLKKK' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLK' and kd_item='PLKKP' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLK' and kd_item='PLKTA' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(CASE WHEN kd_bidang='LT' and kd_kategori='PLK' and kd_item='PLKTD' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_laut 
			left join m_propinsi as b on t_sarpras_laut.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_laut.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='LT' and kd_kategori='PLK' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_bbm_udara()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana BBM Udara Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/bbm_udara';
		$data['modules'] 		= 	'sarpras_bbm_udara_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_udara WHERE 1=1 and kd_bidang='UD' and kd_kategori='DBB' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='DBB' and kd_item='AVIGAS' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='DBB' and kd_item='AVTUR' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='DBB' and kd_item='PEL' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_udara 
			left join m_propinsi as b on t_sarpras_udara.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_udara.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='UD' and kd_kategori='DBB' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_bandara_udara()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Bandara Udara Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/bandara_udara';
		$data['modules'] 		= 	'sarpras_bandara_udara_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_kategori AS nama FROM (SELECT kd_bidang,kd_kategori,count(idx) as jumlah FROM t_sarpras_bandara WHERE 1=1 and kd_bidang='UD' and kd_kategori='BD' and tahun='2017' GROUP BY kd_bidang,kd_kategori )a LEFT JOIN m_kategori b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='BD' THEN 1 else 0 END) as f1,count(idx) as jumlah 
			from t_sarpras_bandara 
			left join m_propinsi as b on t_sarpras_bandara.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_bandara.kd_kab=c.kd_wilayah
			where 1=1 and kd_bidang='UD' and kd_kategori='BD' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_fasilitas_lain_udara()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Fasilitas Lainnya Udara Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/fasilitas_lain_udara';
		$data['modules'] 		= 	'sarpras_fasilitas_lain_udara_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_udara WHERE 1=1 and kd_bidang='UD' and kd_kategori='FL' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='FL' and kd_item='FHG' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='FL' and kd_item='FRD' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='FL' and kd_item='FRS' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f3,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='FL' and kd_item='FSM' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f4,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_udara
			left join m_propinsi as b on t_sarpras_udara.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_udara.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='UD' and kd_kategori='FL' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}

	public function sarpras_angkatan_udara()
	{
		$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
		$data = array(
			'username'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');

		$data['level']			= 	$stat;
		$data['title'] 			=	"Dashboard Sarana Prasarana Angkatan Udara Page KOMDUK - Lab Simulasi Siber Pothan ke Daerah";
		$data['content'] 		= 	'komduk/sarpras/angkatan_udara';
		$data['modules'] 		= 	'sarpras_angkatan_udara_komduk';
		$data['bidang'] 	= 	$this->komduk->query("SELECT a. * , b.nm_item AS nama FROM (SELECT kd_bidang,kd_kategori,kd_item,sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah FROM t_sarpras_udara WHERE 1=1 and kd_bidang='UD' and kd_kategori='AU' and tahun='2017' GROUP BY kd_bidang,kd_kategori,kd_item )a LEFT JOIN m_item b ON a.kd_bidang = b.kd_bidang and a.kd_kategori=b.kd_kategori and a.kd_item=b.kd_item ORDER BY jumlah DESC")->result();
		$data['data_provinsi']	= $this->komduk->query("
			select a.* from (select kd_prop as kd,kd_kab as kd2,b.nm_propinsi, c.nm_kabupaten,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='AU' and kd_item='FW' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f1,
			sum(CASE WHEN kd_bidang='UD' and kd_kategori='AU' and kd_item='RW' THEN (coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) else 0 end) as f2,
			sum(coalesce(bumn,0)+coalesce(bumd,0)+coalesce(bump,0)+coalesce(swst,0)) as jumlah 
			from t_sarpras_udara
			left join m_propinsi as b on t_sarpras_udara.kd_prop =b.kd_propinsi
			left join m_kabupaten as c on t_sarpras_udara.kd_kab=c.kd_wilayah 
			where 1=1 and kd_bidang='UD' and kd_kategori='AU' and tahun='2017' group by kd,kd2) a order by jumlah desc")->result();

		$this->load->view('shared/template',$data);
	}
}
