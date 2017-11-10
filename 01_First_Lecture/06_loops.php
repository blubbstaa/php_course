<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("06", "Loops");


//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * On this Sheet, you will learn what loops are.
     * In Programming, we have a lot of repeating tasks, and that's why we use loops.
     * The easiest one is the while loop. A loop looks like this:
     * while(condition){
     * 	//as long as condition is true, repeat this
     * }
     * 
     * as example, we want to devide a number by 2, as long as it is dividable by 2.
     * 
     * $startnumber = 123478;
     * while($startnumber%2 == 0){
     * 	$startnumber/=2;
     * }
     * 
     * ($startnumber/=2 is a short notation for $startnumber = $startnumber/2);
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
		$startnumber = 6804;
        /*BEGIN TODO
			Devide $startnumber as long by 3 as it is possible 
			print the number in every loop (to print a variable, use print($startnumber."<br>");)
		*/
$startnumber = 6804;
while ( $startnumber % 3 == 0 ) {
		$startnumber /= 3;
		print ($startnumber . "<br>") ;
	}
	
        //END TODO


        
		
		if($startnumber === 4*7){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>While loop</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    
    
    //-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * now we will use the for loop.
     * a for loop looks like this:
     * 
     * for($i=0; $i<10;$i++){
     * 		print($i."<br>");
     * }
     * 
     * explanation:
     * for //that is kind of loop you start,
     * () //between these braces is the definition
     * $i=0;//here, you can define variables, normally an iteration variable, and it's normalli called $i, $ii, $j or $k;
     * $i<10; //here is the condition (like the condition for the while loop), how long the iteration should take place.
     * here, it should take place until $i is no longer smaller then 10.
     * $i++ //increment statement. This is a shorthand for $i+=1, which is a shorthand for $i = $i+1;, which increments $i by 1.
     * 
     * So this loop will be executed 10 times.
     * The definition part is executed before the loop starts. before the statements between the {} braces is executed,
     * the condition gets checked, before every iteration.
     * And after the statements between {}, the incrementation part gets executed.
     * 
     * This is just a shorthand for 
     * 
     * $i = 0;
     * while($i < 10){
     * 		print($i."<br>");
     * 		$i++;
     * } 
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
		$stringWithB = 'b';
        /*BEGIN TODO
			make a for loop to generate a string of 100 times the character 'b' and save the string into $stringWithB;
			then print $stringWithB;
		*/

$stringWithB = 'b';
	
	while ( strlen($stringWithB)<100 ) {
		$stringWithB = $stringWithB . 'b';
		print ($stringWithB . "<br>");
	}
        //END TODO























        
		
		if($stringWithB === str_repeat('b', 100) ){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>For loop</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    
     //-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * as the last exercise, you will learn the foreach loop.
     * The foreach loop is used to do something for every element that is in an array.
     * as an example, you want to print every name of the students in an array of students:
     * 
     * $studentsArray = array('Michael', 'Max', 'Tom', 'Cherry', 'Sarah');
     * foreach($studentsArray as $studentnum => $student){
     * 		print($studentnum." : ".$student."<br>");
     * }
     * 
     * Explanation:
     * it goes throught every element in the $studentsArray.
     * First Element is 'Micheal', the key is 0 (first element)
     * so in the first iteration, $studentnum is 0 and $student is 'Michael'.
     * then, it prints:
     * 0 : Michael
     * and it does that for every student, so that the whole output is finally:
     * 0 : Michael
     * 1 : Max
     * 2 : Tom
     * 3 : Cherry
     * 4 : Sarah
     * 
     * 
     *
     * END DESCRIPTION
     */


    $testFunction = function(){
		$studentsArray = array('Michael', 'Max', 'Tom', 'Cherry', 'Sarah');
		$studentsCommaSeperated = "";
        /*BEGIN TODO
			make a foreach loop through the students array, and make a comma seperated list of the students,
			save the list in the variable $studentsCommaSeperated
			it should look like this:
			Michael,Max,Tom...
			print the variable at the end
		*/
foreach ($studentsArray as $studentnum => $studentvalue){
	print($studentvalue);
}
		
        //END TODO























        
		
		if($studentsCommaSeperated === implode(',', $studentsArray) ){
			return true;
		}else{
			print("<br>something went wrong<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Foreach loop</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
 
    
    
 ?>
