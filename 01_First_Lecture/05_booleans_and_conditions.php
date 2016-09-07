<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("05", "Booleans and conditions");


//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * Now you know numbers, strings and arrays.
     * there is another important data type, and that is the boolean.
     * a boolean can either be true or false.
     * $bool = true;
     * $bool = false; 
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
        /*BEGIN TODO
        create a variable $bool and assign the value false to it.
    */


        //END TODO


        if(!isset($bool)){
            $bool = null;
        }
		
		if($bool === false){
			return true;
		}else{
			print("<br>your \$bool is not false<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Boolean assignment</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    

//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * in programming, the if statement is very important.
     * we use it like this:
     * if($boolean){
     * 		$doSomething = 1;
     * }
     * 
     * the expressions between { and } only get executed, wenn the $boolean is true.
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
	$truebool = true;
	$falsebool = false;
		
    /*BEGIN TODO
     * 
        create an if statement, where if $truebool is true, assign the value 1 to the variable $a;
		create a second if statement, where if $falsebool is true, assign the value 1 to the variable $b		
        
    */


        //END TODO
        
        


        if(!isset($a)){
            $a = null;
        }
        if(!isset($b)){
            $b = null;
        }
        
        print("<br>your \$a is '$a' and your \$b is '$b'<br>");
		
		if($a === 1 and is_null($b)){
			return true;
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>If statement</h4>
    if you made it right, the text below should be:<br>
    your \$a is not '1' and your \$b is ''<br>
    
    ",$testFunction));
    
    
//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * we can define a program part, which gets executed when the $boolean is false
     * if($boolean){
     * 		$doSomething = 1;
     * }else{
     * 		$doSomethingElse = 1;
     * }
     * 
     * if $boolean is false, the variable $doSomething is not 1, but $doSomethingElse is 1. 
     * 
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
	$truebool = true;
	$falsebool = false;
		
    /*BEGIN TODO
     * 
        create an if statement, where if $truebool is true, assign the value 1 to the variable $a, 
			else, assign the value 2 to variable $a
		create a second if statement, where if $falsebool is true, assign the value 1 to the variable $b
			else, assign the value 2 to variable $b
        
    */


        //END TODO
        
        


        if(!isset($a)){
            $a = null;
        }
        if(!isset($b)){
            $b = null;
        }
        
        print("<br>your \$a is '$a' and your \$b is '$b'<br>");
		
		if($a === 1 and $b === 2){
			return true;
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>If else statement</h4>
    if you made it right, the text below should be:<br>
    your \$a is not '1' and your \$b is '2'<br>
    
    ",$testFunction));
    
    
//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * instead of using a variable to check the condition, we can use an comparison expression.
     * comparison expressions always return boolean values (boolean values are either true or false).
     * First, you will learn the equality comparison operator.
     * We write it like this: == (two equal signs)
     * 
     * For an assignment, we use the single equal sign:
     * $a = 1;
     * 
     * for the comparison operator, we use two equal signs:
     * $a == 1
     * 
     * if $a is 1, this expression will be true.
     * 
     * if($a == 1){
     * 		$doSomething = 1;
     * }else{
     * 		$doSomethingElse = 1;
     * }
     * 
     * if $a is 1, the variable $doSomething is 1 and $doSomethingElse is not 1. 
     * 
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
	$firstnumber = 27;
	$firsttext = 'test';
		
    /*BEGIN TODO
     * 
        create an if statement, where if $firstnumber is 27, assign the value 1 to the variable $a, 
			else, assign the value 2 to variable $a
		create a second if statement, where if $firsttext is 'test', assign the value 1 to the variable $b
			else, assign the value 2 to variable $b
        
    */


        //END TODO
        
        


        if(!isset($a)){
            $a = null;
        }
        if(!isset($b)){
            $b = null;
        }
        
        print("<br>your \$a is '$a' and your \$b is '$b'<br>");
		
		if($a === 1 and $b === 2){
			return true;
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>If else with equality operator</h4>
    if you made it right, the text below should be:<br>
    your \$a is not '1' and your \$b is '2'<br>
    
    ",$testFunction));    
    
    
    
    
        

?>
