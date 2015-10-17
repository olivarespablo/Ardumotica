<?php
class Portal2 extends CI_Controller{
	public function inicio(){
		$this->load->view('inicioArduino');
	}

	public function activarDispositivos(){
		$this->load->view('activacionDispositivos');
	}

	public function consultarEstados(){
		
		$this->load->view('estadosDispositivos');
	}

	public function tipoPines(){
		$this->load->view('tipoPines');
			}
	public function dispositivosDigitales(){
		$this->load->model('arduino_model');
		$id=1;
		$id2=1;
		$dispositivosDigitales = $this->arduino_model->obtener_dispositivos($id,$id2);
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
				else{
				$this->load->view('meme1');
				}
			}
		}
	}

		public function dispositivosAnalogos(){
		$this->load->model('arduino_model');
		$id=2;
		$id2=1;
		$dispositivosAnalogos = $this->arduino_model->obtener_dispositivos($id,$id2);
		$this->load->view('dispositivosAnalogos', $dispositivosAnalogos);
	}

	public function ac_dispositivosAnalogos(){
		$this->load->model('arduino_model');
		$id=2;
		$id2=2;
		$ac_dispositivosAnalogos = $this->arduino_model->obtener_dispositivos($id,$id2);
		$this->load->view('ac_dispositivosAnalogos', $ac_dispositivosAnalogos);
	}

	public function ac_dispositivosDigitales(){
		$this->load->model('arduino_model');
		$id=1;
		$id2=2;
		$ac_dispositivosDigitales = $this->arduino_model->obtener_dispositivos($id,$id2);
		$this->load->view('ac_dispositivosDigitales', $ac_dispositivosDigitales);
	}

	public function establecerEstados($id){

		$this->load->model('arduino_model');
		if($this->input->post('Volver_inicio')){
			redirect('/portal2/inicio','location');
		}
		else{
			$estadoDispositivos=array(
				'pin0' => '',
				'pin1' => '',
				'pin2' => '',
				'pin3' => '',
				'pin4' => '',
				'pin5' => '',
				'pin6' => '',
				'pin7' => '',
				'pin8' => '',
				'pin9' => '',
				'pin10' => '',
				'pin11' => '',
				'pin12' => '',
				'pin13' => ''
				);
			//$url='http://192.168.0.100/digital/8/0';
			//	file($url);
			if($this->input->post('pin0')){ $estadoDispositivos['pin0']=1; } else{ $estadoDispositivos['pin0']=0; }
			if($this->input->post('pin1')){ $estadoDispositivos['pin1']=1; } else{ $estadoDispositivos['pin1']=0; }
			if($this->input->post('pin2')){ $estadoDispositivos['pin2']=1; } else{ $estadoDispositivos['pin2']=0; }
			if($this->input->post('pin3')){ $estadoDispositivos['pin3']=1; } else{ $estadoDispositivos['pin3']=0; }
			if($this->input->post('pin4')){ $estadoDispositivos['pin4']=1; } else{ $estadoDispositivos['pin4']=0; }
			if($this->input->post('pin5')){ $estadoDispositivos['pin5']=1; } else{ $estadoDispositivos['pin5']=0; }
			if($this->input->post('pin6')){ $estadoDispositivos['pin6']=1; } else{ $estadoDispositivos['pin6']=0; }
			if($this->input->post('pin7')){ $estadoDispositivos['pin7']=1; } else{ $estadoDispositivos['pin7']=0; }
			if($this->input->post('pin8')){ $estadoDispositivos['pin8']=1; } else{ $estadoDispositivos['pin8']=0; }
			if($this->input->post('pin9')){ $estadoDispositivos['pin9']=1; } else{ $estadoDispositivos['pin9']=0; }
			if($this->input->post('pin10')){ $estadoDispositivos['pin10']=1; } else{ $estadoDispositivos['pin10']=0; }
			if($this->input->post('pin11')){ $estadoDispositivos['pin11']=1; } else{ $estadoDispositivos['pin11']=0; }
			if($this->input->post('pin12')){ $estadoDispositivos['pin12']=1; } else{ $estadoDispositivos['pin12']=0; }
			if($this->input->post('pin13')){ $estadoDispositivos['pin13']=1; } else{ $estadoDispositivos['pin13']=0; }

			if($id==1){
				$id=array('id'=>1);
			}
			else{
				$id=array('id'=>2);
			}

			if ($this->arduino_model->actualizar_estados($estadoDispositivos, $id) ){
				if($id['id']==1){
					redirect('/portal2/ac_dispositivosDigitales','location');
				}
				if($id['id']==2){
					redirect('/portal2/ac_dispositivosAnalogos','location');
				}
			}
			else{
				$this->load->view('meme1');
			}
		}
	}
}