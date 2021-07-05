<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

	
	public function lista()
	{
        $this->db->select('*');
        $this->db->from('clientes');
        return $this->db->get();

	}

	public function recuperarcliente($Idcliente)
	{
        $this->db->select('*');
        $this->db->from('clientes');
		$this->db->where('Idcliente',$Idcliente);
        return $this->db->get();
	}

	public function modificarcliente($Idcliente,$data)
	{
       
		$this->db->where('Idcliente',$Idcliente);
		$this->db->update('clientes',$data);
		
        
	}



    /*

	public function vista2()
	{
		$this->load->view('inc_head.php'); //archivos de cabesera
		$this->load->view('formulario'); //contenido
		$this->load->view('inc_jooter.php');//archivos del jooter
	}

	public function pruebabd()
	{
		$query=$this->db->get('clientes');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
    */
}
