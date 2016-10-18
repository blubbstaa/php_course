<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 18.10.16
 * Time: 15:01
 */

require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("01", "DB Connection");





/*
 BEGIN DESCRIPTION

Ok, so now we start to make the full create, read, update and delete cycle, which is basically what you
do in web applications.
So now you know how to create a table and to put data inside. Now, we display this data in a table
to do that, you need to first create a table students with an id, firstname, name.
Then you insert data.
then you perform a select statement like before, but instead of printing it,
you make an html table like this.
//first we make the statement. Prepare returns an instance of PDOStatement which contains our query
$select = $dblk->prepare("SELECT id,firstname,name FROM students");
//we execute the query
    if ( ! $select->execute())
    {
        ob_start();
        print_r($select->errorInfo());
        $errorinfo = ob_get_clean();
        throw new \Exception($errorinfo);
    }
//we fetch the students into an array
    $students=$select->fetchAll(PDO::FETCH_ASSOC);
//then we start with the table
    print("<table>");

    foreach ($students as $num => $row){
        //foreach student we make a table row
        print("<tr>");

        foreach($row as $colname => $col){
            //foreach column we make a cell in the row
            print("<td>$col</td>");
        }
        print("</tr>");
    }
    print("</table>");

END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
     Create now the table students with firstname, name, class and then insert 3 rows into it,
    as always with prepared statements.
    Then, you print an html table with it

    */

    // END TODO
    $printed = ob_get_contents();

    if(!isset($dblk)){
        $dblk = null;
    }

    if(is_object($dblk)){
        if($dblk instanceof PDO) {
            $statement = $dblk->prepare("SELECT column_name, data_type,column_key, extra 
                                                                          FROM information_schema.columns 
                                                                          WHERE TABLE_NAME = 'students'");
            //then execute it

            if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }

            //fetch the data
            $res=$statement->fetchAll(PDO::FETCH_ASSOC);
            $errors = 0;
            $solution = array(
                array(
                    "column_name" => 'id',
                    "data_type" => 'int',
                    "column_key" => 'PRI',
                    "extra" => 'auto_increment',

                ),
                array(
                    "column_name" => 'firstname',
                    "data_type" => 'text',
                    "column_key" => '',
                    "extra" => '',

                ),
                array(
                    "column_name" => 'name',
                    "data_type" => 'text',
                    "column_key" => '',
                    "extra" => '',

                ),
                array(
                    "column_name" => 'class',
                    "data_type" => 'text',
                    "column_key" => '',
                    "extra" => '',

                ),


            );
            if(count($res)!=count($solution)){
                print("<br>Error there is no table called students, or it has not the required columns<br>");
                $errors++;
            }
            if(stripos($printed, "table")!==false){

            }else{
                print("<br>Please print your result as html table<br>");
                $errors++;

            }
            $statement = $dblk->prepare("DROP TABLE IF EXISTS students;");
            //then execute it

            if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
            if($errors==0) {
                return true;
            }
            return false;


        }
    }
    print("<br>something went wrong<br>");




    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>R Read</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
