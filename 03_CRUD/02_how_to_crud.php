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
    pay attention that you don't have to create it when it already exists
    and you don't have to insert data when there is already data inside
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






/*
 BEGIN DESCRIPTION
Now, we want to be able to create a new entry via gui.
to do that, we need a form. so on top of the table, we put a link which passes a variable via
get. And we make a big if statement around everything we did before. if the get parameter is set,
we display the form instead. and then we need another if statement
when the form is submitted.
first, we need a link before our table:
//with <a href=''></a> we create a link
//with $_SERVER['PHP_SELF'], we call the same script again
//? after the question mark, you can add get parameters to the url.
// we add the variable viewCR to decide whether we want the form view or not, and set it to form when the link is clicked
print("<a href='".$_SERVER['PHP_SELF']."?viewCR=form' >Create Entry</a>");
print("<table>");
//...code to display table


then, we wrap the whole code into an if else statement
if($_GET['viewCR']=='form'){
       //we create the form
        //the form action determines, where the form should be sendt to.
        //we distinguish the exercises with the viewCR variable
        print("
       <form action='".$_SERVER['PHP_SELF']."?viewCR=table' method='POST'>
            <label for='viewCRfirstname'>Firstname</label>
            <input type='text' name='firstname' id='viewCRfirstname' />
            <label for='viewCRname'>Name</label>
            <input type='text' name='name' id='viewCRname' />
            <input type='submit' value='submit' name='submit' id='viewCRsubmit'>
      </form>
        ");
}else{
    print("<a href='".$_SERVER['PHP_SELF']."?viewCR=form' >Create Entry</a>");
    print("<table>");
    //..code to display table
}


and then, before we put the handling of the post submission

if(isset($_POST['submit'] && $_GET['viewCR']=='table'){
    //sanitize a little the input
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
     $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    //look if all fields are filled
    if(strlen($firstname)>0 && strlen($name)>0){
        $statement = $dblk->prepare("INSERT INTO students (firstname, name)VALUES(?,?)");
        $statement->bindParam(1,$firstname);
        $statement->bindParam(2,$name);
        if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
          print("Row successfully inserted<br>");

    }else{
        print("Error, please provide a Firstname and a Name. Row was not inserted<br>");

    }
}

if($_GET['viewCR']=='form'){
//.... code we had before



END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
           Now use the code of the first task (with the class column additionally), and add the functionality to add
            a Row via the User Interface.
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

       <h4>CR Create and Read</h4>
    if you made it right, you should see no error messages
    ",$testFunction));



/*
 BEGIN DESCRIPTION
Now, we want to be able to edit an entry (update).
So first, we need an edit button.
Copy the code from above and change viewCR to viewCRU, that we are not confused between the different exercises
First, we have to adapt the loop where we generate the rows and add a form to edit the row.
our loop has now to look like this:
//then we start with the table
    print("<table>");

    foreach ($students as $num => $row){
        //foreach student we make a table row
        print("<tr>");

        //print the form to edit, it consists of the id as hidden field and a submit button. As View we take the form view:
        print("
               <td>
            <form action='".$_SERVER['PHP_SELF']."?viewCRU=form' method='POST'>
                <input type='hidden' name='id' id='viewCRid'  value='".$row['id']."'/>
                <input type='submit' value='edit' name='submit' id='viewCReditsubmit'>
          </form>
            </td>
        ");

        foreach($row as $colname => $col){
            //foreach column we make a cell in the row
            print("<td>$col</td>");
        }
        print("</tr>");
    }
    print("</table>");

//then we change our form view. If $_POST['id'] is set, we set the values in the form like they are in the database

if($_GET['viewCRU']=='form'){
       //first, we set all values to null
      $id = null;
       $firstname = null;
        $name = null;



    //we check here, if an id is sent
    if(isset($_POST['id']){

        $error = null;
        //first, we filter the posted value
        $id = filter_var($_POST['id'],FILTER_VALIDATE_INT);
        //if validation was ok
        if(is_int($id){
            $getrow = $dblk->prepare("SELECT id, firstname, name FROM students WHERE id = ?");
            $getrow->bindParam(1,$id, PDO::PARAM_INT);
            if ( ! $getrow->execute())
                {
                    ob_start();
                    print_r($select->errorInfo());
                    $errorinfo = ob_get_clean();
                    throw new \Exception($errorinfo);
                }
             //we fetch the student row into an array
            $students=$getrow->fetchAll(PDO::FETCH_ASSOC);
            if(count($students)==1){
                $firstname = $students[0]['firstname'];
                $name = $students[0]['name'];
            }else{
                $error = 1;
            }
        }else{
            //else validation not ok,
            $id = null;
            $error = 1;
        }
    }

       //we create the form
        //the form action determines, where the form should be sendt to.
        //we distinguish the exercises with the viewCRU variable
        print("
       <form action='".$_SERVER['PHP_SELF']."?viewCRU=table' method='POST'>
            <input type='hidden' name='id' id='viewCRUid'  value='$id'/>
            <label for='viewCRfirstname'>Firstname</label>
            <input type='text' name='firstname' id='viewCRUfirstname' value='$firstname' />
            <label for='viewCRname'>Name</label>
            <input type='text' name='name' id='viewCRUname' value='$name' />
            <input type='submit' value='submit' name='submit' id='viewCRUsubmit'>
      </form>
        ");
}



//and as last we have to change our save if statement. If $_POST['id'] is set, then we were editing e row,
//so instead of inserting a new row, we edit an existing

if(isset($_POST['submit'] && $_GET['viewCRU']=='table'){
    //sanitize a little the input
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
     $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    //look if all fields are filled
    if(strlen($firstname)>0 && strlen($name)>0){
       if(is_int($id)){
            //id is integer if the filter worked, else it is false (which is not an integer)
            $statement = $dblk->prepare("UPDATE students SET firstname = ?, name = ? WHERE id = ?");
            $statement->bindParam(3,$id);
        }else{
            $id = null; //that $id is sure 0 when it was not a valid integer
            $statement = $dblk->prepare("INSERT INTO students (firstname, name)VALUES(?,?)");
        }
        $statement->bindParam(1,$firstname);
        $statement->bindParam(2,$name);
        if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
          print("Row successfully inserted or updated<br>");

    }else{
        print("Error, please provide a Firstname and a Name. Row was not inserted<br>");

    }
}

END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
           Now use the code of the first task (with the class column additionally), and add the functionality to edit
            a Row via the User Interface.
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

       <h4>CRU Create, Read and Update</h4>
    if you made it right, you should see no error messages
    ",$testFunction));




/*
 BEGIN DESCRIPTION
Now, we want to be able to delete an entry.
So first, we need a delete button.
Copy the code from above and change viewCR and viewCRU to viewCRUD, that we are not confused between the different exercises
First, we have to adapt the loop where we generate the rows and add a form to delete the row.
our loop has now to look like this:
//then we start with the table
    print("<table>");

    foreach ($students as $num => $row){
        //foreach student we make a table row
        print("<tr>");

        //print the form to edit, it consists of the id as hidden field and a submit button. As View we take the form view:
        print("
              <td>
            <form action='".$_SERVER['PHP_SELF']."?viewCRUD=form' method='POST'>
                <input type='hidden' name='id' id='viewCRUDid'  value='".$row['id']."'/>
                <input type='submit' value='edit' name='submit' id='viewCRUDeditsubmit'>
          </form>
            </td>
        ");

        //print the form to delete, it consists of the id as hidden field and a submit, this time with the name delete.
        //As View we take the table view, because we need no form to delete
        print("
              <td>
            <form action='".$_SERVER['PHP_SELF']."?viewCRUD=table' method='POST'>
                <input type='hidden' name='id' id='viewCRUDid'  value='".$row['id']."'/>
                <input type='submit' value='delete' name='delete' id='viewCRUDdeletesubmit'>
          </form>
            </td>
        ");


        foreach($row as $colname => $col){
            //foreach column we make a cell in the row
            print("<td>$col</td>");
        }
        print("</tr>");
    }
    print("</table>");


//and we add the following if statement after our
//if(isset($_POST['submit'] && $_GET['viewCRUD']=='table'){...
//statement
if(isset($_POST['delete'] && $_GET['viewCRUD']=='table'){
    //sanitize a little the input
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    //look if all fields are filled
   if(is_int($id)){
        //id is integer if the filter worked, else it is false (which is not an integer)
        $statement = $dblk->prepare("DELETE FROM students  WHERE id = ?");
        $statement->bindParam(1,$id);
        if ( ! $statement->execute())
        {
            ob_start();
            print_r($statement->errorInfo());
            $errorinfo = ob_get_clean();
            throw new \Exception($errorinfo);
        }
        print("Row successfully deleted<br>");
    }else{
        $error = 1;
        print("Error, Row could not be deleted<br>");
    }




}

END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
           Now use the code of the first task (with the class column additionally), and add the functionality to delete
            a Row via the User Interface.
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

       <h4>CRUD Create, Read, Update and Delete</h4>
    if you made it right, you should see no error messages
    ",$testFunction));