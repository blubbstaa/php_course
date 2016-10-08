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

    ATTENTION: don't try to solve the whole task in one line.
    start with the first information, and add then information incrementally.
    Print the steps between, like:
    Task:
    Now $fritz comes and has 8 Coconuts, and he gets 3 today and 8 tomorrow.
   Tell him how many Coconuts he will have tomorrow.
    Solution:
    $fritz = 8;
    print("at start, fritz has '$fritz' <br>");
    //today
    $fritz = $fritz + 3;
    print("today, fritz has '$fritz' <br>");
    //tomorrow
    $fritz = $fritz + 8;
    print("tomorrow, fritz has '$fritz' <br>");


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
    
       <h4>Solving Problems</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1067 + 2384 -1239 + 3489+900)."' <br>"
    ."<br>At the end \$matthias has '".(20288 -3478-1239+3478-3489+1298+7000)."' <br>"
    ."<br>At the end \$caro has '".(8609 - 562 -847+70)."' <br>"

    , $testFunction));





$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    How many carots has he sold on Wednesday evening?

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    How many oranges did he get until on friday evening?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    What fruit does she sell?
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

    if($hans - 200 === 1039
        && $matthias -7000 === 20288 +3478+1298
        && $caro ==='pineapples'
    ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems 2</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1067 + 2384  + 3489+900)."' <br>"
    ."<br>At the end \$matthias has '".(20288 +3478+1298+7000)."' <br>"
    ."<br>At the end \$caro has 'pineapples' <br>"

,$testFunction
));



$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    On the market, one Carot is 57 CFA. How much did $hans pay for the Carots he started with

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    One orange is 43 CFA. For how much did $matthias buy oranges?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    One pineapple is 89 CFA. How much did she pay for the pineapples she still has on friday?

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

    if(abs($hans - (1967*57))<10e-5
        && abs($matthias  - ((27288 +3478+1298)*43)) < 10e-5
        && abs($caro  -  (8609 - 562 -847+70+2357-8653+789)*89)<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems Money</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1967*57)."' <br>"
    ."<br>At the end \$matthias has '".((27288 +3478+1298)*43)."' <br>"
    ."<br>At the end \$caro has '".((8609 - 562 -847+70+2357-8653+789)*89)."' <br>"

    ,$testFunction
));


$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    How many percent of carots did he sell?

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    What is the percentage of unsold oranges?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    What is the percentage of pineapples he got on wednesday compared to what he got in total?
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


    print("<br>At the end \$hans has '$hans'% <br>");
    print("<br>At the end \$matthias has '$matthias'% <br>");
    print("<br>At the end \$caro has '$caro'% <br>");

    if(abs($hans - (1239/(1967 + 2384  + 3489) *100))<10e-5
        && abs($matthias  - ((1-(3478+1239+3489) /(27288 +3478+1298))*100)) < 10e-5
        && abs($caro  -  (  562/ 8679 *100))<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems Percentage</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1239/(1967 + 2384  + 3489) *100)."%' <br>"
    ."<br>At the end \$matthias has '".((1-(3478+1239+3489) /(27288 +3478+1298))*100)."%' <br>"
    ."<br>At the end \$caro has '".(562/ 8679 *100)."%' <br>"

    ,$testFunction
));





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
    
       <h4>Solving Problems</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1067 + 2384 -1239 + 3489+900)."' <br>"
    ."<br>At the end \$matthias has '".(20288 -3478-1239+3478-3489+1298+7000)."' <br>"
    ."<br>At the end \$caro has '".(8609 - 562 -847+70)."' <br>"

    , $testFunction));





$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    How many carots has he sold on Wednesday evening?

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    How many oranges did he get until on friday evening?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    What fruit does she sell?
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

    if($hans - 200 === 1039
        && $matthias -7000 === 20288 +3478+1298
        && $caro ==='pineapples'
    ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems 2</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1067 + 2384  + 3489+900)."' <br>"
    ."<br>At the end \$matthias has '".(20288 +3478+1298+7000)."' <br>"
    ."<br>At the end \$caro has 'pineapples' <br>"

    ,$testFunction
));



$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    On the market, one Carot is 57 CFA. How much did $hans pay for the Carots he started with

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    One orange is 43 CFA. For how much did $matthias buy oranges?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    One pineapple is 89 CFA. How much did she pay for the pineapples she still has on friday?

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

    if(abs($hans - (1967*57))<10e-5
        && abs($matthias  - ((27288 +3478+1298)*43)) < 10e-5
        && abs($caro  -  (8609 - 562 -847+70+2357-8653+789)*89)<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems Money</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1967*57)."' <br>"
    ."<br>At the end \$matthias has '".((27288 +3478+1298)*43)."' <br>"
    ."<br>At the end \$caro has '".((8609 - 562 -847+70+2357-8653+789)*89)."' <br>"

    ,$testFunction
));


$testFunction = function(){
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has 1967 Carots, on Monday he gets 2384 Carots, on Tuesday he sells 1239,
    on wednesday he gets again 3489 Carots, and on Thursday he sells 3459
    How many percent of carots did he sell?

    $matthias has 27288 oranges, on Monday he sells 3478 oranges, on Tuesday he sells 1239,
    on wednesday he gets again 3478 oranges, and on Thursday he sells 3489
    On friday he gets again 1289 oranges
    What is the percentage of unsold oranges?


    $caro has 8679 pineapples, on Monday she sells 562 pineapples, on Tuesday hey sells 847,
    on wednesday she gets again 2357 pineapples, and on Thursday she sells 8653
    On friday she gets again 789 pineapples
    What is the percentage of pineapples he got on wednesday compared to what he got in total?
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


    print("<br>At the end \$hans has '$hans'% <br>");
    print("<br>At the end \$matthias has '$matthias'% <br>");
    print("<br>At the end \$caro has '$caro'% <br>");

    if(abs($hans - (1239/(1967 + 2384  + 3489) *100))<10e-5
        && abs($matthias  - ((1-(3478+1239+3489) /(27288 +3478+1298))*100)) < 10e-5
        && abs($caro  -  (  562/ 8679 *100))<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems Percentage</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(1239/(1967 + 2384  + 3489) *100)."%' <br>"
    ."<br>At the end \$matthias has '".((1-(3478+1239+3489) /(27288 +3478+1298))*100)."%' <br>"
    ."<br>At the end \$caro has '".(562/ 8679 *100)."%' <br>"

    ,$testFunction
));




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












