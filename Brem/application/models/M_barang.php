<?php
class M_barang extends CI_Model{
    function tampil($barang){
        return $this->db->get($barang);
    }
    function tambah($barang, $field){
        return $this->db->insert($barang,$field);
    }
    function tampil_id($barang, $id){
        return $this->db->get_where($barang, $id);
    }
    function edit($barang, $field, $id){
        $this->db->get_where($id);
        return $this->db->update($barang, $field);
    }
    function hapus($barang, $id){
        return $this->db->delete($barang, $id);
    }
}
?>