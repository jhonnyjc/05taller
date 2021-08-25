<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	
	public function index()
   {
        $data['msg']=$this->uri->segment(3);

        if($this->session->userdata('login'))
        {
            redirect('usuarios/panel','refresh');
        }
        else
        {
            $this->load->view('inc_head.php'); //archivos de cabesera
            $this->load->view('loginfrom',$data); //contenido
            $this->load->view('inc_jooter.php');//archivos del jooter   
        }
    }

       public function validarusuario()
        {
            $login=$_POST['login'];
            $password=md5($_POST['password']);

            $consulta=$this->usuario_model->validar($login,$password);

            if($consulta->num_rows()>0)
            {
               foreach  ($consulta->result() as $row)
               {
               
                   $this->session->set_userdata('IdUsuarios',$row->IdUsuarios);
                   $this->session->set_userdata('login',$row->login);
                   $this->session->set_userdata('tipo',$row->tipo);

                   redirect('usuarios/panel','refresh');

               }
            }
            else
            {
                redirect('usuarios/index/1','refresh');
            }

        }
    public function panel()
    {
        if($this->session->userdata('login'))
        {
            redirect('cliente/tes','refresh');
        }
       
        else
        {
            redirect('usuarios/index/2','refresh');
        }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index/3','refresh');

        
    }



    public function tesusuario()
	{
        $lista=$this->usuario_model->lista();
        $data['usuarios']=$lista;

		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('inc_menu'); //contenido
		$this->load->view('usuArioview/usuario_view.php',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}
    public function modificar()
	{
		$IdUsuarios=$_POST['IdUsuarios'];
		$data['infousuario']=$this->usuario_model->recuperarusuario($IdUsuarios);

		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('usuArioview/usu_modificar.php',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter

	}

	public function modificarbd()
	{
		$IdUsuarios=$_POST['IdUsuarios'];
		$data['login']=$_POST['login'];
		$data['password']=$_POST['password'];
        $data['tipo']=$_POST['tipo'];
        $data['nombre']=$_POST['nombre'];
		$data['apellidoPaterno']=$_POST['apellidoPaterno'];
		$data['apellidoMaterno']=$_POST['apellidoMaterno'];
		$data['ci']=$_POST['ci'];
        $data['celular']=$_POST['celular'];
        $data['direccion']=$_POST['direccion'];
        $data['fecha']=$_POST['fecha'];
  
		$this->usuario_model->modificarusuario($IdUsuarios,$data);
		redirect('usuarios/tesusuario','refresh');
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
