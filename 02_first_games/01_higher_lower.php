
<?php

/*
 * In this lecture, we will make our first game, it's called higher lower.
 * The computer randomly chooses a number between 1 and 100.
 * You have to guess the number. You submit a guess, if the guess is correct, you win.
 * When the actual number is lower than your guess, the computer says lower.
 * When the actual number is higher than your guess, the computer says higher.
 * 
 * 
 * Important to learn:
 * the $_GET Variable is a global array, where the parameters of the URL are saved id.
 * if you call this script by 
 * 01_higher_lower.php?myGetVar=1
 * 
 * Then, $_GET['myGetVar'] is 1;
 * 
 * To add multiple GET Variables, seperate them with &
 * 01_higher_lower.php?myGetVar=1&myOtherGetVar=2
 * 
 * Then, $_GET['myGetVar'] is 1;
 * $_GET['myOtherGetVar'] is 2;
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
