<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class LaguAnak extends CI_Controller {

    public function index()
    {
      $this->load->view('layout/header');
      $this->load->view('layout/nav');
      $this->load->view('isi');
      $this->load->view('layout/footer');
    }

    public function klik_balon()
    {
      $this->load->view('layout/header');
      $this->load->view('layout/nav');
      $this->load->view('balon');
      $this->load->view('layout/footer');
    }

    public function klik_pelangi()
    {
      $this->load->view('layout/header');
      $this->load->view('layout/nav');
      $this->load->view('pelangi');
      $this->load->view('layout/footer');
    }

    public function klik_kereta()
    {
      $this->load->view('layout/header');
      $this->load->view('layout/nav');
      $this->load->view('kereta');
      $this->load->view('layout/footer');
    }
    public function klik_cicak()
    {
      $this->load->view('layout/header');
      $this->load->view('layout/nav');
      $this->load->view('cicak');
      $this->load->view('layout/footer');
    }
    public function klik_kebunku()
    {
      $this->load->view('layout/header');
      $this->load->view('layout/nav');
      $this->load->view('kebun');
      $this->load->view('layout/footer');
    }
}
