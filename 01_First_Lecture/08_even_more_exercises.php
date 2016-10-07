<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("08", "More Exercises");

//-----------------------------------------------------------------------------------------------------------------------------------

/*
 * BEGIN DESCRIPTION
In this exercise sheet, we do everything we learned again and again and again.
But the tasks are hidden in the text, so pay attention
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    When you are programming, you are god of a little world.
    In this world, you can create variables, lets imagine them as people.
    So when i write:
    $hans;
    I just created a person called $hans.
    I can give them data, lets imagine them as sheets with something written on it:
    On a sheet can be written either number(1,2,3,1.2...), a text("i am a text") or a boolean(true, false).
    To give a person a sheet with the number 2 on it, i write:
    $hans = 2;
    Now give $hans the number 1.
*/


    //END TODO


    if(!isset($hans)){
        $hans = null;
    }


    print("<br>Your \$hans has now '$hans'.<br>");

    if($hans === 1){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Variables</h4>
    if you made it right, the text below should be
    Your \$hans is '1' 
    ",$testFunction));


$testFunction = function(){
    $hans = 1;
    /*BEGIN TODO
    The cool thing about programming is, that whenever i call $hans, he gives me a new sheet with the same content
    as the sheet he has in his hand. If i call him, ithe sheet hans has does not get lost.
    So if i want to give $peter the same sheet as $hans has, i do like this:
    $peter = $hans;
    And $hans has still the 1.
    now give $fritz the same as $hans has.
*/


    //END TODO


    if(!isset($fritz)){
        $fritz = null;
    }


    print("<br>Your \$hans has now '$hans' and your \$fritz has now '$fritz'.<br>");

    if($fritz === $hans){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Variables</h4>
    if you made it right, the text below should be
    Your \$hans is '1' and your \$fritz is '1'
    ",$testFunction));



$testFunction = function(){
    $hans = 1;
    print("<br>At the beginning \$hans has is '$hans' <br>");
    /*BEGIN TODO
    But there is also a bad thing in your little world. Your people just can keep one sheet.
    If you give them another sheet, the just let the old sheet fall down, and it is lost.
    $hans has now 1.
    If i give him now 2, like this:
    $hans = 2;
    the 1 is lost.
    Try it, give $hans 2:
*/


    //END TODO


    if(!isset($hans)){
        $hans = null;
    }


    print("<br>Your \$hans has now '$hans' <br>");

    if(2 === $hans){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Variables</h4>
    if you made it right, the text below should be
    <br>At the beginning \$hans has is '1' <br>
    Your \$hans is '2'
    ",$testFunction));





?>
