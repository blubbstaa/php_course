
<?php

/*
 * The game works now, but it's stupid that you can read the number you have to guess in the url.
 * Change the script, that the variables are not anymore in the url
 */


//function to start the game again
function Start_Again() {
	//choose new number
    $number = rand(1,100);
    //print text guess a number
    print("Guess a number between 1 and 100");
    Display_Form($number);
}

function Display_Form($number = null) {
	//if display number is called from Start-Again, a new number is set. Else, use the existing one from $_GET
	if($number == null){
		$number = $_GET['numberToGuess'];
	}
	
	/*
	 * BEGIN TODO:
	 * print an html form here, the following form fields:
	 * input type='text' name='number' where the user chooses his input
	 * input type='hidden' name='numberToGuess' where you save the number the user has to guess
	 * input type='submit' to subit the form 
	 */
	
	
	
	// END TODO
	
}

if (isset($_GET['number'])) {
	//get number guessed by user
    $User_Number = $_GET['number'];
    //get number to guess
    $Actual_Number = $_GET['numberToGuess'];


	//if higher, display higher and display the form
    if ($User_Number < $Actual_Number) { print("Higher"); Display_Form(); }
    
    //if higher, display lower and display the form
    elseif ($User_Number > $Actual_Number) { print("Lower"); Display_Form(); }
    
    //if correct guess, show success message, Start_Again (choose new number) and display the form
    elseif ($User_Number == $Actual_Number) { print("Bingo, Correct Guess!<br>"); Start_Again(); }

}elseif (!isset($_POST['higherlower'])) { Start_Again(); }
