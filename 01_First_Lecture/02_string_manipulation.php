<?php
/**
 * Createdconcatenation
 * User: lucius
 * Date: 05.09.16
 * Time: 20:47
 */

require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("02", "String Manipulation");


/*
 * BEGIN DESCRIPTION
Any higher Programming Language knows a Concept called Strings.
String is, what a non Programmer calls text, or like a Programmer would say: a list of characters
In PHP, we assign Strings to variables like this:
$variable1 = 'this is a string';

 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the string 'yet another string' to it
*/

    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }



    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 'yet another string' ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>String assignment</h4>
    if you made it right, the text below should be
    Your \$variable1 is 'yet another string' 
    ",$testFunction));



//-----------------------------------------------------------------------------------------------------------------------------------


/*
 * BEGIN DESCRIPTION
Like with numbers, we can also do things with Strings
First thing you learn is how to concatenate two Strings ( or append one string to another)
to concatenate two string, we use the . (point) operator
like this:
'some string '.'another string';

 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the string 'yet another string' concatenated with ' this string is appended'
    to it
    */

    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }



    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 'yet another string this string is appended' ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>String concatenation</h4>
    if you made it right, the text below should be
    Your \$variable1 is 'yet another string this string is appended'
    ",$testFunction));
