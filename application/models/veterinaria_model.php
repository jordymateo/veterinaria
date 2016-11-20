<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veterinaria_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
  public function guardarMascota($data = array()){
      $this->db->insert('mascotas',$data);
    }

  public function cargarMascotas(){
      $query = $this->db->get('mascotas');

    return $query->result();
  }

  function eliminarMs($id){

    $this->db->where('id=', $id);
    $this->db->where('idUsuario=', $_SESSION['usuario']);
    $this->db->delete('mascotas');

  }
}
