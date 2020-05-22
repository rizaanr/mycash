<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['item_m', 'category_m', 'unit_m']);
        $this->load->library('form_validation');
		
    }

    public function index()
	{
		$data['row'] = $this->item_m->get();
		$this->template->load('template','produk/item/item_data', $data);
    }
    
    
    public function add()
    {
        $item = new stdClass();
        $item->item_id = null;
        $item->name = null;
        $item->barcode = null;
        $item->price = null;
        $item->category_id = null;
        $item->unit_id = null;

        $querycategory = $this->category_m->get()->result();
        $qwunit = $this->unit_m->get()->result();

        $data = array(
            'page' => 'add',
            'row' => $item,
            'category' => $querycategory,
            'uniti' => $qwunit,
        );
        $this->template->load('template','produk/item/form', $data);
    }
    
    public function edit($id)
    {
        $query = $this->item_m->get($id);
        if ($query->num_rows() > 0) {
            $item = $query->row();
            $querycategory = $this->category_m->get();
            $qwunit = $this->unit_m->get();

            $data = array(
                'page' => 'edit',
                'row' => $item,
                'category' => $querycategory,
                'unit' => $qwunit,
            );
            $this->template->load('template','produk/item/form', $data);
        }else{
            echo "<script>alert('Data tidak ditemukan');</script>";
            echo "<script>window.location='".site_url('item')."'</script>";
        }
    }
    
    public function process()
    {
        $config['upload_path']          = './uploads/products';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            if ($this->item_m->check_barcode($post['barcode'])->num_rows() > 0) {
                $this->session->set_flashdata('barkot', "Barcode $post[barcode] sudah dipakai barang lain");
                redirect('item/add');
            }else{
                if (@$_FILES['image']['name'] != null) {
                    if ($this->upload->do_upload('image')) {
                        $post['image'] = $this->upload->data('file_name');
                        $this->item_m->add($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('success', 'Data berhasil disimpan');
                        }
                        redirect('item');
                    }else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('barkot', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image'] = null;
                        $this->item_m->add($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('success', 'Data berhasil disimpan');
                        }
                        redirect('item');
                }
            }
            // edit
        }else if (isset($_POST['edit'])) {
            if ($this->item_m->check_barcode($post['barcode'], $post['id'])->num_rows() > 0) {
                $this->session->set_flashdata('barkot', "Barcode $post[barcode] sudah dipakai barang lain");
                redirect('item/edit/'.$post['id']);
            }else{
                if (@$_FILES['image']['name'] != null) {
                    if ($this->upload->do_upload('image')) {

                        $item = $this->item_m->get($post['id'])->row();
                        if($item->images != null){
                            $targetFile = './uploads/products/'.$item->images;
                            unlink($targetFile);
                        }

                        $post['image'] = $this->upload->data('file_name');
                        $this->item_m->edit($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('success', 'Data berhasil disimpan');
                        }
                        redirect('item');
                    }else {
                        $error == $this->upload->display_errors();
                        $this->session->set_flashdata('barkot', $error);
                        redirect('item/edit');
                    }
                } else {
                    $post['image'] = null;
                        $this->item_m->edit($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('success', 'Data berhasil disimpan');
                        }
                        redirect('item');
                }
            
            }
        }
        
        
        
    }
    
    public function del($id)
    {

        $item = $this->item_m->get($id)->row();
        if($item->images != null){
            $targetFile = './uploads/products/'.$item->images;
            unlink($targetFile);
        }
        $this->item_m->del($id);
    
        if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('delete', 'Data berhasil dihapus');
            }
            redirect('item');
    }
}