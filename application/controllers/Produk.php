<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $data = array(
            'isi' => 'pelanggan/produk'
        );
        $this->load->view('pelanggan/layout/wrapper', $data, FALSE);
        
        
    }

}

/* End of file produk.php */
 ?>