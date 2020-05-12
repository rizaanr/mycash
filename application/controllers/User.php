<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('form_validation');
		
    }

	public function index()
	{
		// $this->product_m->get();
		check_not_login();
		$data['row'] = $this->user_m->get();
		$this->template->load('template','user/member', $data);
	}

}
