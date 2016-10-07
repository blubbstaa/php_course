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
    $jesus = "bred";
    $alf="no bred";
    $jonas="no bred";
    $judas="no bred";
    $ali="no bred";
    $joshua="no bred";
    $albin="no bred";
    $clara="no bred";

    print("<br>At the beginning \$alf has '$alf' <br>");
    print("<br>At the beginning \$jonas has '$jonas' <br>");
    print("<br>At the beginning \$judas has '$judas' <br>");
    print("<br>At the beginning \$ali has '$ali' <br>");
    print("<br>At the beginning \$joshua has '$joshua' <br>");
    print("<br>At the beginning \$albin has '$albin' <br>");
    print("<br>At the beginning \$clara has '$clara' <br>");
    /*BEGIN TODO
    This brings me to a funny idea.
    You all know the story about jesus, sharing the bred and it gets more and more and in the end, everyone has bred?
    In programming, that is no problem.
    Let now $jesus give  $alf,$jonas,$judas,$ali,$joshua,$albin and $clara give what he has. ( he has bred).
*/


    //END TODO


    if(!isset($hans)){
        $hans = null;
    }

    print("<br><br><br><br>-------------------<br><br><br><br>");
    print("<br>At the end \$jesus has '$jesus' <br>");
    print("<br>At the end \$alf has '$alf' <br>");
    print("<br>At the end \$jonas has '$jonas' <br>");
    print("<br>At the end \$judas has '$judas' <br>");
    print("<br>At the end \$ali has '$ali' <br>");
    print("<br>At the end \$joshua has '$joshua' <br>");
    print("<br>At the end \$albin has '$albin' <br>");
    print("<br>At the end \$clara has '$clara' <br>");

    if('bred' === $jesus
        && 'bred' === $alf
        && 'bred' === $jonas
        && 'bred' === $judas
        && 'bred' === $ali
        && 'bred' === $joshua
        && 'bred' === $albin
        && 'bred' === $clara){
        return true;
    }

    return false;
};
$exerciceSheet->addExercice(new Exercice("
    
       <h4>Jesus</h4>
    if you made it right, anyone should not be hungry any more at the end
    ",$testFunction));

$testFunction = function(){
    $hans = 1;
    print("<br>At the beginning \$hans has is '$hans' <br>");
    /*BEGIN TODO
    But there is also a bad thing in your little world. Your people just can keep one sheet.
    They are like students: You teach them one thing. They learn it. Then you teach them a second thing,
    they learn it too, but have already forgotten the first thing.
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
    
       <h4>Copying</h4>
    if you made it right, the text below should be
    <br>At the beginning \$hans has is '1' <br>
    Your \$hans is now '2'
    ",$testFunction));










$testFunction = function(){
    $hans = "Fritz's Pencil";
    $fritz = "Hans' Pencil";
    print("<br>At the beginning \$hans has  '$hans' <br>");
    print("<br>At the beginning \$fritz has  '$fritz' <br>");
    /*BEGIN TODO
    That the people let down their sheet always when they get a new sheet makes some tasks difficult.
    Lets say $hans as Fritz's Pencil and $fritz has Hans' Pencil. In our world, we just would say:
    switch the pencils.
    If we do that here, something silly happens:
    Give now $hans what $fritz has and $fritz was $hans has
*/


    //END TODO





    print("<br>At the end \$hans has  '$hans' <br>");
    print("<br>At the end \$fritz has  '$fritz' <br>");

    if($fritz === $hans){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Switching 1</h4>
    if you made it right, both should have Hans' Pencil<br>
    ",$testFunction));




$testFunction = function(){
    $hans = "Fritz's Pencil";
    $fritz = "Hans' Pencil";
    print("<br>At the beginning \$hans has  '$hans' <br>");
    print("<br>At the beginning \$fritz has  '$fritz' <br>");
    /*BEGIN TODO
    What, now both have Hans' Pencil??? Is this whichcraft???
    No, it's pure logic.
    As I said before, if you give now hans what fritz has, he lets his pencil fall down. And always when $fritz gives
    something, he keeps what he has and only gives a copy.
    So $fritz makes a copy of "Hans' pencil", gives it to hans, hans let Fritz's Pencil fall down and it is lost,
    and takes "Hans' pencil". At the end, both have "Hans' pencil".

    So how do we solve that problem??
    As i said at the beginning, we are god. So we can just create a new person called $tmp.
    An auxiliary variable.
    Then, we give first $tmp what hans has, so that Fritz's Pencil is not lost, but at $tmp.
    Then, we give $hans what $fritz has.
    And at the end, $fritz takes the pencil which was at the start at $hans, but now at $tmp, and the switch is complete.
*/


    //END TODO




    print("<br><br><br><br>-------------------<br><br><br><br>");
    print("<br>At the end \$hans has  '$hans' <br>");
    print("<br>At the end \$fritz has  '$fritz' <br>");

    if("Hans' Pencil" === $hans
    && "Fritz's Pencil" === $fritz){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Switching 2</h4>
    if you made it right, both should have Hans' Pencil<br>
    Your \$hans is '2'
    ",$testFunction));




$testFunction = function(){
    $jesus = "jonas shoes";
    $alf="jesus shoes";
    $jonas="ali's shoes";
    $judas="joshua's shoes";
    $ali="albin's shoes";
    $joshua="judas' shoes";
    $albin="clara's shoes";
    $clara="alf's shoes";

    print("<br>At the beginning \$alf has '$alf' <br>");
    print("<br>At the beginning \$jonas has '$jonas' <br>");
    print("<br>At the beginning \$judas has '$judas' <br>");
    print("<br>At the beginning \$ali has '$ali' <br>");
    print("<br>At the beginning \$joshua has '$joshua' <br>");
    print("<br>At the beginning \$albin has '$albin' <br>");
    print("<br>At the beginning \$clara has '$clara' <br>");
    /*BEGIN TODO
    Your students are coming to class, but they have made a big mess with their shoes.
    Bring it in order with switching
*/


    //END TODO


    if(!isset($hans)){
        $hans = null;
    }
    print("<br><br><br><br>-------------------<br><br><br><br>");

    print("<br>At the end \$jesus has '$jesus' <br>");
    print("<br>At the end \$alf has '$alf' <br>");
    print("<br>At the end \$jonas has '$jonas' <br>");
    print("<br>At the end \$judas has '$judas' <br>");
    print("<br>At the end \$ali has '$ali' <br>");
    print("<br>At the end \$joshua has '$joshua' <br>");
    print("<br>At the end \$albin has '$albin' <br>");
    print("<br>At the end \$clara has '$clara' <br>");

    if('jesus shoes' === $jesus
        && 'alf\'s shoes' === $alf
        && 'jonas shoes' === $jonas
        && 'judas\' shoes' === $judas
        && 'ali\'s shoes' === $ali
        && 'joshua\'s shoes' === $joshua
        && 'albin\'s shoes' === $albin
        && 'clara\'s shoes' === $clara){
        return true;
    }

    return false;
};
$exerciceSheet->addExercice(new Exercice("
    
       <h4>Jesus</h4>
    if you made it right, anyone should not be hungry any more at the end
    ",$testFunction));




$testFunction = function(){
    ob_start();
    /*BEGIN TODO
    So you know now how to make new variables (people), and how to let them hand over things.
    But you want to show your world what is inside. You can do that by printing them.
    To print a variable, we need a special thing called function. You can imagine them as companies.
    You have to give them something, and they do something for you with it. And sometimes, they give you something back.
    To use the service of a company, you need to write down its name, like this:
    print('Hello');
    You are giving the sheet 'Hello' to the company print, and they put it on the website you are calling.
    So now give the sheet 'i want to see it' to the company print, to print it on the website

*/

    //END TODO

    $output = ob_get_contents();


    if("i want to see it" ===$output){
        return true;
    }

    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Printing</h4>
    if you made it right, you should see the output: i want to see it<br>
    ",$testFunction));











?>
