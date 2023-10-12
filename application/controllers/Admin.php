<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
        
    }
    

    public function index()
    {
        $data = array(
            'isi' => 'admin/beranda',
            'total_produk' => $this->Admin_Model->Total_Produk()
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function Data_Produk()
    {
        $data = array(
            'isi' => 'admin/produk',
            'produk' => $this->Admin_Model->Tampil_Produk()
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }



}

/* End of file Admin.php */

?>