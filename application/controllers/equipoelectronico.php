<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipoelectronico extends CI_Controller {

	
	public function index()
	{
        $lista=$this->cliente_model->lista();
        $data['equipoelectronico']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_lista',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	public function tesequipoelectronico()
	{
        $lista=$this->equipo_model->lista();
        $data['equipoelectronico']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('inc_menu'); //contenido
		$this->load->view('equipoelectronico/equipo_view.php',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	public function modificar()
	{
		$idequipoelectronico=$_POST['idequipoelectronico'];
		$data['infoequipo']=$this->equipo_model->recuperarequipo($idequipoelectronico);

		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('equipoelectronico/equipo_modificar.php',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter

	}

	public function modificarbd()
	{
		$idequipoelectronico=$_POST['idequipoelectronico'];
		$data['nombreEquipo']=$_POST['nombreEquipo'];
		$data['tipo_de_servicio']=$_POST['tipo_de_servicio'];
		$data['detallesdelEquipol']=$_POST['detallesdelEquipol'];
		$data['ficha']=$_POST['ficha'];
	

		$this->equipo_model->modificarequipo($idequipoelectronico,$data);
		redirect('equipoelectronico/tesequipoelectronico', 'refresh');
	}

	public function registar()
	{
		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('equipoelectronico/equipo_registar.php'); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter


	}

	public function agregarbd()
	{
		$data['nombreEquipo']=$_POST['nombreEquipo'];
		$data['tipo_de_servicio']=$_POST['tipo_de_servicio'];
		$data['detallesdelEquipol']=$_POST['detallesdelEquipol'];
		$data['ficha']=$_POST['ficha'];
	

		$this->equipo_model->agregarequipo($data);

		redirect('equipoelectronico/tesequipoelectronico', 'refresh');
	}

	public function eliminarbd()
	{
		$idequipoelectronico=$_POST['idequipoelectronico'];
		$this->equipo_model->eliminarequipo($idequipoelectronico);

		redirect('equipoelectronico/tesequipoelectronico', 'refresh');
	}

	
}
