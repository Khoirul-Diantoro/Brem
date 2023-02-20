<?php
class c_tampilBarang extends CI_Controller{
    function index(){
        $this->load->model('M_akun');
        $this->load->view('v_dasbord'); Y7
         
        $data['barang'] = $this->M_akun->tampil('barang2')->result();
        $this->load->view('v_tampilBarang', $data);

        if($_POST){
            $field['name'] = $this->input->post('name');
            $field['stok'] = $this->input->post('stok');
            $field['harga'] = $this->input->post('harga');
 
            $this->M_akun->tambah('barang2', $field);
            redirect(base_url().'c_tampilBarang');
         }
    }
    function edit($id){
        $this->load->model('M_akun');
        $this->load->view('v_dasbord');
        $data['barang'] = $this->M_akun->tampil('barang2')->result();
        $kode['id_barang'] = $id;
        $data['edit'] = $this->M_akun->tampil_id('barang2', $kode)->row();
        $this->load->view('v_editBarang', $data );

        if($_POST){
            $field['name'] = $this->input->post('name');
            $field['stok'] = $this->input->post('stok');
            $field['harga'] = $this->input->post('harga');
           
           $this->M_akun->edit('barang2', $field, $kode);
            redirect(base_url().'c_inputBarang');
        }
    }
    function hapus ($id){
        $this->load -> model ('M_akun');
        $kode ['id_barang']=$id;
        $this-> M_akun -> hapus ('barang2',$kode);
        redirect (base_url().'C_tampilBarang');
      }
}
