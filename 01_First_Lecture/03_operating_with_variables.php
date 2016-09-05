<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 05.09.16
 * Time: 22:55
 */

require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("03", "Operating with variables");

/*
 * BEGIN DESCRIPTION
 *  Variables are not only baskets, where you can put data.
 * You can also use them as if they were numbers or strings. So you don't have to write the data multiple times
 * You just use the variable instead. So now, we are doing the same things we did in the last two exercices, but with variables
 *
 * END DESCRIPTION
 */



//-----------------------------------------------------------------------------------------------------------------------------------



$testFunction = function(){
    $summand1 = 12345;
    $summand2 = 54758;
    /*BEGIN TODO
    create a variable $variable1 and assign the sum of $summand1 and $summand2 to it
*/


    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }


    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 12345 + 54758){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Addition</h4>
    if you made it right, the text below should be
    Your \$variable1 is '".(12345 + 54758)."' 
    ",$testFunction));



//-----------------------------------------------------------------------------------------------------------------------------------



$testFunction = function(){
    $minuend = 54758;
    $subtrahend = 12345;
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  $minuend minus $subtrahend to it
*/


    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }


    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 54758 - 12345){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Substraction</h4>
    if you made it right, the text below should be
    Your \$variable1 is '".(54758 - 12345)."' 
    ",$testFunction));


//-----------------------------------------------------------------------------------------------------------------------------------



$testFunction = function(){
    $multiplikator1 = 5478;
    $multiplikator2 = 1235;
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  $multiplikator1 times $multiplikator2 to it
*/


    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }


    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 5478 * 1235){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Multiplication</h4>
    if you made it right, the text below should be
    Your \$variable1 is '".(5478 * 1235)."' 
    ",$testFunction));



//-----------------------------------------------------------------------------------------------------------------------------------





$testFunction = function(){
    $dividend = 1;
    $divisor = 2;
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  $dividend devided by $divisor to it
*/

    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }



    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 1/2){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Division</h4>
    if you made it right, the text below should be
    Your \$variable1 is '".(1/2)."' 
    ",$testFunction));






$testFunction = function(){
    $number = 13246;
    $moduloBy = 83;
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  $number modulo by $moduloBy to it
*/

    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }



    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 13246%83){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Modulo</h4>
    if you made it right, the text below should be
    Your \$variable1 is '".(13246%83)."' 
    ",$testFunction));




$testFunction = function(){
    $base = 20;
    $potence = 5;
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  the potence of $potence to the base of $base
*/

    //END TODO


    if(!isset($variable1)){
        $variable1 = null;
    }



    print("<br>Your \$variable1 is '$variable1'.<br>");

    if($variable1 === 20**5){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Potence</h4>
    if you made it right, the text below should be
    Your \$variable1 is '".(20**5)."' 
    ",$testFunction));





$testFunction = function(){
    $startString = 'yet another string' ;
    $appendString = ' this string is appended';
    /*BEGIN TODO
    create a variable $variable1 and assign the string '$startString concatenated with $appendString
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




$testFunction = function(){
    $string = 'This is a string';
    /*BEGIN TODO
    create a variable $variable1 and assign the third letter of the string $string to it
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


?>
