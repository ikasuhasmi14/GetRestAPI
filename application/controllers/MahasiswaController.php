<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH .'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class MahasiswaController extends RestController
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
  }

  public function index_get()
  {
    $mahasiswa = $this->Mahasiswa_model->getMahasiswa();
    
    if ($mahasiswa) {
      $this->response([
        'status' =>  true,
        'data'=> $mahasiswa
      ], RestController::HTTP_OK);
  }

}}


/* End of file MahasiswaController.php */
/* Location: ./application/controllers/MahasiswaController.php */