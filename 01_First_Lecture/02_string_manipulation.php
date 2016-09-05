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



//-----------------------------------------------------------------------------------------------------------------------------------


/*
 * BEGIN DESCRIPTION
Strings in (and any other programming language) are really just lists of characters
Thats why we can use the array operator
with the array operator, we can get a certain character of a string:
let's say we have a string'This is a string', like this:
To get the first character of this string, we just use
$firstcharacter = 'This is a string'[0]

As you noticed, the first character is not character 1, but character 0.
In programming, we begin with 0.
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the third letter of the string 'This is a string' to it
    */

    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }



    print("<br>Your \$variable1 is '$variable1'.<br>");
    print("<br>The third character of  This is a string' is 'i'.<br>");

    if($variable1 === 'i' ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Array operator in Strings</h4>
    if you made it right, the text below should be
    Your \$variable1 is 'yet another string this string is appended'
    ",$testFunction));
