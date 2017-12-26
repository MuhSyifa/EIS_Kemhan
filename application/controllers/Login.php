<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->eis_pothan = $this->load->database('eis_pothan', TRUE);
        $this->load->model('M_login');
        $this->load->helper('form');
		$this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = "Page Login - Lab Simulasi Siber Pothan ke Daerah";
		//$this->load->view('login/form',$data);

		$session = $this->session->userdata('isLogin'); //mengabil dari session apakah sudah login atau belum
        if($session == FALSE) //jika session false maka akan menampilkan halaman login
        {
            $this->load->view('login/form',$data);
        }
        else //jika session true maka di redirect ke halaman dashboard
        {
            redirect('dashboard');
        }
	}

	public function do_login()
    {
        $user = $this->input->post("username");
        $pass = $this->input->post("password");
        
        $cek = $this->M_login->cek_user($user,md5($pass)); //melakukan persamaan data dengan database
        if(count($cek) == 1){ //cek data berdasarkan username & pass
            //echo "a"; die();
            foreach ($cek as $cek) {
                $level = $cek['level']; //mengambil data(level/hak akses) dari database
                $nameuser = $cek['name'];
                $username = $cek['username'];
            }
            
            $data = array(
	                'time_login' => date("Y-m-d H:i:s")
	            );
	        
	        $this->eis_pothan->where('username', $username);
	        $this->eis_pothan->update('users', $data);

            $this->session->set_userdata(array(
                'isLogin'   => TRUE, //set data telah login
                'username'  => $username, //set session username
                'lvl'      => $level, //set session hak akses
                'name'     => $nameuser,
            ));

            /*$this->session->set_flashdata('info', '<div class="alert alert-success"><strong>Selamat Datang '. $_SESSION['name'].'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');*/
            $this->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <strong>Selamat Datang '. $_SESSION['name'].'
                    </div>');    
            redirect('dashboard','refresh');  //redirect ke halaman dashboard
        }else{ //jika data tidak ada yng sama dengan database
            echo "<script>alert('Gagal Login!');</script>";
            redirect('login');
        }
    }

    public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
