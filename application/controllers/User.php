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

	public function del($id)
    {
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus')</script>";
            }
            echo "<script>window.location='".site_url('user')."'</script>";
    }

    public function add()
    {
        $user = new stdClass();
		$user->user_id = null;
		$user->name = null;
        $user->username = null;
        $user->telp = null;
        $user->address = null;
		$user->sex = null;
		$user->sha['password'] = null;
		$user->email = null;
		$user->call_name = null;
		$user->lvl = null;
        $data = array(
            'page' => 'add',
            'row' => $user
        );
        $this->template->load('template','user/form', $data);
    }

    public function edit($id)
    {
        $query = $this->user_m->get($id);
        if ($query->num_rows() > 0) {
            $user = $query->row();
            $data = array(
            'page' => 'edit',
            'row' => $user
        );
        $this->template->load('template','user/form', $data);
        }else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='".site_url('user')."'</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->user_m->add($post);
        }else if (isset($_POST['edit'])) {
            $this->user_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan')</script>";
            }
            echo "<script>window.location='".site_url('user')."'</script>";
    
    }

}
