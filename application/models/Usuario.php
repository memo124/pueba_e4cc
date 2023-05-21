<?php 
    class Usuario extends CI_Model {

        public function agregar($usuario) {
           return  $this->db->insert('usuario', $usuario);
        }//end agregar

        public function seleccionar_todo() {
            $this->db->select('*');
            $this->db->from('usuario');
            return $this->db->get()->result();
        }//end seleccionar_todo

        public function eliminar($usuario) {
            return $this->db->delete('usuario',array('idusuario' => $usuario['key']));
        }//end eliminar

        public function actualizar($usuario) {
            return $this->db->update('usuario', $usuario['data'], array('idusuario' => $usuario['key']));
        }//end actualizar
    }//end Class Persona
?>
