<?php 
    class LoginM extends CI_Model {
		
        public function __construct()
        {
            parent::__construct();
        }

        public function obtenerUsuarios($usuario) {
            return $this->db->get_where('usuario', ['perfil_usuario' => $usuario])->row();
        }//end seleccionar_todo
    }//end Class Persona
?>
