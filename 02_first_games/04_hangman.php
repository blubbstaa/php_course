<html>
<head>
<title>Hangman By Lucius</title>
</head>
<body>
<?php
session_start();

//define max fails here
define("MAX_FAILS", 6);




if(isset($_POST['reset']) || !isset($_SESSION['solution'])){
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
	 
	$words = array(
		"abbey" 
		,"abruptly" 
		,"affix" 
		,"askew" 
		,"axiom" 
		,"azure" 
		,"bagpipes" 
		,"bandwagon" 
		,"banjo" 
		,"bayou" 
		,"bikini" 
		,"blitz" 
		,"bookworm" 
		,"boxcar" 
		,"boxful" 
		,"buckaroo" 
		,"buffalo" 
		,"buffoon" 
		,"cobweb" 
		,"croquet" 
		,"daiquiri" 
		,"disavow" 
		,"duplex" 
		,"dwarves" 
		,"equip" 
		,"exodus" 
		,"fishhook" 
		,"fixable" 
		,"foxglove" 
		,"galaxy" 
		,"galvanize" 
		,"gazebo" 
		,"gizmo" 
		,"glowworm" 
		,"guffaw" 
		,"haiku" 
		,"haphazard" 
		,"hyphen" 
		,"icebox" 
		,"injury" 
		,"ivory" 
		,"ivy" 
		,"jaundice" 
		,"jawbreaker" 
		,"jaywalk" 
		,"jazzy" 
		,"jigsaw" 
		,"jiujitsu" 
		,"jockey" 
		,"jovial" 
		,"joyful" 
		,"juicy" 
		,"jumbo" 
		,"kazoo" 
		,"keyhole" 
		,"khaki" 
		,"kilobyte" 
		,"kiosk" 
		,"kiwifruit" 
		,"knapsack" 
		,"larynx" 
		,"luxury" 
		,"marquis" 
		,"megahertz" 
		,"microwave" 
		,"mystify" 
		,"nightclub" 
		,"nowadays" 
		,"numbskull" 
		,"ovary" 
		,"oxidize" 
		,"oxygen" 
		,"pajama" 
		,"peekaboo" 
		,"pixel" 
		,"pizazz" 
		,"pneumonia" 
		,"polka" 
		,"quartz" 
		,"quiz" 
		,"quorum" 
		,"razzmatazz" 
		,"rhubarb" 
		,"rickshaw" 
		,"schizophrenia" 
		,"sphinx" 
		,"spritz" 
		,"squawk" 
		,"subway" 
		,"swivel" 
		,"topaz" 
		,"unknown" 
		,"unworthy" 
		,"unzip" 
		,"uptown" 
		,"vaporize" 
		,"vixen" 
		,"vodka" 
		,"vortex" 
		,"walkway" 
		,"waltz" 
		,"wavy" 
		,"waxy" 
		,"wheezy" 
		,"whiskey" 
		,"whomever" 
		,"wimpy" 
		,"wizard" 
		,"woozy" 
		,"xylophone" 
		,"yachtsman" 
		,"yippee" 
		,"youthful" 
		,"zephyr" 
		,"zigzag" 
		,"zilch" 
		,"zodiac" 
		,"zombie"
	); 

	$solution = $words[mt_rand(0,count($words)-1)];

	 
	 //END TODO 
	
	
	$_SESSION['solution'] = $solution;

}else{
	//else the solution stays
	$solution = $_SESSION['solution'];
}

if(!isset($_SESSION['fail'])){
	$_SESSION['fail'] = array();
}
if(!isset($_SESSION['success'])){
	$_SESSION['success'] = array();
}

$_SESSION['solution_replace']=$solution;
if(isset($_SESSION['underscores'])){
	//if the underscores are already generated, read them from session
	$underscores=$_SESSION['underscores'];
}else{
	/*BEGIN TODO
	 * save a string in $underscores with as many underscores as the solution has letters
	 */
    $underscores = str_repeat(" _", strlen($solution));
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
    $pos=stripos($_SESSION['solution_replace'],$_POST['letter']);
    $changed=false;

    while($pos!== false){
        $changed=true;
        $underscores[$pos*2]=$_POST['letter'];
        $_SESSION['solution_replace'][$pos]="_";

        $pos=stripos($_SESSION['solution_replace'],$_POST['letter']);
    }

    if($changed){
        $_SESSION['success'][$_POST['letter']]=1;
    }else{
        $_SESSION['fail'][$_POST['letter']]=1;
    }
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
        (MAX_FAILS - count($_SESSION['fail']))
		//END TODO
		
		."</td>
	</tr>	
	<tr>
		<td>Right guesses:</td>
		<td>";
		
		/*
		 * BEGIN TODO
		 * Print a comma seperated list of the right guesses here
		 * */
$first=1;
if(isset($_SESSION['success'])){
    foreach($_SESSION['success'] as $letter => $posarray){
        if($first==1){
            echo $letter;
            $first=0;

        }else{
            echo ",".$letter;

        }
    }
}
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
$first=1;

if(isset($_SESSION['fail'])){
    foreach($_SESSION['fail'] as $letter => $value){
        if($first==1){
            echo $letter;
            $first=0;
        }else{
            echo ",".$letter;
        }
    }
}

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
if(count($_SESSION['fail'])>=MAX_FAILS){
    echo "Game over";
}elseif($solution == str_replace(" ", "",$underscores)){
    echo "Congratulation, you won";

}else{

    echo "<input type='submit' value='Guess'>";

}
		//END TODO
		echo "</td><td><input type='submit' value='Reset' name='reset'></td>
	</tr>
	

</table>

";









?>

</body>
</html>
