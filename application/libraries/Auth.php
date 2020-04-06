<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{

	private $guarded = [];

	private $guard_select = 'user';

	private $is_valid = false;

	private $message = null;


	protected $CI;


	public function __construct()
	{

		$this->CI =& get_instance();
		$this->guarded = $this->CI->config->item('guarded');
		$this->load_model();

	}


	private function load_model()
	{
		foreach($this->guarded as $guard)
		{
			$this->CI->load->model($guard);
		}
	}


	public function guard(string $guard = 'user')
	{
		$this->guard_select = $guard;
		return $this;
	}


	public function user()
	{
		return $this->CI->session->userdata($this->guard_select);
	}


	public function isAuth()
	{
		return $this->CI->session->has_userdata($this->guard_select);
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function isValid()
	{
		return $this->is_valid;
	}

	private function setSession($data)
	{
		$this->CI->session->set_userdata($this->guard_select, $data);
	}


	public function logout()
	{
		$this->CI->session->unset_userdata($this->guard_select);
		return true;
	}



	public function login(array $indentifier)
	{
		$columns = array_keys($indentifier);
		$values = array_values($indentifier);

		$guard = $this->guarded[$this->guard_select];



		$result = $this->CI->{$guard}->where($columns[0], $values[0]);



		if($result->count() < 1)
		{
			$this->is_valid = false;
			$this->message = ucfirst($columns[0]). ' yang kamu masukan tidak ditemukan!';

			return $this->isValid();
		}

		$user = $result->first();

		if(password_verify($values[1], $user->{$columns[1]}))
		{
			$this->setSession($user);
			$this->is_valid = true;
			$this->message = null;

			return $this->isValid();

		}else {
			$this->is_valid = false;
			$this->message = ucfirst($user->name ?? ''). ' sayangnya kata sandi kamu salah!';

			return $this->isValid();
		}



	}



}
