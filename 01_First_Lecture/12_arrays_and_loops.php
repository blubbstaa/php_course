<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 10.10.16
 * Time: 09:14
 */


require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("11", "Some Calculations with arrays");

/*
 * BEGIN DESCRIPTION
 * Arrays have an even bigger potential.
 * Lets say we have 5 Students, Albin, Joshua, Clara, Aisha and Marck.
 * Now first, they are all people, students, so we put them in an array.
 */

print('Result of Code in Description<br>');
  $students = array();
  $students['Albin']=""; //we just prepare, we don't know yet,
  //what we have to do with them. So we put an empty string inside
 $students['Joshua']="";
  $students['Clara']="";
  $students['Aisha']="";
  $students['Marck']="";

  //as always when we print our variables after we did a task.
//with an array, you have to use print_r instead of print.
//to print an array, you always to like this:
print('Initialisation of Array<br>');
print_r($students);
print('<br>');
  //Now, we have to give everyone a pencil.
  //so normally, we would to:
  $toGive = 'pencil'; //if we have to give another thing later, we can use the same code, just change this variable
  $students['Albin']=$toGive;
 $students['Joshua']=$toGive;
  $students['Clara']=$toGive;
  $students['Aisha']=$toGive;
  $students['Marck']=$toGive;
print('After giving everyone pencil<br>');
print_r($students);
print('<br>');

print('End Result of Code in Description<br>');



  /*END DESCRIPTION
 */



$testFunction = function(){

    /*BEGIN TODO
    Now, do the same as above with the same students, but this time, you have to give
    'textbook'.


*/


    //END TODO


    if(!isset($students)){
        $students = array();
    }


    print("<br>Your \$students is  now:<br>");
    print_r($students);

    if(count($students)==0){
        return false;
    }
    $studentsContent = null;

    foreach($students as $key => $value){
        if($studentsContent == null){
            $studentsContent = $value;
        }
        if($studentsContent != $value){
            print("<br>You have made an error, not all students have the same<br>");
            return false;
        }
    }


    if($studentsContent== 'textbook'){
        return true;
    }
    print("<br>You have made an error, all students should have 'textbook'<br>");
    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Textbook</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));





$testFunction = function(){


    /*BEGIN DESCRIPTION
        As you see, we write for every student more or less the same:
        $students['Albin']=$toGive;
        $students['Joshua']=$toGive;
        The only thing that changes is the key, the name of the student.

        Wouldn't it be nice if you could say:
        Do that for every student:
            give him $toGive ?

        We have this possibility with the foreach loop.
        foreach($array as $key => $value){
            //do something
        }
        This means: for each element in $array, put the key in $key, put the value in $value, and then execute the script.

        Here an example
    */
    print('Result of Code in Description<br>');
    $students = array();
    $students['Albin']=""; //we just prepare, we don't know yet,
    //what we have to do with them. So we put an empty string inside
    $students['Joshua']="";
    $students['Clara']="";
    $students['Aisha']="";
    $students['Marck']="";

    //as always when we print our variables after we did a task.
//with an array, you have to use print_r instead of print.
//to print an array, you always to like this:
    print('Initialisation of Array<br>');
    print_r($students);
    print('<br>');
    //Now, we have to give everyone a pencil.
    //so normally, we would to:
    $toGive = 'pencil'; //if we have to give another thing later, we can use the same code, just change this variable

    foreach ($students as $studentname => $value){
        print('--------------------------------------------------------------------------<br><br>');
        print('Start of foreach loop, which is executed for each element in $students<br>');
        print('$students is at start of loop iteration<br>');
        print_r($students);
        print('<br>');
        print('Before the code is executed, the key is copied in the variable after the as<br>');
        print('Which is in this case in this iteration: $studentname : \''.$studentname.'\' <br>');
        print('and the value is copied in the variable after the =><br>');
        print('Which is in this case in this iteration: $value : \''.$value.'\' <br>');


        //now, we give the student with the current $studentname what we have to give:
        print('<br><br>Code which is executed in this loop:<br>');
        print('$students[$studentname]=$toGive;<br>');
        print('And because $studentname is currently \''.$studentname.'\', this is the same as<br>');
        print('$students[\''.$studentname.'\']=$toGive;<br>');
        $students[$studentname]=$toGive;
        print('<br><br>');
        print('$students is at end of loop iteration<br>');
        print_r($students);
        print('<br>');

        print('--------------------------------------------------------------------------<br><br>');
    }

    print('After giving everyone pencil<br>');
    print_r($students);
    print('<br>');

    print('End Result of Code in Description<br>');
    unset($students);
    unset($toGive);


    //END DESCRIPTION


    /*
     BEGIN TODO:
    Now, do the same, but this time give everyone 'textbook'
     */

//END TODO
    if(!isset($students)){
        $students = array();
    }


    print("<br>Your \$students is  now:<br>");
    print_r($students);

    if(count($students)==0){
        return false;
    }
    $studentsContent = null;

    foreach($students as $key => $value){
        if($studentsContent == null){
            $studentsContent = $value;
        }
        if($studentsContent != $value){
            print("<br>You have made an error, not all students have the same<br>");
            return false;
        }
    }


    if($studentsContent== 'textbook'){
        return true;
    }
    print("<br>You have made an error, all students should have 'textbook'<br>");
    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Textbook with loop</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));





$testFunction = function(){

    /*
     BEGIN TODO:
    Now i show you the flexibility of this code:
    You get now a new student, Franz.
    And all students (the old ones and Franz) need now an 'exercise book'
     */


    if(!isset($students)){
        $students = array();
    }


    print("<br>Your \$students is  now:<br>");
    print_r($students);
    $shouldbe = 'exercise book';
    if(count($students)==0){
        return false;
    }
    $studentsContent = null;

    foreach($students as $key => $value){
        if($studentsContent == null){
            $studentsContent = $value;
        }
        if($studentsContent != $value){
            print("<br>You have made an error, not all students have the same<br>");
            return false;
        }
    }


    if($studentsContent== $shouldbe && $students['Franz']==$shouldbe){
        return true;
    }elseif( $students['Franz']!=$shouldbe){
        print("<br>Error: you forgot Franz<br>");
    }
    print("<br>You have made an error, all students should have 'textbook'<br>");
    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Textbook with loop and additional student</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));



$testFunction = function(){


    /*BEGIN DESCRIPTION
        Now, we can also use this for calculation.
        Lets say, not every student could pay all the school fees, they still owe you money.
        You want to sum it up
    */
    print('Result of Code in Description<br>');
    $students = array();
    $students['Albin']=6548; //we prepare the array with the fees the students still owe
    $students['Joshua']=5498;
    $students['Clara']=1897;
    $students['Aisha']=1593;
    $students['Marck']=7897;
    $students['Franz']=5495;


    //as always when we print our variables after we did a task.
//with an array, you have to use print_r instead of print.
//to print an array, you always to like this:
    print('Initialisation of Array<br>');
    print_r($students);
    print('<br>');
    //We need now a variable where we store the sum.
    $sum = 0;

    foreach ($students as $studentname => $value){
        print('--------------------------------------------------------------------------<br><br>');
        print('Start of foreach loop, which is executed for each element in $students<br>');
        print('$sum is at start of loop iteration: '.$sum.'<br>');
        print('<br>');
        print('Before the code is executed, the key is copied in the variable after the as<br>');
        print('Which is in this case in this iteration: $studentname : \''.$studentname.'\' <br>');
        print('and the value is copied in the variable after the =><br>');
        print('Which is in this case in this iteration: $value : \''.$value.'\' <br>');


        //now, we give the student with the current $studentname what we have to give:
        print('<br><br>Code which is executed in this loop:<br>');
        print('$sum = $sum + $value;<br>');
        print('And because $value is currently \''.$value.'\', this is the same as<br>');
        print('$sum = $sum + '.$value.';<br>');
        print('And because $sum is currently \''.$sum.'\', this is the same as<br>');
        print('$sum = '.$sum.' + '.$value.';<br>');

        //now, we add the value to the sum, when we do that for every student, at the end we will have the total sum
        $sum = $sum + $value;
        print('<br><br>');
        print('$sum is at end of loop iteration: '.$sum.'<br>');
        print('<br>');

        print('--------------------------------------------------------------------------<br><br>');
    }

    print('At the end, sum is: '.$sum.'<br>');
    print('<br>');

    print('End Result of Code in Description<br>');
    unset($students);
    unset($sum);


    //END DESCRIPTION
    $students['Albin']=6548; //we prepare the array with the fees the students still owe
    $students['Joshua']=5498;
    $students['Clara']=1897;
    $students['Aisha']=5498;
    $students['Marck']=7897;
    $students['Franz']=5495;

    /*
     BEGIN TODO:
    The amounts the students have to pay is already initialised in $students.
    Now calculate the sum of them
    Store the sum finally in the variable $sum
     */

//END TODO
    if(!isset($sum)){
        $sum = 0;
    }

    if(!isset($students)){
        $students = array(-1);
    }


    print("<br>Your \$sum is  now: $sum<br>");

    $studentsContent = null;



    if(array_sum($students)== $sum){
        return true;
    }
    print("<br>Error: You have to calculate the sum of the amounts the students owe and store it in \$sum<br>");
    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Sum</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));





$testFunction = function(){


    /*BEGIN DESCRIPTION
        Now, we can also use this for calculation.
        This time, we want the average the students owe.
        You know that the average is calculated as the sum of the values devided by how many values there are.
        you can count the elements in an array with
        $numOfElementsInArray = count($array);
    */
    print('Result of Code in Description<br>');
    $students = array();
    $students['Albin']=6548; //we prepare the array with the fees the students still owe
    $students['Joshua']=5498;
    $students['Clara']=1897;
    $students['Aisha']=1593;
    $students['Marck']=7897;
    $students['Franz']=5495;


    //as always when we print our variables after we did a task.
//with an array, you have to use print_r instead of print.
//to print an array, you always to like this:
    print('Initialisation of Array<br>');
    print_r($students);
    print('<br>');
    //We need now a variable where we store the sum.
    $sum = 0;

    foreach ($students as $studentname => $value){
        print('--------------------------------------------------------------------------<br><br>');
        print('Start of foreach loop, which is executed for each element in $students<br>');
        print('$sum is at start of loop iteration: '.$sum.'<br>');
        print('<br>');
        print('Before the code is executed, the key is copied in the variable after the as<br>');
        print('Which is in this case in this iteration: $studentname : \''.$studentname.'\' <br>');
        print('and the value is copied in the variable after the =><br>');
        print('Which is in this case in this iteration: $value : \''.$value.'\' <br>');


        print('<br><br>Code which is executed in this loop:<br>');
        print('$sum = $sum + $value;<br>');
        print('And because $value is currently \''.$value.'\', this is the same as<br>');
        print('$sum = $sum + '.$value.';<br>');
        print('And because $sum is currently \''.$sum.'\', this is the same as<br>');
        print('$sum = '.$sum.' + '.$value.';<br>');

        //now, we add the value to the sum, when we do that for every student, at the end we will have the total sum
        $sum = $sum + $value;
        print('<br><br>');
        print('$sum is at end of loop iteration: '.$sum.'<br>');
        print('<br>');

        print('--------------------------------------------------------------------------<br><br>');
    }

    print('At the end, sum is: '.$sum.'<br>');
    print('<br>');
    //now we have to calculate the average.
    //to get the number of elements in the array
    $num = count($students);
    //now we have to devide our sum by the number of elements in the array
    $average = $sum/$num;
    print('At the end, average is: '.$average.'<br>');

    print('End Result of Code in Description<br>');
    unset($students);
    unset($sum);
    unset($average);


    //END DESCRIPTION
    $students['Albin']=6548; //we prepare the array with the fees the students still owe
    $students['Joshua']=5498;
    $students['Clara']=1897;
    $students['Aisha']=5498;
    $students['Marck']=7897;
    $students['Franz']=5495;

    /*
     BEGIN TODO:
    The amounts the students have to pay is already initialised in $students.
    Now calculate the average of them
    Store the average finally in the variable $average
     */

//END TODO
    if(!isset($average)){
        $average = 0;
    }

    if(!isset($students)){
        $students = array(-1);
    }


    print("<br>Your \$sum is  now: $average<br>");

    $studentsContent = null;



    if(abs(array_sum($students)/count($students)- $average) < 10e-5){
        return true;
    }
    print("<br>Error: You have to calculate the average of the amounts the students owe and store it in \$average<br>");
    return false;
};




$exerciceSheet->addExercice(new Exercice("
    
       <h4>Average</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));




$testFunction = function(){

    $budget = 100000;
    $students['Albin']=5855; //we prepare the array with the fees the students still owe
    $students['Joshua']=5468;
    $students['Clara']=2314;
    $students['Aisha']=549;
    $students['Marck']=5669;
    $students['Franz']=9854;

    /*
     BEGIN TODO:
    You have a total Budget of $budget for sick students to pay for medical services.
    in $students is saved, how much you payed for every student.
    Save in $budget how much is left.

     */

//END TODO
    if(!isset($budget)){
        $budget = 0;
    }

    if(!isset($students)){
        $students = array(-1);
    }


    print("<br>Your \$budget is  now: $budget<br>");

    $studentsContent = null;



    if(abs($budget-array_sum($students)- $budget) < 10e-5){
        return true;
    }
    print("<br>Error: You have to calculate the rest of the budget of  the students and store it in \$budget<br>");
    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Budget</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));




$testFunction = function(){
    /*
     BEGIN DESCRIPTION
    This is good, if we only have positive or negative transactions.
    But if we have both it gets difficult, because we have to somehow decide whether we add or substract
    the values. So we have to somehow decide whether we want to add or substract.
    We store this information in another array, and in the loop, we use the if statement to decide
    */
    $startAmount = 10000;
    $monday = 1000;
    $tuesday = 3000;
    $wednesday = 2000;
    $thursday = 1000;
    $friday = 5000;

    /*
     Task:
    we have an account with at the beginning $startAmount.
    On monday, we withddraw $monday
    On tuesday, we put $tuesday
    on wednesday, we put $wednesday
    on thursday, we withdraw $tuesday
    on friday, we withdraw $friday

    how much is left at the end
     * */

    print('Result of Code in Description<br>');
    
    //first, we store the information of the transactions
    $transactions = array();
    $transactions['monday']=$monday;
    $transactions['tuesday']=$tuesday;
    $transactions['wednesday']=$wednesday;
    $transactions['thursday']=$thursday;
    $transactions['friday']=$friday;


    //as always when we print our variables after we did a task.
//with an array, you have to use print_r instead of print.
//to print an array, you always to like this:
    print('Initialisation of $transactions<br>');
    print_r($transactions);
    print('<br>');




    //now, we store in another array which type of transaction it is
    //note that we use the same keys as above
    $transactionsType = array();
    $transactionsType['monday']='withdraw';
    $transactionsType['tuesday']='put';
    $transactionsType['wednesday']='put';
    $transactionsType['thursday']='withdraw';
    $transactionsType['friday']='withdraw';


    //as always when we print our variables after we did a task.
//with an array, you have to use print_r instead of print.
//to print an array, you always to like this:
    print('Initialisation of $transactionsType<br>');
    print_r($transactionsType);
    print('<br>');




    //We need now a variable where we store the sum.
    $sum = 0;

    //we start with the $startAmount
    $sum = $startAmount;

    foreach ($transactions as $day => $value){
        print('--------------------------------------------------------------------------<br><br>');
        print('Start of foreach loop, which is executed for each element in $transactions<br>');
        print('$sum is at start of loop iteration: '.$sum.'<br>');
        print('<br>');
        print('Before the code is executed, the key is copied in the variable after the as<br>');
        print('Which is in this case in this iteration: $day : \''.$day.'\' <br>');
        print('and the value is copied in the variable after the =><br>');
        print('Which is in this case in this iteration: $value : \''.$value.'\' <br>');

        print('<br><br>Code which is executed in this loop:<br>');

        //now, we have to devide wheter we withdraw or put
        print('$transactionsType[$day] is currently \''.$transactionsType[$day].'\'<br>');
        if($transactionsType[$day]=='put'){
            print('so we put money on the account, means we add<br>');
            print('$sum = $sum + $value;<br>');
            print('And because $value is currently \''.$value.'\', this is the same as<br>');
            print('$sum = $sum + '.$value.';<br>');
            print('And because $sum is currently \''.$sum.'\', this is the same as<br>');
            print('$sum = '.$sum.' + '.$value.';<br>');

            //now, we add the value to the sum, when we do that for every student, at the end we will have the total sum
            $sum = $sum + $value;
        }else{
            print('so we withdraw money from the account, means we substract<br>');
            print('$sum = $sum - $value;<br>');
            print('And because $value is currently \''.$value.'\', this is the same as<br>');
            print('$sum = $sum - '.$value.';<br>');
            print('And because $sum is currently \''.$sum.'\', this is the same as<br>');
            print('$sum = '.$sum.' - '.$value.';<br>');

            //now, we substract the value to the sum, when we do that for every student, at the end we will have the total sum
            $sum = $sum - $value;
        }



        print('<br><br>');
        print('$sum is at end of loop iteration: '.$sum.'<br>');
        print('<br>');

        print('--------------------------------------------------------------------------<br><br>');
    }

    print('At the end, sum is: '.$sum.'<br>');
    print('<br>');

    print('End Result of Code in Description<br>');
    unset($transactions);
    unset($sum);
    unset($transactionsType);



    /*END DESCRIPTION
    * */


    $startAmount = 10000;
    $monday = 1000;
    $tuesday = 3000;
    $wednesday = 2000;
    $thursday = 1000;
    $friday = 5000;
    $saturday = 2000;
    print('<br><br>');
    print('Start TODO Code<br>');
    /*
     BEGIN TODO:
    we have an account with at the beginning $startAmount.
    On monday, we withddraw $monday
    On tuesday, we withdraw $tuesday
    on wednesday, we put $wednesday
    on thursday, we withdraw $tuesday
    on friday, we put $friday
    on saturday, we put $saturday

    how much is left at the end? store the value in $sum

     */

//END TODO
    if(!isset($sum)){
        $sum = 0;
    }


    $solutionTransactions = array(
        $startAmount,-$monday,-$tuesday,$wednesday,-$thursday,$friday,$saturday
    );



    print("<br>Your \$sum is  now: $sum<br>");

    $studentsContent = null;



    if(abs(array_sum($solutionTransactions)- $sum) < 10e-5){
        return true;
    }
    print("<br>Error: You have to calculate the remaining money and store it in \$sum<br>");
    return false;
};

$exerciceSheet->addExercice(new Exercice("
    
       <h4>Different Transaction types</h4>
    if you made it right, you should not get error message. 
    ",$testFunction));
//
//$testFunction = function(){
//    /*
//     BEGIN DESCRIPTION
//    This is good, if we only have positive or negative transactions.
//    But if we have both it gets difficult, because we have to somehow decide whether we add or substract
//    the values. But we also have the concept of negative numbers, which will help us this time.
//    It does not matter, if we calculate like this:
//    5 = 8 - 3;
//    or like this:
//    5 = 8 + -3;
//
//    So if we store our negative Transactions as negative Values and the positive Transactions as positive Values,
//    we have no problem.
//    here an example:
//    */
//
//
//    /*
//     Task:
//    we have an account with at the beginning $startAmount.
//    On monday, we withddraw $monday
//    On tuesday, we put $tuesday
//    on wednesday, we put $wednesday
//    on thursday, we withdraw $tuesday
//    on friday, we withdraw $friday
//     * */
//
//    print('Result of Code in Description<br>');
//    $students = array();
//    $students['Albin']=6548; //we prepare the array with the fees the students still owe
//    $students['Joshua']=5498;
//    $students['Clara']=1897;
//    $students['Aisha']=1593;
//    $students['Marck']=7897;
//    $students['Franz']=5495;
//
//
//    //as always when we print our variables after we did a task.
////with an array, you have to use print_r instead of print.
////to print an array, you always to like this:
//    print('Initialisation of Array<br>');
//    print_r($students);
//    print('<br>');
//    //We need now a variable where we store the sum.
//    $sum = 0;
//
//    foreach ($students as $studentname => $value){
//        print('--------------------------------------------------------------------------<br><br>');
//        print('Start of foreach loop, which is executed for each element in $students<br>');
//        print('$sum is at start of loop iteration: '.$sum.'<br>');
//        print('<br>');
//        print('Before the code is executed, the key is copied in the variable after the as<br>');
//        print('Which is in this case in this iteration: $studentname : \''.$studentname.'\' <br>');
//        print('and the value is copied in the variable after the =><br>');
//        print('Which is in this case in this iteration: $value : \''.$value.'\' <br>');
//
//
//        //now, we give the student with the current $studentname what we have to give:
//        print('<br><br>Code which is executed in this loop:<br>');
//        print('$sum = $sum + $value;<br>');
//        print('And because $value is currently \''.$value.'\', this is the same as<br>');
//        print('$sum = $sum + '.$value.';<br>');
//        print('And because $sum is currently \''.$sum.'\', this is the same as<br>');
//        print('$sum = '.$sum.' + '.$value.';<br>');
//
//        //now, we add the value to the sum, when we do that for every student, at the end we will have the total sum
//        $sum = $sum + $value;
//        print('<br><br>');
//        print('$sum is at end of loop iteration: '.$sum.'<br>');
//        print('<br>');
//
//        print('--------------------------------------------------------------------------<br><br>');
//    }
//
//    print('At the end, sum is: '.$sum.'<br>');
//    print('<br>');
//    //now we have to calculate the average.
//    //to get the number of elements in the array
//    $num = count($students);
//    //now we have to devide our sum by the number of elements in the array
//    $average = $sum/$num;
//    print('At the end, average is: '.$average.'<br>');
//
//    print('End Result of Code in Description<br>');
//    unset($students);
//    unset($sum);
//    unset($average);
//
//
//
//    /*END DESCRIPTION
//    * */
//
//
//    $budget = 100000;
//    $students['Albin']=5855; //we prepare the array with the fees the students still owe
//    $students['Joshua']=5468;
//    $students['Clara']=2314;
//    $students['Aisha']=549;
//    $students['Marck']=5669;
//    $students['Franz']=9854;
//
//    /*
//     BEGIN TODO:
//    You have a total Budget of $budget for sick students to pay for medical services.
//    in $students is saved, how much you payed for every student.
//    Save in $budget how much is left.
//
//     */
//
////END TODO
//    if(!isset($budget)){
//        $budget = 0;
//    }
//
//    if(!isset($students)){
//        $students = array(-1);
//    }
//
//
//    print("<br>Your \$budget is  now: $budget<br>");
//
//    $studentsContent = null;
//
//
//
//    if(abs($budget-array_sum($students)- $budget) < 10e-5){
//        return true;
//    }
//    print("<br>Error: You have to calculate the rest of the budget of  the students and store it in \$budget<br>");
//    return false;
//};
//
//$exerciceSheet->addExercice(new Exercice("
//
//       <h4>Average</h4>
//    if you made it right, you should not get error message.
//    ",$testFunction));