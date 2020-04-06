<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$user = $this->User->find(1);

		return view('welcome_message');
	}
}
