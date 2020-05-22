<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['pass']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['cus_name'],
            'sex' => $post['gender'],
            'telp' => $post['telp'],
            'addr' => $post['address'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('customer_id', $post['id']);
        $this->db->update('customer', $params);
    }

    public function del($id)
	{
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    public function add($post)
    {
        $params = [
            'email' => $post['email'],
            'username' => $post['username'],
            'call_name' => $post['cname'],
            'address' => $post['address'],
            'telp' => $post['telp'],
            'sex' => $post['gender'],
            'name' => $post['name'],
            'lvl' => $post['lvl'],
            'password' => $post['password'],
        ];
        $this->db->insert('user', $params);
    }
}