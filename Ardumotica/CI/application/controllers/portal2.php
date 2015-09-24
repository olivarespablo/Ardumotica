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
}