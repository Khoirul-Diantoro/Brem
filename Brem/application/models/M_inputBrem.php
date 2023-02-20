<?php
class M_inputBrem extends CI_Model{
    function tampil($brem){
        return $this->db->get($brem);
    }
    function tambah($brem, $field){
        return $this->db->insert($brem,$field);
    }
    function tampil_id($brem, $id){
        return $this->db->get_where($brem, $id);
    }
    function edit($brem, $field, $id){
        $this->db->get_where($id);
        return $this->db->update($brem, $field);
    }
    function hapus($brem, $id){
        return $this->db->delete($brem, $id);
    }
}
?>