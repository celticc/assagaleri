<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_Model extends CI_Model {

public function __construct()
{
    parent::__construct();
    $this->load->database();
}

public function Beranda()
{
    $this->db->select('*');
    $this->db->from('tb_produk');
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    return $query->result();
}


    

}

/* End of file Produk_Model.php */
 ?>