<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 08.10.16
 * Time: 09:52
 */

require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("11", "Some Calculations with arrays");



$testFunction = function(){
    $startCoconuts = 9847;
    $plusTodayCoconuts=5643;
    $plusTomorrowCoconuts = 3480;
    /*BEGIN TODO
    We go a step further in abstraction. All these Variables have one thing in common.
    They are all transactions of fruits, that means, transactions.
    In programming, it is always important to extract the characteristics of the objects you are dealing with.
    Here, they are all numbers which describe transactions. People get fruits, or people sell fruits.
    So we can put them together somehow.
    And for that we can use arrays.
    Things, that are similar, we can put together in one variable, so that we don't have thousends of variable names
    we don't know whats inside.
    You can imagine it as opening a new subworld, were you again can name your people(variables), this time
    you don't have to begin with the $ sign, but with the name of the array and then the array operator ([]).
    To put the string 'value' in an array at the key 'key', you write:
    $variableName['key']='value';
    Example:
    i have:
    $startMandarin and today i get $todayMandarin and tomorrow i sell $tomorrowMandarin.
    Solution:
    //first, arange my code:
    $mandarinTransactions = array();
    $mandarinTransactions['start']=$startMandarin; //use the key start
    $mandarinTransactions['today'] = $todayMandarin;
    $mandarinTransactions['tomorrow']=$tomorrowMandarin;

    //now start solving the task:
    //start:
    $myMandarinAmount = $mandarinTransactions['start'];
    //today
     $myMandarinAmount =  $myMandarinAmount + $mandarinTransactions['today'];
     //tomorrow
     $myMandarinAmount =  $myMandarinAmount - $mandarinTransactions['tomorrow'];

    //now solve these tasks again, this time with aranging the code before and using the arrays instead of the variables.

    As always when you are chief, you have to solve all problems of everyone.
    For example is there $clara, she has $a Apples, and now gets additionally $b Apples.
    She wants to know how many Apples  she has at the end:
    So you can tell her, that she has $a plus $b Apples like this:
    $clara = $a + $b;
    Now $martin comes and has $startCoconuts Coconuts, and he gets $plusTodayCoconuts today and $plusTomorrowCoconuts tomorrow.
   Tell him how many Coconuts he will have tomorrow.

    ATTENTION: don't try to solve the whole task in one line.
    start with the first information, and add then information incrementally.
    Print the steps between, like:
    Task:
    Now $fritz comes and has $startCoconuts Coconuts, and he gets $todayCoconuts today and $tomorrowCoconuts tomorrow.
   Tell him how many Coconuts he will have tomorrow.
    Solution:
    $fritz = $todayCoconuts;
    print("at start, fritz has '$fritz' <br>");
    //today
    $fritz = $fritz + $todayCoconuts;
    print("today, fritz has '$fritz' <br>");
    //tomorrow
    $fritz = $fritz + $tomorrowCoconuts;
    print("tomorrow, fritz has '$fritz' <br>");

    This advise counts for EVERY exercise


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
    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;

    /*BEGIN TODO

    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    How many carots does he have on Wednesday evening?

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    How many oranges does he have on friday evening?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
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
    && $matthias -7000 === 20288 -3478-1239+3478-3489+1289
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
    ."<br>At the end \$matthias has '".(20288 -3478-1239+3478-3489+1289+7000)."' <br>"
    ."<br>At the end \$caro has '".(8609 - 562 -847+70)."' <br>"

    , $testFunction));





$testFunction = function(){
    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    How many carots has he sold on Wednesday evening?

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    How many oranges did he get until on friday evening?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
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
        && $matthias -7000 === 20288 +3478+1289
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
    ."<br>At the end \$matthias has '".(20288 +3478+1289+7000)."' <br>"
    ."<br>At the end \$caro has 'pineapples' <br>"

,$testFunction
));



$testFunction = function(){
    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;
    $carotMarketPrice=57;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;
    $orangeMarketPrice = 43;
    $orangeSellPrice = 88;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;
    $startMoney = 1000000;
    $pineappleMarketPrice = 89;
    $pineappleSellPrice = 143;
    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    On the market, one Carot is $carotMarketPrice CFA. How much did $hans pay for the Carots he started with

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    One orange is $orangeMarketPrice CFA. For how much did $matthias buy oranges?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
    One pineapple is $pineappleMarketPrice CFA. How much did she pay for the pineapples she still has on friday?

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
        && abs($matthias  - ((27288 +3478+1289)*43)) < 10e-5
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
    ."<br>At the end \$matthias has '".((27288 +3478+1289)*43)."' <br>"
    ."<br>At the end \$caro has '".((8609 - 562 -847+70+2357-8653+789)*89)."' <br>"

    ,$testFunction
));








$testFunction = function(){
    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;
    $carotMarketPrice=57;
    $carotSellPrice = 65;
    $carotNum = 45;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;
    $orangeMarketPrice = 43;
    $orangeSellPrice = 88;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;
    $startMoney = 1000000;
    $pineappleMarketPrice = 89;
    $pineappleSellPrice = 143;

    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    On the market, one Carot is $carotMarketPrice CFA. He can sell it for $carotSellPrice CFA
    How much profit does he make with $carotNum Carots?

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    One orange is $orangeMarketPrice CFA. He sells them For $orangeSellPrice CFA. How much profit did he make on the oranges he sold?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
    One pineapple is $pineappleMarketPrice CFA. She sells one for $pineappleSellPrice CFA. She started with $startMoney CFA.
    How much does she have in her pocket at the end?

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

    if(abs($hans - (45*8))<10e-5
        && abs($matthias  - ((3478+1239+3489)*(88-43))) < 10e-5
        && abs($caro  -  (1000000+((562+847+8653)*143)-((8679+2357+789)*89)))<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems Money 2</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(45*8)."' <br>"
    ."<br>At the end \$matthias has '".((3478+1239+3489)*(88-43))."' <br>"
    ."<br>At the end \$caro has '". (1000000+((562+847+8653)*143)-((8679+2357+789)*89))."' <br>"

    ,$testFunction
));


$testFunction = function(){
    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;

    /*BEGIN TODO
    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    How many percent of carots did he sell?

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    What is the percentage of unsold oranges?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
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
        && abs($matthias  - ((1-(3478+1239+3489) /(27288 +3478+1289))*100)) < 10e-5
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
    ."<br>At the end \$matthias has '".((1-(3478+1239+3489) /(27288 +3478+1289))*100)."%' <br>"
    ."<br>At the end \$caro has '".(562/ 8679 *100)."%' <br>"

    ,$testFunction
));



$testFunction = function(){

    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;
    $carotsPerBag = 121;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;
    $orangePerBag = 43;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;
//She has 156 Bags for 7 Pineapples a bag and 50 with space for 5 Pineapples.
    $numBigPineapplebags = 156;
    $pineapplesPerBigBag = 7;
    $numSmallPineapplebags = 50;
    $pineapplesPerSmallBag = 5;
    /*BEGIN TODO

    And the end of the week, they need to put the unsold fruits into bags.


    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    One Bag Carots has space for $carotsPerBag Carots. How many Bags does he need?

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    One Bag oranges has space for $orangePerBag oranges, how many bags does he need?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
    She has $numBigPineapplebags Bags for $pineapplesPerBigBag Pineapples a bag
    and $numSmallPineapplebags with space for $pineapplesPerSmallBag Pineapples.
    How many pineapples do not fit in the bags?

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

    if(abs($hans - ceil((1967+2384-1239+3489-3459)/121))<10e-5
        && abs($matthias  - ceil((27288-3478-1239+3478-3489+1289)/43)) < 10e-5
        && abs($caro  -  (  ((8679+2357+789)-(562+847+8653))  -(156*7) -(50*5)  ) )<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems Bags</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(ceil((1967+2384-1239+3489-3459)/121))."' <br>"
    ."<br>At the end \$matthias has '".(ceil((27288-3478-1239+3478-3489+1289)/43))."' <br>"
    ."<br>At the end \$caro has '".(  ((8679+2357+789)-(562+847+8653))  -(156*7) -(50*5)  )."' <br>"

    ,$testFunction
));




$testFunction = function(){

    $startCarots = 1967;
    $mondayCarots = 2384;
    $tuesdayCarots = 1239;
    $wednesdayCarots = 3489;
    $thursdayCarots = 3459;
    $carotsPerBag = 121;

    $startOranges = 27288;
    $mondayOranges = 3478;
    $tuesdayOranges = 1239;
    $wednesdayOranges = 3478;
    $thursdayOranges = 3489;
    $fridayOranges = 1289;
    $orangePerBag = 43;

    $startPineapples = 8679;
    $mondayPineapples = 562;
    $tuesdayPineapples = 847;
    $wednesdayPineapples = 2357;
    $thursdayPineapples = 8653;
    $fridayPineapples = 789;
//She has 156 Bags for 7 Pineapples a bag and 50 with space for 5 Pineapples.
    $numBigPineapplebags = 156;
    $pineapplesPerBigBag = 7;
    $numSmallPineapplebags = 50;
    $pineapplesPerSmallBag = 5;

    /*BEGIN TODO

    And the end of the week, they need to put the unsold fruits into bags.


    Now some more people with problem, tell them how much they have at the end:
    $hans has $startCarots Carots, on Monday he gets $mondayCarots Carots, on Tuesday he sells $tuesdayCarots,
    on wednesday he gets again $wednesdayCarots Carots, and on Thursday he sells $thursdayCarots
    One Bag Carots has space for $carotsPerBag Carots. How many don't fit in the bags?

    $matthias has $startOranges oranges, on Monday he sells $mondayOranges oranges, on Tuesday he sells $tuesdayOranges,
    on wednesday he gets again $wednesdayOranges oranges, and on Thursday he sells $thursdayOranges
    On friday he gets again $fridayOranges oranges
    One Bag oranges has space for $orangePerBag oranges, How many don't fit in the bags?


    $caro has $startPineapples pineapples, on Monday she sells $mondayPineapples pineapples, on Tuesday hey sells $tuesdayPineapples,
    on wednesday she gets again $wednesdayPineapples pineapples, and on Thursday she sells $thursdayPineapples
    On friday she gets again $fridayPineapples pineapples
    She has $numBigPineapplebags Bags for $pineapplesPerBigBag Pineapples a bag and $numSmallPineapplebags with space for $pineapplesPerSmallBag Pineapples.
    How many pineapples do not fit in the bags?

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

    if(abs($hans - ((1967+2384-1239+3489-3459)%121))<10e-5
        && abs($matthias  - ((27288-3478-1239+3478-3489+1289)%43)) < 10e-5
        && abs($caro  -  (  ((8679+2357+789)-(562+847+8653))  -(156*7) -(50*5)  ) )<10e-5
    ){
        return true;
    }

    return false;
};


$exerciceSheet->addExercice(new Exercice("
    
       <h4>Solving Problems How many don't fit in the bag?</h4>
    if you made it right, the text below should be
    "."<br>At the end \$hans has '".(ceil((1967+2384-1239+3489-3459)%121))."' <br>"
    ."<br>At the end \$matthias has '".(ceil((27288-3478-1239+3478-3489+1289)%43))."' <br>"
    ."<br>At the end \$caro has '".(  ((8679+2357+789)-(562+847+8653))  -(156*7) -(50*5)  )."' <br>"

    ,$testFunction
));






$testFunction = function(){
    $startFritz = 1000;
    $startHans = 0;
    $handover = 300;


    $startClara = 13904;
    $startBurnley = 1293;
    $handover2 = 4593;


    /*BEGIN TODO
   Now we have another problem.
    $fritz has $startFritz CFA, $hans has $startHans CFA.
    now $fritz wants to give $hans $handover CFA.

    We would write it like this:
    $fritz = $startFritz;

    $hans = $startHans;

    print("At the beginning, \$fritz has $fritz and \$hans has $hans<br>");
    //$fritz gives $hans $handover, so he looses $handover;
    $fritz = $fritz - $handover;

    //$hans gets $handover, so we add $handover
    $hans = $hans + $handover;

    print("At the end, \$fritz has $fritz and \$hans has $hans<br>");

    now $clara has $startClara CFA, and gives $burnley $startBurnley CFA, who already has $handover2 CFA.
*/


    //END TODO


    if(!isset($clara)){
        $clara = null;
    }

    if(!isset($burnley)){
        $burnley = null;
    }


    print("At the end, \$clara has $clara and \$burnley has $burnley<br>");

    if(13904-1293 === $clara
        && 4593 + 1293 === $burnley
    ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Giving money</h4>
    if you made it right, the text below should be
    At the end, \$clara has ".(13904-1293)."  and \$burnley has ".(4593 + 1293)."<br>
    ",$testFunction));




$testFunction = function(){

    $startHans = 3459;
    $startFritz = 458;
    $startClara = 4578;
    $startMartin = 4893;
    $startPaul = 8731;
    $startAlana = 2348;


    $handover0=495;
    $handover1=1203;
    $handover2=3489;
    $handover3=2394;
    $handover4=293;
    $handover5=139;

    /*BEGIN TODO
   Now, we do this in a larger scale:
    $hans has $startHans CFA
    $fritz has $startFritz CFA
    $clara has $startClara CFA
    $martin has $startMartin CFA
    $paul has $startPaul CFA
    $alana has $startAlana CFA


    $hans gives $clara $handover0 CFA
    $alana gives $martin $handover1 CFA
    $paul gives $fritz $handover2 CFA
    $clara gives $alana $handover3 CFA
    $fritz gives $hans $handover4 CFA
    $paul gives $fritz $handover5 CFA
*/


    //END TODO


    if(!isset($hans)){
        $hans = null;
    }

    if(!isset($alana)){
        $alana = null;
    }
    if(!isset($clara)){
        $clara = null;
    }

    if(!isset($martin)){
        $martin = null;
    }

    if(!isset($paul)){
        $paul = null;
    }

    if(!isset($alana)){
        $alana = null;
    }

    if(3459-495+293 === $hans
        && 2348-1203+2394 === $alana
        &&  4578+495-2394 === $clara
        && 4893+1203 == $martin
        && 8731-3489-139=== $paul
        && 2348-1203+2394 === $alana
    ){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Giving money in larger scale</h4>
    if you made it right, you should pass the exercise<br>
    ",$testFunction));


