<?php
class c_riwayat extends CI_Controller{
    function index(){
        $data['brem'] = $this->M_inputBrem->tampil('datapesanan');
        $this->load->view('v_riwayat', $data);
        $this->load->view('V_footer');
    }
}

?>