<?php
class C_beranda extends CI_Controller{
    function index(){
        $this->load->view('V_header');
        $this->load->view('V_footer');
    }
}
?>