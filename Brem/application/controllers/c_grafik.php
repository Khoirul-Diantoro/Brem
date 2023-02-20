<?php
class c_grafik extends CI_Controller{
    function index(){
        $this->load->view('v_dasbord');
        $this->load->view('v_gf');
    }
}


?>