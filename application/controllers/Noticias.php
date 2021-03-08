<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function index()

	{
		$this->load->view('view_cabeza');
		$this->load->view('View_noticias');
		$this->load->view('view_pies');
	}
	public function casos()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_casos');
		$this->load->view('view_pies');
	}
    public function disponibles()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_disponibles');
		$this->load->view('view_pies');
	}
	public function cartelera()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_cartelera');
		$this->load->view('view_pies');
	}
	public function fotografias()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_fotografias');
		$this->load->view('view_pies');
  }
}
    