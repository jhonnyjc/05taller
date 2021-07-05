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

	public function agregarcliente($data)
	{
       
		$this->db->insert('clientes',$data);
		
        
	}


}
