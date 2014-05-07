<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem !! ');
//membuat suatu class
class M_login extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    // membuat fungsi ambilPengguna
    public function ambilPengguna($email, $password, $status){
        //menselec database codeigniter yang dari tabel cs_admin
        $this->db->select('*');
        $this->db->from('cs_admin');
        // di mana email = $email
        $this->db->where('email', $email);
        // di mana password = $password
        $this->db->where('password', $password);
        // di mana status = $status
        $this->db->where('status', $status);
        // membuat query yang mengambil datase
        $query = $this->db->get();
        // kembali ke query
        return $query->num_rows();
    }   
    public function dataPengguna($email){
        $this->db->select('email');
        $this->db->select('first_name');
        $this->db->select('level');
        $this->db->where('email', $email);
        $query = $this->db->get('cs_admin');
         
        return $query->row();
    }
}