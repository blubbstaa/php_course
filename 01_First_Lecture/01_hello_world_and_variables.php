<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("01", "Hello World, Comments and Variables");

/*
* The Files you get from me are full of Description, the Description parts start with: 
* BEGIN DESCRIPTION
* 
* and end with
* END DESCRIPTION
*/


/*
* There are also exercices in the files. The Tasks begin with 
* BEGIN TODO 
* and end with 
* END TODO
*/



/* 
 * BEGIN DESCRIPTION
 * 01.01: How to make a PHP Script:
 * To make a PHP Skript running on the WebApps Machine, you have to do 2 Things:
 * 1. The File must have the extension .php
 * 2. Everything Between <?php and ?> gets interpreted. 
END DESCRIPTION
 */

 
 
 //Exercice 01:
 
 
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
  
  
  
 
 
 /*
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
     * so now we start with the first Exercice
     */
   

   
   
?>
