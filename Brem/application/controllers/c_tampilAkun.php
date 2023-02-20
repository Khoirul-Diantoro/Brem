<?php
class c_tampilAkun extends CI_Controller{
    function index(){
        $this->load->model('M_akun');
        $this->load->view('v_dasbord');
        $data['akun'] = $this->M_akun->tampil('users')->result();
        $this->load->view('v_tampilAkun', $data);

        if($_POST){
            $field['Username'] = $this->input->post('Username');
            $field['Password'] = $this->input->post('Password');
            $field['Name'] = $this->input->post('Name');
 
            $this->M_akun->tambah('users', $field);
            redirect(base_url().'c_tampilAkun');
         }
    }
    function edit($id){
        $this->load->model('M_akun');
        $this->load->view('v_dasbord');
        $data['akun'] = $this->M_akun->tampil('users')->result();
        $kode['username'] = $id;
        $data['edit'] = $this->M_akun->tampil_id('users', $kode)->row();
        $this->load->view('v_editAkun', $data );

        if($_POST){
            $field['Username'] = $this->input->post('Username');
           $field['Password'] = $this->input->post('Password');
           $field['Name'] = $this->input->post('Name');
           
           $this->M_akun->edit('users', $field, $kode);
            redirect(base_url().'c_tampilAkun');
        }
    }
    function hapus($id){
        $this->load->model('M_akun');
        $kode['username'] = $id;
        $this->M_akun-> hapus('users', $kode);
        redirect(base_url().'c_tampilAkun');
    }
}
