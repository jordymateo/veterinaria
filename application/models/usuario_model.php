<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  function guardarUsuario($usuario){
    $this->db->insert('usuarios', $usuario);
  }

  function iniciarSesion($usr, $clv){
    $this->db->where('usuario=',$usr);
    $this->db->where('clave=',md5($clv));
    $query = $this->db->get('usuarios');

    $hpt = $query->result();
      if(count($hpt) > 0){
        $usuario = $hpt[0];

        return $usuario->id;
      }

      $todos = $this->db->query("select count(*) as nr from usuarios");
      $nn = $todos->result();

      if ($nn[0]->nr < 1 && $usr == 'admin' && $clv == '1tl4w3b'){
        return 0;
      }

    return false;
  }

}
