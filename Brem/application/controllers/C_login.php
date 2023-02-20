<?php
class C_login extends CI_Controller
{
    function index()
    {
        $this->load->model('M_login');
        $this->load->view('V_login');
        if ($_POST) {
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');

            $login = $this->M_login->ceklogin(['username' => $user]);

            // Validasi
            if ($login) {
                if ($login->password== $pass) {
                    $sesi =[
                        'nama' =>$user->name
                    ];
                    $this->session->set_userdata($sesi);
                    redirect(base_url().'C_beranda');
                }
            } else {
                echo "<script>alert('name dan password salah');</script>";
            }

        }
    }
    function logout (){
        session_destroy();
        redirect('./');
    }
}
