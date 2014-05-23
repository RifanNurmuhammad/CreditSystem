<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class customer extends CI_Controller {

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
		 $this->load->model(array('m_login','globalmodels'));
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
		  $this->load->template('newcustomer', $data);
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
		  $this->parent="newcustomer";
		  $user = $this->session->userdata('email');
		  //mengambil level saat di sesssion
		  $data['level'] = $this->session->userdata('level');        
		  $data['pengguna'] = $this->m_login->dataPengguna($user);
		  $data['parentmenu'] =$this->parent; 

		  //memuat provinsi
		  $fields= "*";
		  $table = "cs_region";
		  $cond  = "ORDER BY region ASC";
		  $data['provinsi']	= $this->globalmodels->selectMultiple($fields, $table, $cond);
		  //membuka home
		  $this->load->template('newcustomer', $data);
		}
	}

	public function getkota($id_provinsi)
	{
		//memuat kota
		$fields	= "*";
		$table 	= "cs_city";
		$cond  	= "WHERE id_region='".$id_provinsi."' ORDER BY city ASC";
		$city 	= $this->globalmodels->selectMultiple($fields, $table, $cond);
		foreach ($city as $key => $value) {
			echo '<option value="'.$value['id_city'].'">'.$value['city'].'</option>';
		}
	}

	public function savecustomer()
	{
		$this->data['idcs_customer_detail'] = strtoupper(uniqid());
		$this->data['first_name'] 			= $this->input->post('nama_depan');
		$this->data['last_name'] 			= $this->input->post('nama_belakang');
		$this->data['birthday'] 			= $this->input->post('tanggal_lahir');
		$this->data['place_of_birth'] 		= $this->input->post('tempat_lahir');
		$this->data['address'] 				= $this->input->post('alamat');
		$this->data['id_region'] 			= $this->input->post('provinsi');
		$this->data['id_city'] 				= $this->input->post('kota');
		$this->data['post_code'] 			= $this->input->post('kode_pos');
		$this->data['no_telp'] 				= $this->input->post('no_telp');
		$this->data['no_hp'] 				= $this->input->post('no_hp');
		$tbl 	= "cs_customer_detail";
        $save 	= $this->globalmodels->insert($tbl);
        if (!empty($save)) {
        	redirect('customer/newcustomer');
        } else {
        	redirect('customer/newcustomer');
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */