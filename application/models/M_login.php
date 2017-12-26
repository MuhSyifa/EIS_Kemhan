<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->eis_pothan = $this->load->database('eis_pothan', TRUE);
		$this->tbl = "users";
	}

	function cek_user($user="",$pass="")
	{
		$query = $this->eis_pothan->get_where($this->tbl,array('username' => $user, 'password' => $pass));
		$query = $query->result_array();
		return $query;
	}
	
	function ambil_user($username)
    {
        $query = $this->eis_pothan->get_where($this->tbl, array('username' => $username));
        $query = $query->result_array();
        if($query){
            return $query[0];
        }
    }
}