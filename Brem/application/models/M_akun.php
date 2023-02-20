<?php
class M_akun extends CI_Model{
    function tampil($akun){
        return $this->db->get($akun);
    }
    function tambah($akun, $field){
        return $this->db->insert($akun,$field);
    }
    function tampil_id($akun, $id){
        return $this->db->get_where($akun, $id);
    }
    function edit($akun, $field, $id){
        $this->db->get_where($id);
        return $this->db->update($akun, $field);
    }
    function hapus($akun, $id){
        return $this->db->delete($akun, $id);
    }
}
?>