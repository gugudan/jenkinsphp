<?php 
	/*
	 * Add comment here
	 */
	class ValidatePassword {
		const MIN_LENGTH = 6;
		const MAX_LENGTH = 20;
		
		public function validLength($password) {
			$passLength = strlen($password);
			
			return $passLength >= self::MIN_LENGTH && $password <= self::MAX_LENGTH;
			
		}
		
		public function htestval($password) {
			$passLength = strlen($password);
		
			return $passLength >= self::MIN_LENGTH && $password <= self::MAX_LENGTH;
		
		}
		
		public function htestval2($password) {
			$passLength = strlen($password);
		
			return $passLength >= self::MIN_LENGTH && $password <= self::MAX_LENGTH;
		
		}
	}
?>