<?php
 class Captcha {
	private $result;
	function __construct($patern, $leftOperand,$operator,$rightOperand){
		if($patern == 1) {
			$this->result = $leftOperand;
			if($operator == 1) {
				$this->result = $this->result."+";
			}else if($operator == 2) {
				$this->result = $this->result."-";
			}else if($operator == 3) {
				$this->result == $this->result."x";
			}
			if($rightOperand == 1) {
				$this->result = $this->result."ONE";
			}else if($rightOperand == 2) {
				$this->result = $this->result."TWO";
			}else if($rightOperand == 3) {
				$this->result = $this->result."THREE";
			}else if($rightOperand == 4) {
				$this->result = $this->result."FOUR";
			}else if($rightOperand == 5) {
				$this->result = $this->result."FIVE";
			}else if($rightOperand == 6) {
				$this->result = $this->result."SIX";
			}else if($rightOperand == 7) {
				$this->result = $this->result."SEVEN"; 
			}else if($rightOperand == 8) {
				$this->result = $this->result."EIGHT";
			}else if($rightOperand == 9) {
				$this->result = $this->result."NINE";
			}
 
		}else if($patern == 2) {
			if($leftOperand == 1) {
				$this->result = $this->result."ONE";
			}else if($leftOperand == 2) {
				$this->result = $this->result."TWO";
			}else if($leftOperand == 3) {
				$this->result = $this->result."THREE";
			}else if($leftOperand == 4) {
				$this->result = $this->result."FOUR";
			}else if($leftOperand == 5) {
				$this->result = $this->result."FIVE";
			}else if($leftOperand == 6) {
				$this->result = $this->result."SIX";
			}else if($leftOperand == 7) {
				$this->result = $this->result."SEVEN"; 
			}else if($leftOperand == 8) {
				$this->result = $this->result."EIGHT";
			}else if($leftOperand == 9) {
				$this->result = $this->result."NINE";
			}
			if($operator == 1) {
				$this->result = $this->result."+";
			}else if($operator == 2) {
				$this->result = $this->result."-";
			}else if($operator == 3) {
				$this->result == $this->result."x";
			}
			$this->result = $this->result.$leftOperand;
		}

	}

	function toString() {
		echo $this->result."\n";
	}
}
$cap1 = new Captcha(1,2,1,9);
$cap1->toString();

$cap2 = new Captcha(2,2,1,9);
$cap2->toString();
?>
