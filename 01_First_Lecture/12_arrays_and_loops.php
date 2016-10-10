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