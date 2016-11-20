<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('usuario_model');
  }

  function index(){
    $this->load->view('usuario/registrarse');
  }

  function guardar(){
    if($_POST){
      $_POST['clave'] = md5($_POST['clave']);
      $this->usuario_model->guardarUsuario($_POST);
    }
    $this->load->view('usuario/msg');
  }

}
