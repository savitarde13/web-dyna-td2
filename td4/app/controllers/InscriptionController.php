<?php
namespace controllers;

 class InscriptionController extends ControllerBase{

	
	public function index(){
		$this->loadView("InscriptionController/index.html");
	}

	public function bouton(){

		$this->loadView('InscriptionController/bouton.html');

	}

	public function get($name,$addrmel){

		$this->loadView('InscriptionController/get.html',['name'=>$name, 'addrmel'=>$addrmel]);

	}

}
