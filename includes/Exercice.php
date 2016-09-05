<?php
class Exercice{
	private $exercicetext;

	private $executefunction;

	private $params;
	
	
	public function __construct($exercicetext,  callable $executefunction, array $params = array()){
		$this->exercicetext = $exercicetext;
		$this->executefunction = $executefunction;
		$this->params =$params;
	}
	
	public function printExercice($num){
		print("
		<div class='exercice'>
			<h3>Exercice Number $num</h3>
			<p class='exercice-text'>{$this->exercicetext}</p>
			
			<div class='exercise-result'>
		
		");
		$passed = false;
		try{
			$passed = call_user_func($this->executefunction);
		}catch (Exception $e){
			//var_dump($e->getTrace());

			print("<br>
			You made an PHP Error.<br>
			".$e->getMessage()." in File ".$e->getFile()." at Line ".$e->getLine()."<br>
			Stack Trace:<br>
			
			");
		}

		print("</div>");


		if($passed){
			print("<div class='passed'>PASSED</div>");
		}else{
			print("<div class='failed'>FAILED</div>");
		}
		print("</div>");
		
	}

}
?>
