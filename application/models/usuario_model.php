<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	
	public function validar($login,$password)
	{
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('login',$login);
        $this->db->where('password',$password);
        return $this->db->get();

        //$query="select * from usuarios where login='".$login."' and password='".$password."'";
        //return $this->db->query($query);

	}

      

	
	public function lista()
	{
        $this->db->select('*');
        $this->db->from('usuarios');
        return $this->db->get();

	}

	public function recuperarusuario($IdUsuarios)
	{
        $this->db->select('*');
        $this->db->from('usuarios');
		$this->db->where('IdUsuarios',$IdUsuarios);
        return $this->db->get();
	}

	public function modificarusuario($IdUsuarios,$data)
	{
       
		$this->db->where('IdUsuarios',$IdUsuarios);
		$this->db->update('usurios',$data);
		
        
	}

	public function agregarcliente($data)
	{
       
		$this->db->insert('clientes',$data);
		
        
	}

	public function eliminarcliente($Idcliente)
	{
       
		$this->db->where('Idcliente',$Idcliente);
		$this->db->delete('clientes');
		
        
	}


	
}
