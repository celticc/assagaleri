<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    // mengakses produk_model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_Model');
        
    }
    
    // menampilkan data di tabel produk
    public function index()
    {
        $data = array(
            'produk' =>$this->Produk_Model->Beranda(),
            'isi' => 'pelanggan/produk'
        );
        $this->load->view('pelanggan/layout/wrapper', $data, FALSE);
    }

}

/* End of file produk.php */
 ?>