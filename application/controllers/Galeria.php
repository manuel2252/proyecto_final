<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function index()
	{
		$this->load->view('view_cabeza');
		$this->load->view('View_Galeria');
		$this->load->view('view_pies');
	}

    public function fotografia1()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_fotografia1');
		$this->load->view('view_pies');
  }
}