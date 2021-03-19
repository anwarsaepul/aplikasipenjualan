<?php 
class Model_barang extends CI_Model
{
    function getDataBarang()
    {
        return $this->db->get('barang_master');
    }
}