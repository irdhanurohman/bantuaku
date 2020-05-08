<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/traits/forms/ValidatorRules.php';

class Validator {

	/** set validator custum */
	use ValidatorRules;

	private $rules = [];
	private $errors = [];
	private $CI;

	public function __construct(){
		
		$this->CI =& get_instance();
		
	}

	public function make(array $rules, array $errors = []) {
		
		$this->rules = $rules;
		$this->errors = $errors;

		$this->setErrorString();
		$this->setErrors();
	}


	public function errors() {
		return $this->CI->form_validation->error_array();
	} 

	private function setErrorString() {
		$this->CI->form_validation->set_error_delimiters('<p class="error_field">', "</p>");
	}

	private function setErrors() {
		$this->CI->form_validation->set_message(
				'indonesia_phone', 
				'%s kamu format tidak benar, contoh  +62<u>8***********</u>');
	}


	private function validate() {
		foreach($this->rules as $ruleName => $ruleField) {				
			$this->CI->form_validation->set_rules($ruleName, ucfirst($ruleName), $ruleField, $this->errors);
		}		
	}

	public function check($view) {
		$this->validate();										
		if(!$this->CI->form_validation->run()) return view($view);
		
	}

	public function addValidation($fieldName, $fieldRule) {
		if(array_key_exists($fieldName, $this->rules)) {
			unset($this->rules[$fieldName]);
		}
		$this->rules[$fieldName] = $fieldRule;		
	}

}

