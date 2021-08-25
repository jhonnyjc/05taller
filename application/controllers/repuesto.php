<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repuesto extends CI_Controller {

	
	public function index()
	{
        $lista=$this->cliente_model->lista();
        $data['clientes']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_lista',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	public function tesrepuesto()
	{
        $lista=$this->repuesto_model->lista();
        $data['repuesto']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('inc_menu'); //contenido
		$this->load->view('repuesto/repuesto_view.php',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	public function modificar()
	{
		$idrepuesto=$_POST['idrepuesto'];
		$data['inforepuesto']=$this->repuesto_model->recuperarrepuesto($idrepuesto);

		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('repuesto/repuesto_modificar.php',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter

	}

	public function modificarbd()
	{
		$idrepuesto=$_POST['idrepuesto'];
		$data['nombrerepuesto']=$_POST['nombrerepuesto'];
		$data['tiporepuesto']=$_POST['tiporepuesto'];
		$data['estadorepuesto']=$_POST['estadorepuesto'];
		$data['ficha']=$_POST['ficha'];
	

		$this->repuesto_model->modificarrepoesto($idrepuesto,$data);
		redirect('repuesto/tesrepuesto', 'refresh');
	}

	public function registar()
	{
		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('repuesto/repuesto_registar.php'); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter


	}

	public function agregarbd()
	{
		$data['nombrerepuesto']=$_POST['nombrerepuesto'];
		$data['tiporepuesto']=$_POST['tiporepuesto'];
		$data['estadorepuesto']=$_POST['estadorepuesto'];
		$data['ficha']=$_POST['ficha'];
	

		$this->repuesto_model->agregarequipo($data);

		redirect('repuesto/tesrepuesto', 'refresh');
	}

	public function eliminarbd()
	{
		$idrepuesto=$_POST['idrepuesto'];
		$this->repuesto_model->eliminarrepuesto($idrepuesto);

		redirect('repuesto/tesrepuesto', 'refresh');
	}

	
}
