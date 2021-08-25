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

	public function tes()
	{
        $lista=$this->cliente_model->lista();
        $data['clientes']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('inc_menu'); //contenido
		$this->load->view('tes',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	public function modificar()
	{
		$Idcliente=$_POST['Idcliente'];
		$data['infocliente']=$this->cliente_model->recuperarcliente($Idcliente);

		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_modificar',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter

	}

	public function modificarbd()
	{
		$Idcliente=$_POST['Idcliente'];
		$data['primer_apellido']=$_POST['primer_apellido'];
		$data['segundo_apellido']=$_POST['segundo_apellido'];
		$data['nombres']=$_POST['nombres'];
		$data['ci']=$_POST['ci'];
		$data['equipo_electronico']=$_POST['equipo_electronico'];
		$data['Nro_de_factura']=$_POST['Nro_de_factura'];

		$this->cliente_model->modificarcliente($Idcliente,$data);
		redirect('cliente/tes', 'refresh');
	}

	public function registar()
	{
		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_registar'); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter


	}

	public function agregarbd()
	{
		$data['primer_apellido']=$_POST['primer_apellido'];
		$data['segundo_apellido']=$_POST['segundo_apellido'];
		$data['nombres']=$_POST['nombres'];
		$data['ci']=$_POST['ci'];
		$data['equipo_electronico']=$_POST['equipo_electronico'];
		$data['Nro_de_factura']=$_POST['Nro_de_factura'];

		$this->cliente_model->agregarcliente($data);

		redirect('cliente/tes', 'refresh');
	}

	public function eliminarbd()
	{
		$Idcliente=$_POST['Idcliente'];
		$this->cliente_model->eliminarcliente($Idcliente);

		redirect('cliente/tes', 'refresh');
	}

	
}
