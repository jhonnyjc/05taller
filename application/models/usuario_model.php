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

}
