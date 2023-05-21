<?php 
    class Pago extends CI_Model {

        public function agregar($pago) {
           return  $this->db->insert('pago', $pago);
        }//end agregar

        public function seleccionar_todo() {
            $this->db->select('*');
            $this->db->from('pago');
            return $this->db->get()->result();
        }//end seleccionar_todo

        public function eliminar($id_usuario) {
            $this->db->where('idusuario', $id_usuario);
            $this->db->delete('pago');
        }//end eliminar

        public function actualizar($usuario) {
            return $this->db->update('pago', $usuario['data'], array('idusuario' => $usuario['key']));
        }//end actualizar
    }//end Class Persona
?>
