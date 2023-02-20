<?php
class C_service extends CI_Controller{
    function index(){
        $this->load->view('V_service');
        $this->load->view('V_footer');
    }
}

?>