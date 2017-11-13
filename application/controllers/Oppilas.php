<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oppilas extends CI_Controller {
  public function __construct(){
    parent::__construct();
    if (isset($_SESSION['kirjautunut']) && $_SESSION['kirjautunut'] == true ){

    }
      else {
        redirect('login/avaa_lomake');
      }

  }

  public function nayta_oppilaat(){
    if ($_SESSION['kirjautunut'] == true) {
    $this->load->model('Oppilas_model');
    $data['oppilaat']=$this->Oppilas_model->hae_oppilaat();
    $data['sivu']='oppilas/nayta_oppilaat';
    $this->load->view('menu/content',$data);
    }
    else {
      redirect('login/avaa_lomake');
    }
  }
  public function poista_oppilas($idPoista){
    $this->load->model('Oppilas_model');
    $this->Oppilas_model->poista_valittu($idPoista);
    redirect('oppilas/nayta_oppilaat');
  }
  public function lisays_lomake(){
    $data['sivu']='oppilas/lisays_lomake';
    $this->load->view('menu/content',$data);
  }
  public function lisaa_opiskelija(){
    $this->load->model('Oppilas_model');
    $lisaa_data=array(
      "etunimi"=>$this->input->post('en'),
      "sukunimi"=>$this->input->post('sn'),
      "syntymavuosi"=>$this->input->post('sv')
    );
    $this->Oppilas_model->lisaa_tietokantaan($lisaa_data);
    redirect('oppilas/nayta_oppilaat');
  }
}
