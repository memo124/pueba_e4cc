<?php 
    class SalarioM extends CI_Model {

        public function agregar($pago) {
           return  $this->db->insert('pago', $pago);
        }//end agregar

        public function seleccionar_todo() {
            $this->db->select('*');
            $this->db->from('pago');
            return $this->db->get()->result();
        }//end seleccionar_todo

        public function eliminar($salario) {
            return $this->db->delete('pago',array('idpago' => $salario['key']));
        }//end eliminar

        public function actualizar($salrio) {
            return $this->db->update('pago', $salrio['data'], array('idpago' => $salrio['key']));
        }//end actualizar
    }//end Class Persona
?>
