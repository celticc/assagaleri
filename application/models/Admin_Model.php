<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

public function __construct()
{
    parent::__construct();
    $this->load->database();
}

public function Tampil_Produk()
{
    $this->db->select('*');
    $this->db->from('tb_produk');
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    return $query->result();
}

public function Total_Produk()
{
    $this->db->select('*');
    $this->db->from('tb_produk');
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    $rowcount = $query->num_rows();
    return $rowcount;
}

    

}

/* End of file ModelName.php */

?>