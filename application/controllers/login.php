<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem !!');
//Membuat class Login = karena file'nya bernama Login.php | harus sama !
class Login extends CI_Controller{
    //Membuat fungsi Construc
    public function __construct(){
        parent::__construct();
        //MenLoad model yang berada di Folder Model dan File'nya m_login
        $this->load->model('m_login');
        // Meload Library form_validasi dan session 
        $this->load->library(array('form_validation','session'));
        //Meload database
        $this->load->database();
        //Meload url 
        $this->load->helper('url');   
    }
    //Membuat fungsi index 
    public function index(){
        // membuat session yand di ambil dari userdata dan memberi nama isLogin
        $session = $this->session->userdata('isLogin');
            //jika session salah 
            if($session == FALSE){
                redirect('login/login_form');   
            }else{
                //jika session benar 
                redirect('home');
            }
    }
    //membuat fungsi login_form 
    public function login_form()
    {   
        //memberi validasi pa da username dan password
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');//trim ganti md5 nanti
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        //jika form yang di isi salah , akan kembali lagi ke form_login
        if($this->form_validation->run()==FALSE){
            $this->load->view('form_login');
        }else{
        //jika form yang di isi benar 
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $cek = $this->m_login->ambilPengguna($email, $password, 1);
        if($cek <> 0){
        $this->session->set_userdata('isLogin', TRUE);
        $this->session->set_userdata('email',$email);
        redirect('home');
        }else{
        // jika salah
        ?>
            <script>
            alert('Gagal Login: Cek email dan password anda!');
            history.go(-1);
            </script>
            <?php
            }
        }
    }
    //membuat fungsi keluar /logout 
    public function logout(){
        // menghapus session dan mengembalikan ke login_form
        $this->session->sess_destroy();
        redirect('login/login_form');
    }
}
?>