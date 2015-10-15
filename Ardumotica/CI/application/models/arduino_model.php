<?php
class arduino_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	public function actualizar_dispositivos($dispositivosDigitales, $id){

		if($this->db->update('Dispositivos', $dispositivosDigitales, $id))
			return true;
		else
			return false;
	}

	public function obtener_dispositivos(){
		$where_array = array (
			'id'=>1);
		$table_name = "Dispositivos";
		$limit = 1;
		$offset = 0;
		$query = $this->db->get_where($table_name, $where_array, $limit, $offset);
		if($query->num_rows()>0){
			return $query->row();	
		}
		else{
			return false;
		}
	}

}

?>