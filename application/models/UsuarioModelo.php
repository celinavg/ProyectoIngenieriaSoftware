<?php
Class UsuarioModelo extends CI_Model
{
    function login($correo_electronico, $contrasena)
    {
        $this->load->database();
        $query = $this->db->get_where('usuario', array('correo_electronico' => $correo_electronico,
                                                        'contrasena' => $contrasena));
        if($query -> num_rows() == 1)
        {
          return $query->result();
        }
        else
        {
          return false;
        }
    }
}
?>
