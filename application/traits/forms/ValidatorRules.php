<?php 

trait ValidatorRules {
	public function indonesia_phone($value) {
		return preg_match('/^\+628.{10}/', $value);
	}
	
}