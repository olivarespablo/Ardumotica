<?php
class Portal2 extends CI_Controller{
	public function inicio(){
		$this->load->view('inicioArduino');
	}

	public function activarDispositivos(){
		$this->load->view('activacionDispositivos');
	}

	public function configurarDispositivos(){
		$this->load->view('configuracionDispositivos');
	}

	public function tipoPines(){
		$this->load->view('tipoPines');
			}
	public function dispositivosDigitales(){
		$this->load->model('arduino_model');
		$id=1;
		$dispositivosDigitales = $this->arduino_model->obtener_dispositivos($id);
		$this->load->view('dispositivosDigitales', $dispositivosDigitales);
	}

	public function guardarDispositivos($id){
		$this->load->model('arduino_model');
		if($this->input->post('Volver_inicio')){
			redirect('/portal2/inicio','location');
		}
		else{
			$dispositivosDigitales=array(
					'pin0' => $this->input->post('pin0'),
					'pin1' => $this->input->post('pin1'),
					'pin2' => $this->input->post('pin2'),
					'pin3' => $this->input->post('pin3'),
					'pin4' => $this->input->post('pin4'),
					'pin5' => $this->input->post('pin5'),
					'pin6' => $this->input->post('pin6'),
					'pin7' => $this->input->post('pin7'),
					'pin8' => $this->input->post('pin8'),
					'pin9' => $this->input->post('pin9'),
					'pin10' => $this->input->post('pin10'),
					'pin11' => $this->input->post('pin11'),
					'pin12' => $this->input->post('pin12'),
					'pin13' => $this->input->post('pin13')
					);
			if($id==1){
			$id=array('id'=>1);
			}
			else{
				$id=array('id'=>2);
			}
			$control2;
			if((!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin0']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin1']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin2']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin3']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin4']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin5']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin6']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin7']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin8']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin9']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin10']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin11']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin12']))||(!preg_match("/^[a-zA-Z áéíóú]{0,15}$/", $dispositivosDigitales['pin13']))){
				$control2=false;
			}
			else{
				$control2=true;
			}
			if($control2==false){
				redirect('/portal/meme','location');
				}
			else{
				if ($this->arduino_model->actualizar_dispositivos($dispositivosDigitales, $id) ){
					redirect('/portal2/inicio','location');
				}
			}
		}
	}

		public function dispositivosAnalogos(){
		$this->load->model('arduino_model');
		$id=2;
		$dispositivosAnalogos = $this->arduino_model->obtener_dispositivos($id);
		$this->load->view('dispositivosAnalogos', $dispositivosAnalogos);
	}
}