<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("01", "Hello World, Comments and Variables");

/*
* The Files you get from me are full of Description, the Description parts start with: 
* BEGIN DESCRIPTION
* 
* and end with
* END DESCRIPTION
 *
 *
*/


/*
* There are also exercices in the files. The Tasks begin with 
* BEGIN TODO 
* and end with 
* END TODO
 * You only must change the lines between the TODO !!!!!!!!!!!!!!!
*/


//-----------------------------------------------------------------------------------------------------------------------------------
/* 
 * BEGIN DESCRIPTION
 * 01.01: How to make a PHP Script:
 * To make a PHP Skript running on the WebApps Machine, you have to do 2 Things:
 * 1. The File must have the extension .php
 * 2. Everything Between <?php and ?> gets interpreted. 
END DESCRIPTION
 */
 //Exercice 1:
 /*
  * BEGIN TODO
  * Now, you will write your first php script.
  * Create a file in this folder called hello_world.php.
  * Open the File with geany, and write:
  * <?php print("Hello world.") ?>
  * then save the file and reload
  * END TODO
  */

 $exerciceSheet->addExercice(
     new Exercice("
    
       <h4>Hello World</h4>
     If you made it right, the box should show the text: \"Hello World.\"<br>
     you can also execute the file directly by opening <a href='hello_world.php'>hello_world.php</a>
     ",function(){
            print("
            <iframe src='hello_world.php'></iframe>
            ");
         $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         //get last directory
         $directories = explode("/", $url);
         if(count($directories)==1){
             return false;
         }
         $dirurl = substr($url,0,strlen($url)-strlen($directories[count($directories)-1]));
         //read content

         $text = "";
         try {
             $text = file_get_contents($dirurl . "hello_world.php");
         }catch(Exception $e){
             if(strpos($e->getMessage(), "404")!==false){
                 print("<br>there is no file called hello_world.php  To fulfill the exercice, you have to create a file called hello_world.php in this directory");
             }
             if(strpos($e->getMessage(), "500")!==false){
                 print("<br>You have an error in your hello_world.php file");
             }
         }

         if(strtolower(trim($text)) == "hello world") {
             print("<br>Error: You forgot the point at the end<br>");
             return false;
         }

         if(strtolower(trim($text)) == "hello world.") {
             return true;
         }
         print("<br>Your file does not Produce the String: \"Hello World.\"<br>");
         return false;

     })
 );


//-----------------------------------------------------------------------------------------------------------------------------------

 /*
  * BEGIN DESCRIPTION
  * As you may have noticed, the text written right here does not get interpreted.
  * This is called a comment, and you must use it to tell people reading your code
  * what your code is doing.
  * You have 2 possibilities to write comments: First, the multiline comment used here.
  * Everything between 
  */ 
  
  /* and */

  /*
   * is a comment, and is ignored by the interpreter.
   * Second, you have the single line comment, you can start it with 2 / (Slash), like this: //
   */

   // Here is a single line comment

   /*
    * END DESCRIPTION
    */

   /*
    * Exercice 2:
    * BEGIN TODO
    * create a file called comments.php in this folder
    * in this file, write one multi line comment and one single line comment.
    * Then watch the result in the browser by reloading this file
    * END TODO
    *
    * */

   $exerciceSheet->addExercice(new Exercice(
       "
       <h4>comments</h4>
       If you made everything right, the box below should stay empty",
       function(){
           print("
            <iframe src='comments.php'></iframe>
            ");
           $text = "";
           try {
               $text = file_get_contents(__DIR__."/comments.php");
           }catch(Exception $e){
               print("<br>You did not create a file called comments.php");
                return false;
           }

/*
           if(preg_match("<\?php( |\s)(.|\s)*((\/\/.*\s(.|\s)*\/\*(.|\s)*\*\/(.|\s)*)|((.|\s)*\/\*(.|\s)*\*\/)(.|\s)*\/\/.*\s(.|\n)*( |\s))\?>",$text)) {
               return true;
           }
  */
            if(strpos($text, "<?php")=== false
            || strpos($text, "?>")=== false
            || strpos($text, "//")=== false
            || strpos($text, "/*")=== false
            || strpos($text, "*/")=== false
            ){

           }else{
               return true;
            }
            print("<br>Your file does not contain comments or does not get interpreted or does not have a single and a multi line comment<br>");
           return false;

       }

   ));

//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * Variables are like named baskets, where you can put data inside.
     * Variables in php always begin with the $ (Dollar) sign.
     * You cannot use a number as first letter, but after that you can use lower and uppercase letters and underscores.
     * Only use letters or numbers or underscores in your variable names, and use senseful names.
     * You can assign a value to a variable like this:
     * $variable = 1;
     * Remember that you have to end every statement in php with a ; (semikolon)
     * END DESCRIPTION
     */


    $testFunction = function(){
        /*BEGIN TODO
        create a variable $variable1 and assign the value 1 to it.
        then create another variable $variable2 and assign the value 2 to it
    */


        //END TODO


        if(!isset($variable1)){
            $variable1 = null;
        }


        if(!isset($variable2)){
            $variable2 = null;
        }

        print("<br>Your \$variable1 is '$variable1' and your \$variable2 is '$variable2' .<br>");

        if($variable1 === 1 && $variable2===2){
            return true;
        }

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Variable Assignment</h4>
    if you made it right, the text below should be
    Your \$variable1 is '1' and your \$variable2 is '2' .
    ",$testFunction));




//-----------------------------------------------------------------------------------------------------------------------------------

/*
 * BEGIN DESCRIPTION
 in php, you can also calculate
lets begin with the addition.
To sum 1 and 2, you can just write 1+2
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the sum of 12345 and 54758 to it
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

/*
 * BEGIN DESCRIPTION
now we try substraction
To calculate 2 minus 1, you can just write 2-1
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  54758 minus 12345 to it
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

/*
 * BEGIN DESCRIPTION
now we try multiplication
To calculate 2 times 1, you can just write 2*1
the sign for multiplication is the * (asterix)
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  5478 times 1235 to it
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




/*
 * BEGIN DESCRIPTION
now we try division
To calculate 1 devided by 2, you can just write 1/2
the sign for division is the / (slash)
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  1 devided by 2 to it
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




/*
 * BEGIN DESCRIPTION
now we try modulo
Modulo is an operation which programmers use often.
if we devide 7 by 2, that goes good for 6 (its 3), but than there is still a rest of 1, we can't devide with whole numbers.
and thats where modulo comes into action. Modulo is the rest of a whole number division.
so:
7 modulo 2 is 1
6 modulo 2 is 0
5 modulo 2 is again 1
4 modulo 2 is again 0

As you may have noticed, something modulo 2 is always either 0 or 1.
Why programmers like this so much i'll tell you later

To calculate 7 modulo 2, you can just write 1%2
the sign for modulo is the % (percent)
 * END DESCRIPTION
 */


$testFunction = function(){
    /*BEGIN TODO
    create a variable $variable1 and assign the value of  13246 modulo by 83 to it
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




?>
