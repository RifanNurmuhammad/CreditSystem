<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	  {
		parent::__construct();
		//mengambil library session
		 $this->load->library(array('session'));
		 //mengambil url di helper
		 $this->load->helper('url');
		 // mengambil m_login yang berada di folder model yang tadi di buat
		 $this->load->model('m_login');
		//mengambil database
		 $this->load->database();
		  
		  
	  }
	public function index()
	{
	 //membuat session , jika session salah
		if($this->session->userdata('isLogin') == FALSE)
		{
		//kembali ke login
		  redirect('login/login_form');
		}else //jika session benar masuk ke m_login
		{
		 
		  $this->load->model('m_login');
		   
		  $user = $this->session->userdata('email');
		  //mengambil level saat di sesssion
		  $data['level'] = $this->session->userdata('level');        
		  $data['pengguna'] = $this->m_login->dataPengguna($user);
		  //membuka home
		  redirect('home/dashboard');
		}
	   
	}
	
	public function dashboard()
	{
		if($this->session->userdata('isLogin') == FALSE)
		{
		//kembali ke login
		  redirect('login/login_form');
		}else //jika session benar masuk ke m_login
		{
			 $this->load->model('m_login');
		   
		  $user = $this->session->userdata('email');
		  //mengambil level saat di sesssion
		  $data['level'] = $this->session->userdata('level');        
		  $data['pengguna'] = $this->m_login->dataPengguna($user);
		  //membuka home
		  $this->load->template('dashboard', $data);
		}
	}
	public function newcustomer()
	{
	
		if($this->session->userdata('isLogin') == FALSE)
		{
		//kembali ke login
		  redirect('login/login_form');
		}else //jika session benar masuk ke m_login
		{
			 $this->load->model('m_login');
		   
		  $user = $this->session->userdata('email');
		  //mengambil level saat di sesssion
		  $data['level'] = $this->session->userdata('level');        
		  $data['pengguna'] = $this->m_login->dataPengguna($user);
		  //membuka home
		  $this->load->template('newcustomer', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */