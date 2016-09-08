<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("07", "Functions");



//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * In programming, we often have to solve the same task more than one time.
     * Not like in a while loop repetitive, but on different places in the code, like replacing a text with another text in a string.
     * 
     * you can define a function by typing
     * function myfunction(){
     * 	return 'myfunction';
     * }
     * 
     * explanation:
     * function //we say, that we want to declare a function now
     * myfunction //the function name, you can choose it. choose a senseful name who describes, what the function does.
     * () //signature definition, we will learn that later
     * {} //between these braces the function code is defined.
     * return 'myfunction'; //when the function gets called, this value will be returned.
     * 
     * So when i type:
     * $test = myfunction();
     * it does the following.
     * It goes into the funciton myfunction and executes the statements in there. There is one statement,
     * the return statement. After the return statement, the funciton is finished.
     * Now, the compiler sees $test = 'myfunction'; (because the return value was "myfunction", he uses the return value now.) 
     * then , it assigns the string 'myfunction' to the variable $test.
     * 
     * END DESCRIPTION
     */
     
     
     /*BEGIN TODO
      * create a function br(), which returns the HTML break tag (if you don't know, look it up in the internet)
      * 
      */


		//END TODO


















	 $testFunction = function(){
		


		if(!function_exists("br")){
			function br(){}
		}	
        
		print("<br>the output of your function is the following:<br>
		<textarea>".br()."</textarea>
		<br>");
		if('<br>' === br()){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Br Function</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
     
     
     
     
//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * in a function, you define the signature between ( and ) after the functionname.
     * The signature tells you, which parameter you must pass to the function.
     * as example, the build in 
     *  function strtolower has the following signature: ($string).
     * 
     * So, you have always to pass one parameter.
     * 
     * END DESCRIPTION
     */
     
     
     /*BEGIN TODO
      * create a function toggle($boolean), which returns false if $boolean was true and true if $boolean was false.
      * 
      */


		//END TODO


















	 $testFunction = function(){
		


		if(!function_exists("toggle")){
			function toggle($boolean){}
		}	
        
		print("<br>the output of your function called with true is the following:<br>
		<textarea>".toggle(true)."</textarea>
		<br>");
		if(false === toggle(true) && true === toggle(false)){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Toggle Function</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    
    
    
    
     
//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * You can call a function by typing the functionname, then (, then pass your parameters, close the brace), like this:
     * $array = array_push($array, 1);
     * 
     * END DESCRIPTION
     */
     
     
     

	 $testFunction = function(){
		 
		 $toReplaceText = 'I like learning with Microsoft Friends';
		 $squareRootOf = 81;
		 
		 /*BEGIN TODO
      * look up the functions to solve the following tasks
      * 1. Replace Microsoft with Linux in the String $toReplaceText.
      * 2. count the words in $toReplaceText programmatically and save the value in $countWords.
      * 3. calculate the square root of 81 and save it in $squareRoot
      * 4. save $toReplaceText in the variable $uppercaseText. Then convert $uppercaseText to uppercase.
      */
		
		

		//END TODO
		
		if(!isset($countWords)){
			$countWords = 0;
		}
		if(!isset($squareRoot)){
			$squareRoot = 0;
		}
		if(!isset($uppercaseText)){
			$uppercaseText = '';
		}
		


		
        
		print("<ol>
		<li>Your Variable \$toReplaceText is '$toReplaceText'</li>
		<li>Your Variable \$countWords is '$countWords'</li>
		<li>Your Variable \$squareRoot is '$squareRoot'</li>
		<li>Your Variable \$uppercaseText is '$uppercaseText'</li>
		</ol>");
		if(
			'I like learning with Linux Friends' == $toReplaceText
			&& 6 == $countWords
			&& 9 == $squareRoot
			&& 'I LIKE LEARNING WITH LINUX FRIENDS' == $uppercaseText
		){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
        
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Function Calling</h4>
    ",$testFunction));
    
    
    //-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * now we exercice a little
     * 
     * END DESCRIPTION
     */
     
     
     

	 $testFunction = function(){
		 
		 
		 /*BEGIN TODO
			implement a function str_reverse($text), which returns the string passed in reverse order
		*/
		
		
		

		//END TODO
		
		if(!function_exists("str_reverse")){
			function str_reverse($text){
				
			}
		}
		


		
		 $toReverseTexts[] = 'I like learning with Linux Friends';
		 $toReverseTexts[] = 'Programming is best';
        
		print("
				
				<table>
					<tr>
						<th>Text</th>
						<th>Your Result</th>
						<th>Should be</th>
					</tr>
					<tr>
						<td>".$toReverseTexts[0]."</td>
						<td>".str_reverse($toReverseTexts[0])."</td>
						<td>sdneirF xuniL htiw gninrael ekil I</td>		
					</tr>
					<tr>
						<td>".$toReverseTexts[1]."</td>
						<td>".str_reverse($toReverseTexts[1])."</td>
						<td>tseb si gnimmargorP</td>		
					</tr>
				</table>
		");
		
		
		
		if(
			'sdneirF xuniL htiw gninrael ekil I' == str_reverse($toReverseTexts[0])
			&& 'tseb si gnimmargorP' == str_reverse($toReverseTexts[1])
		){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
        
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Str Reverse</h4>
    ",$testFunction));
    
    
    
    
     
     

?>
