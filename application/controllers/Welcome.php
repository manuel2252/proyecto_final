<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('view_cabeza');
		$this->load->view('cuerpo');
		$this->load->view('view_pies');
	}
	
	public function portafolio()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_portafolio');
		$this->load->view('view_pies');
	}
	public function institucional()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_institucional');
		$this->load->view('view_pies');
	}
	public function galeria()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_galeria');
		$this->load->view('view_pies');
	}

	public function tabla()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_tabla');
		$this->load->view('view_pies');
	}
	public function actividades()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_actividades');
		$this->load->view('view_pies');
	}
	public function historia()
	{
		$this->load->view('view_cabeza');
		$this->load->view('view_historia');
		$this->load->view('view_pies');
	}
	
}
