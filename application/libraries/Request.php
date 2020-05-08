<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Request {



	public function post() {
		if($_SERVER['REQUEST_METHOD'] !== "POST") {
			return show_404();
		}
	}
	public function is_post() {
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			return true;
		}
		return false;
	}

	public function get() {
		if($_SERVER['REQUEST_METHOD'] !== "GET") {
			return show_404();
		}
	}


	public function all() {
		return $_POST;
	}

}

