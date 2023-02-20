<?php
class c_inputBrem extends CI_Controller{
    function index(){
        $this->load->model('M_inputBrem');
        $data['brem'] = $this->M_inputBrem->tampil('datapesanan')->result();
        $this->load->view('v_inputBrem');
        $this->load->view('v_riwayat', $data );
        
        if($_POST){
           $field['no_tlp'] = $this->input->post('no_tlp');
           $field['alamat'] = $this->input->post('alamat');
           $field['jumlah'] = $this->input->post('jumlah');
           $field['kategori'] = $this->input->post('kategori');
           $field['foto'] = $_FILES['foto'];
           if ($field['foto'] = ''){}else{
               $config['upload_path'] = './assets/image/';
               $config['allowed_types'] = 'jpg|png';

               $this->load->library('upload', $config);
               if(!$this->upload->do_upload('foto')){
                   echo "Upload gagal"; die();
               }else{
                   $field['foto']=$this->upload->data('file_name');
               }
           }

           $this->M_inputBrem->tambah('datapesanan', $field);
           redirect(base_url().'c_inputBrem');
        }
    }
    function edit($id){
        $this->load->model('M_inputBrem');
        $data['brem'] = $this->M_inputBrem->tampil('datapesanan')->result();
        $kode['no_tlp'] = $id;
        $data['edit'] = $this->M_inputBrem->tampil_id('datapesanan', $kode)->row();
        $this->load->view('v_editBrem', $data );

        if($_POST){
            $field['no_tlp'] = $this->input->post('no_tlp');
           $field['alamat'] = $this->input->post('alamat');
           $field['jumlah'] = $this->input->post('jumlah');
           $field['kategori'] = $this->input->post('kategori');
           $field['foto'] = $_FILES['foto'];
           if ($field['foto'] = ''){}else{
               $config['upload_path'] = './assets/image/';
               $config['allowed_types'] = 'jpg|png';

               $this->load->library('upload', $config);
               if(!$this->upload->do_upload('foto')){
                   echo "Upload gagal"; die();
               }else{
                   $field['foto']=$this->upload->data('file_name');
               }
               
           }
           
           $this->M_inputBrem->edit('datapesanan', $field, $kode);
            redirect(base_url().'c_inputBrem');
        }
    }
    function hapus($id){
        $this->load->model('M_inputBrem');
        $kode['no_tlp'] = $id;
        $this->M_inputBrem -> hapus('datapesanan', $kode);
        redirect(base_url().'c_inputBrem');
    }
}
?>