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
		check_admin();
		$data['row'] = $this->user_m->get();
		$this->template->load('template','user/user_data', $data);
	}

	public function add()
	{
		$this->template->load('template','user/add_user' );
	}

}
