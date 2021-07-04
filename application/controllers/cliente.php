<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	
	public function index()
	{
        $lista=$this->cliente_model->lista();
        $data['clientes']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_lista',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	
}
