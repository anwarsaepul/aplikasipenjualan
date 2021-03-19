<?php 

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
    }
    function index()
    {   
        $data['barang'] = $this->Model_barang->getDataBarang()->result();
        $this->template->load('template/template', 'barang/view_barang', $data);
    }
}