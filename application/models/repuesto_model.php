<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repuesto_model extends CI_Model {

	
	public function lista()
	{
        $this->db->select('*');
        $this->db->from('repuesto');
        return $this->db->get();

	}

	public function recuperarrepuesto($idrepuesto)
	{
        $this->db->select('*');
        $this->db->from('repuesto');
		$this->db->where('idrepuesto',$idrepuesto);
        return $this->db->get();
	}

	public function modificarrepoesto($idrepuesto,$data)
	{
       
		$this->db->where('idrepuesto',$idrepuesto);
		$this->db->update('repuesto',$data);
		
        
	}

	public function agregarrepuesto($data)
	{
       
		$this->db->insert('repuesto',$data);
		
        
	}

	public function eliminarrepuesto($idrepuesto)
	{
       
		$this->db->where('idrepuesto',$idrepuesto);
		$this->db->delete('repuesto');
		
        
	}



}
