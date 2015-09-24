<?php
class Empleados_model extends CI_Model{

    function __construct(){
        $this->load->database();
    }
    
    function obtener_empleados(){
        $query = $this->db->get('empleados');
        
        return $query->result_array();
    }
}
?>