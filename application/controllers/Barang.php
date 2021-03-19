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

    function input_barang()
    {
        $this->template->load('template/template', 'barang/input_barang');

    }

    function simpanbarang()
    {

        $kodebarang = $this->input->post('kodebarang');
        $namabarang = $this->input->post('namabarang');
        $satuan     = $this->input->post('satuan');
        if ($kodebarang == null) {
            $data = 'Data tidak boleh kosong';
            $this->template->load('template/template', 'barang/input_barang', $data);
        } else {

            $data = array(
                'kode_barang'   => $kodebarang,
                'nama_barang'   => $namabarang,
                'satuan'        => $satuan
            );

            $simpan = $this->Model_barang->insertBarang($data);
            if ($simpan == 1) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
                Data Berhasil Disimpan!
              </div>');
              redirect('barang');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="5.7" y1="5.7" x2="18.3" y2="18.3" /></svg>
                Data Gagal Disimpan!
              </div>');
              redirect('barang');
            }
        }
    }
}
