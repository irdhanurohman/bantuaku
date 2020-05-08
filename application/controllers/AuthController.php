<?php

class AuthController extends CI_Controller{


	public function __construct(){
		parent::__construct();

		/** initiliaze validaiton **/
		$this->validator->make([
			'email' => 'required|valid_email',			
		], [
			'required' => '%s wajib dimasukan',
			'valid_email' => 'Format email kamu tidak benar'			
		]);		
	}
	
    public function login(){
		return view('auth.login');
	}
	

	public function register() {
		return view('auth.register');
	}


	public function login_store() {
		if(!$this->request->is_post()){			
			return $this->login();
		}	
		$this->validator->addValidation('password', 'required');
		$this->validator->check('auth.login');
				
		/** implementsi login **/
		
	}


	public function register_store() {
		/** implementsi register **/
	}

}
