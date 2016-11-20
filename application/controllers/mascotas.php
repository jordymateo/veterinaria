<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascotas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('veterinaria_model');
    $this->load->helper('users');
  }

  function index()
  {
    $data = array();

    $data['datos'] = $this->veterinaria_model->cargarMascotas();
    $this->load->view('mascotas/index',$data);
  }

  function guardar(){
        if($_POST){

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

            //Prepare array of user data
            $userData = array(
                'nombre' => $this->input->post('nombre'),
                'fecha' => $this->input->post('fecha'),
                'tipo' => $this->input->post('tipo'),
                'raza' => $this->input->post('raza'),
                'peso' => $this->input->post('peso'),
                'color' => $this->input->post('color'),
                'foto' => $picture,
                'comentario' => $this->input->post('comentario'),
                'idUsuario' =>$_SESSION['usuario']
            );
            //Pass user data to model
            $insertUserData = $this->veterinaria_model->guardarMascota($userData);

        }
        $this->load->view('usuario/msg');
    }

    function delete(){
      $id = (isset($_GET['id']))?$_GET['id']+0:0;
      $this->veterinaria_model->eliminarMs($id);
      redirect(base_url());
   }
}
