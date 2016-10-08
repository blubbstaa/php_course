<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 08.10.16
 * Time: 09:52
 */

require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("09", "Some Calculations");



$testFunction = function(){
    /*BEGIN TODO
    As always when you are chief, you have to solve all problems of everyone.
    For example is there $clara, she has 4589 Apples, and now gets additionally 3467 Apples.
    She wants to know how many Apples  she has at the end:
    So you can tell her, that she has 4589 plus 3467 Apples like this:
    $clara = 4589 + 3467;
    Now $martin comes and has 9847 Coconuts, and he gets 5643 today and 3480 tomorrow.
   Tell him how many Coconuts he will have tomorrow.
*/


    //END TODO


    if(!isset($martin)){
        $martin = null;
    }


    print("<br>Your \$martin has now '$martin'.<br>");

    if($martin - 3 === 9847 + 5640 +3480){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Martin</h4>
    if you made it right, the text below should be
    Your \$martin is '".(9847 + 5640 +3480-3)." ' 
    ",$testFunction));



$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    How many carots does he have on Wednesday evening?

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    How many oranges does he have on friday evening?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    How many pineapples does she have on Tuesday evening?
*/


    //END TODO


    if(!isset($hans)){
        $hans = null;
    }

    if(!isset($matthias)){
        $matthias = null;
    }

    if(!isset($caro)){
        $caro = null;
    }


    print("<br>At the end \$hans has '$hans' <br>");
    print("<br>At the end \$matthias has '$matthias' <br>");
    print("<br>At the end \$caro has '$caro' <br>");

    if($hans - 900 === 1067 + 2384 -1239 + 3489
    && $matthias -7000 === 20288 -3478-1239+3478-3489+1298
    && $caro -70 ===     8609 - 562 -847
    ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Martin</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1067 + 2384 -1239 + 3489+900)."' <br>"
    ."<br>At the end \$matthias has '".(20288 -3478-1239+3478-3489+1298+7000)."' <br>"
    ."<br>At the end \$caro has '".(8609 - 562 -847+70)."' <br>"));