<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['item_m', 'supplier_m']);
        
    }

    public function stockInData()
    {
        $this->template->load('template','transaksi/stockin/stockin_data');
    }

    public function stockInAdd()
    {
        $iteme = $this->item_m->get();
        $suple = $this->supplier_m->get()->result();
        $data = ['kokrakenek' => $iteme, 'pleyer' => $suple];
        $this->template->load('template','transaksi/stockin/form', $data);
        
    }

    public function proses()
    {
        if (isset($_POST['inAdd'])) {
            echo 'proses';
        }
    }
}