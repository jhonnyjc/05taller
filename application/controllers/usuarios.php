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
    public function registar()
	{
		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_registar'); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter


	}

    public function agregarusuariobd()
	{
		$data['login']=$_POST['login'];
		$data['password']=$_POST['password'];
		$data['tipo']=$_POST['tipo'];
	
		
		$this->cliente_model->agregarcliente($data);

		redirect('cliente/index', 'refresh');
	}

    public function modificarusuario()
	{
		$Idcliente=$_POST['Idcliente'];
		$data['infocliente']=$this->cliente_model->recuperarcliente($Idcliente);

		
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('cli_modificar',$data); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter

	}

	public function modificarusuariobd()
	{
		$Idcliente=$_POST['Idcliente'];
		$data['primer_apellido']=$_POST['primer_apellido'];
		$data['segundo_apellido']=$_POST['segundo_apellido'];
		$data['nombres']=$_POST['nombres'];
		$data['ci']=$_POST['ci'];
		$data['equipo_electronico']=$_POST['equipo_electronico'];
		$data['Nro_de_factura']=$_POST['Nro_de_factura'];

		$this->cliente_model->modificarcliente($Idcliente,$data);
		redirect('cliente/index', 'refresh');
	}

	
}
