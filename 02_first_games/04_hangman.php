<html>
<head>
<title>Hangman By Lucius</title>
</head>
<body>
<?php
session_start();

//define max fails here
define("MAX_FAILS", 6);



if(isset($_POST['reset'])){
	//reset everything

	unset($_SESSION['solution_replace']); //save the string with the replaced underscores here
	unset($_SESSION['underscores']); //just the string with the underscores
	unset($_SESSION['success']); //right guesses
	unset($_SESSION['fail']); //wrong guesses
	
	
	
	
	/*BEGIN TODO
	 * Currently, it's always the same word.
	 * change the lines, so that it always chooses randomly between multiple words.
	 * 
	 * 
	 * 
	 * */
	 
	 
	 //set the solution
	 
	
	 
	$solution = "programming";
	 
	 
	 //END TODO 
	
	
	$_SESSION['solution'] = $solution;

}else{
	//else the solution stays
	$solution = $_SESSION['solution'];
}

$_SESSION['solution_replace']=$solution;
if(isset($_SESSION['underscores'])){
	//if the underscores are already generated, read them from session
	$underscores=$_SESSION['underscores'];
}else{
	/*BEGIN TODO
	 * save a string in $underscores with as many underscores as the solution has letters
	 */
	//END TODO
	
}
$underscores2=$underscores;
if(isset($_POST['letter']) && strlen($_POST['letter'])>0){
	
/*
 *	BEGIN TODO
 *  Here, check if the letter is in the solution
 *  if yes, replace the right underscores in $underscores with the letter
 *  save the guess in right guesses like this: $_SESSION['success'][$_POST['letter']]=1;
 * 
 *  else, save the guess in wrong guesses like this: $_SESSION['fail'][$_POST['letter']]=1;
 * 
 */	

	//END TODO
	

}
$_SESSION['underscores']=$underscores;

echo "
<form action='".$_SERVER['PHP_SELF']."' method='POST'>
<table>
	<tr>
		<td>Available fails:</td>
		<td>".
		/*
		 * BEGIN TODO
		 * CALCULATE the number of available fails here 
		 */
		
		//END TODO
		
		."</td>
	</tr>	
	<tr>
		<td>Right guesses:</td>
		<td>";
		
		/*
		 * BEGIN TODO
		 * Pring a comma seperated list of the right guesses here
		 * */
		
		//END TODO
		
		echo "</td>
	</tr>
	<tr>
		<td>Wrong guesses:</td>
		<td>";
		
		/*
		 * BEGIN TODO
		 * Print a comma seperated list of the wrong guesses here
		 * */
		
		
		//END TODO
		echo "</td>
	</tr>
	<tr>
		<td>Word until now:</td>
		<td>$underscores</td>
	</tr>
	<tr>
		<td>Your next letter:</td>
		<td><input type='text' name='letter'></td>
	</tr>
	<tr>
		<td></td><td>
		
		";
		/*
		 * BEGIN TODO
		 * 
		 * decide here wether the user is game over, won or can guess again
		 * */
		
		//END TODO
		echo "</td><td><input type='submit' value='Reset' name='reset'></td>
	</tr>
	

</table>

";









?>

</body>
</html>
