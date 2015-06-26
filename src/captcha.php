<?php
 class Captcha {
	private $patern;
	private $leftOperand;
	private $operator;
	private $rightOperand;
	
	private $numberToWord = [
		1 => "ONE",
		2 => "TWO",
		3 => "THREE",
		4 => "FOUR",
		5 => "FIVE",
		6 => "SIX",
		7 => "SEVEN",
		8 => "EIGHT",
		9 => "NINE",
	];

	private $operators = [
		1 => "+",
		2 => "-",
		3 => "x",
	];

	function __construct($patern,$leftOperand,$operator,$rightOperand) {
		$this->patern = $patern;
		$this->leftOperand = $leftOperand;
		$this->operator = $operator;
		$this->rightOperand = $rightOperand;
	}

	function toString() {
		if(1 == $this->patern){
			echo $this->leftOperand.$this->operators[$this->operator].$this->numberToWord[$this->rightOperand]."\n";
		}else if(2 == $this->patern){
			echo $this->numberToWord[$this->leftOperand].$this->operators[$this->opertor].$this->rightOperand."\n";
		}
	}
}
$cap = new Captcha(1,2,1,9);
$cap->toString();
?>
