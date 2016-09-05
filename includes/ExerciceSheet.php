<?php
class ExerciceSheet{
	
	const HEADER = '
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>unbenannt</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
	<style>
	.passed{
		background-color: green;
	}
	.failed{
		background-color: red;
	}
	
	
</style>
</head>

	<body>
	';
	
	const BEGINSTRING = '
		<h1>PHP Course of Lucius Bachmann</h1>
		<h2>Exercice File {$number} {$name}</h2>
   
	';
	
	const ENDSTRING = '
	</body>
</html>	
	';
	
	/**
	* @var string 
	*/
	private $number;
	
	/**
	* @var string 
	*/
	private $name;
	
	/**
	 * @var Exercices[];
	 * 
	 */
	private $exercices = array();
	
	
	public function __construct($number, $name){
			$this->number = $number;
			$this->name = $name;
	}
	
	public function addExercice(Exercice $exercice){
			$this->exercices[] = $exercice;
	}
	
	
	public function __destruct(){
		
		print static::HEADER;
		
		$beginstring = static::BEGINSTRING;
		
		$beginstring = str_replace(array('{$number}', '{$name}'), array($this->number, $this->name), $beginstring);
		
		print $beginstring;
		if(count($this->exercices)>0) {
			foreach ($this->exercices as $num => $exercice) {
				$exercice->printExercice($num+1);
			}
		}
		print static::ENDSTRING;
	}
	
	
}

?>
