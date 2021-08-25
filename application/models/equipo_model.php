<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo_model extends CI_Model {

	
	public function lista()
	{
        $this->db->select('*');
        $this->db->from('equipoelectronico');
        return $this->db->get();

	}

	public function recuperarequipo($idequipoelectronico)
	{
        $this->db->select('*');
        $this->db->from('equipoelectronico');
		$this->db->where('idequipoelectronico',$idequipoelectronico);
        return $this->db->get();
	}

	public function modificarequipo($idequipoelectronico,$data)
	{
       
		$this->db->where('idequipoelectronico',$idequipoelectronico);
		$this->db->update('equipoelectronico',$data);
		
        
	}

	public function agregarequipo($data)
	{
       
		$this->db->insert('equipoelectronico',$data);
		
        
	}

	public function eliminarequipo($idequipoelectronico)
	{
       
		$this->db->where('idequipoelectronico',$idequipoelectronico);
		$this->db->delete('equipoelectronico');
		
        
	}



}
