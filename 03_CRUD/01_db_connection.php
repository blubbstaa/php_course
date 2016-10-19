<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 17.10.16
 * Time: 09:20
 */


require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("01", "DB Connection");


function getDBUsername(){
    return 'root';
}


function getDBPassword(){
    return 'root';
}

/*
 BEGIN DESCRIPTION
 As you know, after your PHP script is finished, all your variables get deleted.
So you open a webpage which is handled by PHP.  This means you send a
HTTP GET or POST Request, the Scripts runs through, prints an HTML output.
But there no normal way to give information to the next time the script is called.
There are some ways you already know:

In the URL or in a HTML Form as GET Variables (myscript.php?variable1=1&variable2=2).
This is not a good way because the user (and anybody else) sees the data you are transmitting and he can manipulate it.

In the Request or in a HTML Form as POST Variables (
<form action='myscript.php' method='POST'>
<input type='hidden' name='variable1' value='1'>
<input type='hidden' name='variable2' value='2'>
<input type='submit' name='submit' value='Submit'>
</form>
).
Also not good, the user still sees it and can still manipulate it.
This is not a good way because the user sees the data you are transmitting and he can manipulate it.

In the $_SESSION variable:
//start the session
session_start();
$_SESSION['variable1']=1;
$_SESSION['variable2']=2;
better than before, but if you want to tell one user what another user did, that is not possible.
and you don't have control, because if the user deletes his session cookie, your data is lost.
(It works like this:
a cookie with a hash is generated and sent under the name PHP_SESSID to the client.
On every request to the same domain, this cookie is sent with. PHP looks if there is a session open with
this cookie hash. If there is, the SESSION is loaded.
If you don't pay attention, hacker can hijack this!!!
)
Only good to manage if a user is logged in or not , and sometimes for caching some data

next solution is to save data in files like this for example:
//we save the data in an array
$data = array(
'variable1' => 1,
'variable2' => 2,
);
//then we serialize (convert it into text form) the data somehow. (if we write array in a text file, we cannot read it.)
most easy way is JSON (JavaScript Object Notation)
$json = json_encode($data);
//we save it in a file:.
file_put_contents('file.txt',$json);
//and when we want to load the data again, we do like this:
$json = file_get_contents('file.txt');
$data = json_decode($json, true);


But like this, we still have the problem if multiple user are using the application at the same time.
Fortunally, we have a solution for that, which manages the whole persistency problem.
(persistency problem = how do we save data permanently, even when the computer crushes).
We don't do it in php anymore, we use a persistency abstraction layer, and we use a
Database Management System (DBMS) for that.
There are several types and over 200 implementations of this, we devide them in to
SQL (Structured Query Language, a text based Programming language to perform queries on Databases
, one type of DBMS is the ones that support this type of interaction with them)
NoSQL(Either No SQL, don't support SQL, or Not only SQL, support other languages too)
Because looking at others would take too long, we concentrate on SQL DBMS.

There are much implementations of SQL DBMS, the most known are:
Oracle (Very expensive but top, sometimes difficult to handle)
MSSQL Or SQL Server (The further development of Microsoft on base of Sybase DBMS, pray that you
have never to use this)
Postgresql (Open Source and wet dream of every programmer, very very very good)
MySQL/MariaDB (MariaDB, because MySQL was bought by Oracle,
and we don't know how long mysql will be free, that's why from now on Open Source People use MariaDB
In connection Strings, drives and everywhere it is called mysql. The only difference is when you
set it up, instead of installing mysql-server, you install mariadb-server. From now on,
i write about mysql, but it works with both)

Because most of the Hosters support MySQL, we concentrate on MySQL.
Be aware that there is this Standard SQL,  but NO DBMS implemented it really, the all implemented some
parts differently. So your MySQL Script won't work on a Postgresql Database.

So now we have talked a lot about Databases, let us connect our PHP  skript with our MySQL Database.
You will see functions like mysqli_connect or mysql_connect.
DONT USE THEM!!!!
In PHP, we have also the PDO Class (PHP Databse Object), with which you can connect to any DBMS.
you have to install the debian package php-mysql that you can use pdo to connect with mysql.
To check that, you can execute on your machine php -m (php, the programming language php, -m list modules),
if there is pdo_mysql, everything is ready.

To create a connection to a database, we have to create a new PDO Object with the right parameters.
To do that, we write:
//first create connection string, the connection string looks like this:
// mysql:host=host;dbname=dbname;
//host can be either the localhost:
mysql:host=localhost;
//or if the server is somewhere else, an op or domain name path (a url)
//dbname is the name of the database you use.
//if you don't know, in mysql, there is always the database information_schema
$connectionString = "mysql:host=localhost;dbname=information_schema";
$dblk= new PDO($connectionString , "username", "password");
END DESCRIPTION
 */

	 $testFunction = function(){
        /*
         BEGIN TODO
         Create a connection to a Database and save it in $dblk
        */
         $connectionString = "mysql:host=localhost;dbname=information_schema";
         $dblk= new PDO($connectionString , getDBUsername(), getDBPassword());

        //END TODO



         if(!isset($dblk)){
             $dblk = null;
         }

         print("<br>Your \$dblk is now:<br>");
        var_dump($dblk);
         print("<br>");
         if(is_object($dblk)){
             if($dblk instanceof PDO) {
                 unset($dblk);
                 $dblk = null;
                 return true;
             }
         }
         print("<br>something went wrong<br>");




         return false;
     };

    $exerciceSheet->addExercice(new Exercice("

       <h4>Database Connection</h4>
    if you made it right, you should see no error messages
    ",$testFunction));

/*
 BEGIN DESCRIPTION
    Now we have a connection, but we don't see anything.
    So that you see something, we perform a query against one of the mysql intern parts, the information_schema.
    We can do that in the following way:
    //first prepare the statement
    $statement = $dblk->prepare("SELECT table_name, table_schema FROM INFORMATION_SCHEMA.tables ");
    //then execute it

    if ( ! $statement->execute())
    {
// if error happens
        ob_start();
        //easiest way to serialize human readable error infos of ob_start and ob_get_clean and print_r
        print_r($statement->errorInfo());
        $errorinfo = ob_get_clean();
        //throw exception
        throw new \Exception($errorinfo);
    }
    //fetch the data
    $res=$statement->fetchAll(PDO::FETCH_ASSOC);
    print_r($res);

    //to see it better, use print_r_tabs
    print_r_tabs($res);

END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
     Select table_name, schema_name and table_rows from INFORMATION_SCHEMA.tables and print it
*/
    $connectionString = "mysql:host=localhost;dbname=information_schema";
    $dblk= new PDO($connectionString , getDBUsername(), getDBPassword());
    //first prepare the statement
    $statement = $dblk->prepare("SELECT table_name, table_schema FROM INFORMATION_SCHEMA.tables ");
    //then execute it

    if ( ! $statement->execute())
    {
// if error happens
        ob_start();
        //easiest way to serialize human readable error infos of ob_start and ob_get_clean and print_r
        print_r($statement->errorInfo());
        $errorinfo = ob_get_clean();
        //throw exception
        throw new \Exception($errorinfo);
    }
    //fetch the data
    $res=$statement->fetchAll(PDO::FETCH_ASSOC);
    print_r($res);

    //to see it better, use print_r_tabs
    print_r_tabs($res);
   // END TODO

    $printed = ob_get_contents();

    if(!isset($dblk)){
        $dblk = null;
    }


    if(is_object($dblk)){
        if($dblk instanceof PDO) {
            $statement = $dblk->prepare("SELECT table_name, table_schema,table_rows FROM information_schema.tables ");
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
            ob_start();
            print_r($res);
            $withPrintR = ob_get_clean();
            //to see it better, use print_r_tabs
            ob_start();
            print_r_tabs($res);
            $withPrintRTabs = ob_get_clean();
            unset($dblk);
            $dblk = null;

            if(stripos($printed,"Array") !== false && stripos($printed,"<p style='padding-left: 0em;'>") !== false){
                return true;
            }
        }
    }
    print("<br>something went wrong<br>");




    return false;
};

$exerciceSheet->addExercice(new Exercice("

       <h4>Database Connection and query</h4>
    if you made it right, you should see no error messages
    ",$testFunction));




/*
 BEGIN DESCRIPTION
    Ok, we printed out now all the tables which are in this database server.
    Now lets work with our database.
     Create a database with phpmyadmin or the console,
    and connect from now on with this database.
    In SQL, we have 2 types of queries:
    DDL (Data Definition Language) and DML (Data Manipulation Language)
    With DDL, you define how your tables looks like. How the tables in a database look like
    is called schema. With DDL, you can create, alter or drop tables.
    When you create a table, you also have to define columns.
    There are many types, you can look them up later, for now i will teach you 2:
    text and int.
    and there is also one important thing: every table needs a primary key, a column which identifies
    the row. And for that we use an auto_increment which just enumerates the rows.
    So to create our table, we can use the SQL Statement:
    CREATE TABLE crud(
        id int primary key auto_increment,
        value text
    );
CREATE TABLE : this is the command
    crud : this is the table name of the table you are creating
    (); : Between these two braces you define the columns of the table you create
    id : the name of the first column
    int: the data type of the column
    primary key: this column is the primary key of this table, any table needs one, and its most easy to use an aut_increment integer
    auto_increment : when a new row is created, it should get an integer 1 higher than the last one automatically generated, beginning with 1
    , : seperates two columns, but you cannot put one and then not define another column
    value : the name of the next column
    text : the data type of the next column
    So now for us we create a table crud
END DESCRIPTION
 */


$testFunction = function(){

    /*
     BEGIN TODO
     Create now the table crud
     The table will be dropped after the END TODO if it was created
    */
    $connectionString = "mysql:host=localhost;dbname=test";
    $dblk= new PDO($connectionString , getDBUsername(),getDBPassword());
    $statement = $dblk->prepare("CREATE TABLE crud(
        id int primary key auto_increment,
        value text
    );");

    if (!$statement->execute()){
        // if error happens
        ob_start();
        //easiest way to serialize human readable error infos of ob_start and ob_get_clean and print_r
        print_r($statement->errorInfo());
            $errorinfo = ob_get_clean();
            //throw exception
            throw new \Exception($errorinfo);
       }



    // END TODO


    if(!isset($dblk)){
        $dblk = null;
    }


    if(is_object($dblk)){
        if($dblk instanceof PDO) {
            $statement = $dblk->prepare("SELECT column_name, data_type,column_key, extra 
                                                                          FROM information_schema.columns 
                                                                          WHERE TABLE_NAME = 'crud'");
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
                    "column_name" => 'value',
                    "data_type" => 'text',
                    "column_key" => '',
                    "extra" => '',

                ),


            );
            if(count($res)!=2){
                print("<br>Error there is no table called crud<br>");
                $errors++;
            }
            if(($res[0]==$solution[0] && $res[1] == $solution[1])
                || ($res[0]==$solution[1] && $res[1] == $solution[0])){

            }else{
                print("<br>Error, your current definition is<br>");
                print_r_tabs($res);
                print("<br>But should be <br>");
                print_r_tabs($solution);
                $errors++;

            }
            $statement = $dblk->prepare("DROP TABLE IF EXISTS crud;");
            //then execute it

            if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
            unset($dblk);
            $dblk = null;
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

       <h4>DDL</h4>
    if you made it right, you should see no error messages
    ",$testFunction));



/*
 BEGIN DESCRIPTION
Now we have a schema, but we still need data inside.
So we do this:
To insert data, we use the INSERT Statement. It looks like this:
INSERT INTO crud (id,value)VALUES(null,'value1');
INSERT INTO : We want to insert data into a table
crud : the table name of the table we want to insert data into
() : in here, you define which and the order of the columns you want to insert to
VALUES : after VALUES, you define the Values you want to insert
null : because the id is automatically generated, we don't need to set it by ourselves
'value1' : in the value column, we insert the string 'value1'

Because we anyway don't want to pass data to the id column, we can also leave it:
INSERT INTO crud (value)VALUES('value1');

Yes, this is already part of DML.

END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
     Create now the table crud and then insert 3 rows into it
    then print the content of the table with print_r_tabs
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
                                                                          WHERE TABLE_NAME = 'crud'");
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
                    "column_name" => 'value',
                    "data_type" => 'text',
                    "column_key" => '',
                    "extra" => '',

                ),


            );
            if(count($res)!=2){
                print("<br>Error there is no table called crud<br>");
                $errors++;
            }
            if(($res[0]==$solution[0] && $res[1] == $solution[1])
                || ($res[0]==$solution[1] && $res[1] == $solution[0])){
                $statement = $dblk->prepare("SELECT id,value FROM crud");
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
                ob_start();
                print_r_tabs($res);
                $expected = ob_get_clean();
                if(count($res)<3){
                    print("<br>Error, Please insert at least 3 rows<br>");
                    $errors++;
                }
                if(stripos($printed,$expected)!== false){

                }else{
                    print("<br>Error, You have to print the content of the table with print_r_tabs<br>");
                    $errors++;
                }
            }else{
                print("<br>Error, your current definition is<br>");
                print_r_tabs($res);
                print("<br>But should be <br>");
                print_r_tabs($solution);
                $errors++;

            }
            $statement = $dblk->prepare("DROP TABLE IF EXISTS crud;");

            //then execute it

            if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
            unset($dblk);
            $dblk = null;
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

       <h4>INSERT Statement</h4>
    if you made it right, you should see no error messages
    ",$testFunction));





/*
 BEGIN DESCRIPTION
You have learned now something very very bad.
When you put data inside a query, you ALWAYS use prepared statements.
Because else hackers will break into your application (Yes, already happened to me too) with so called SQL INJECTION.
//So instead of writing:
 $dblk->prepare("INSERT INTO crud (value)VALUES('value1');"); //THIS IS WRONG, DON'T DO THIS AGAIN
//You write from now on:
 $statement = $dblk->prepare("INSERT INTO crud (value)VALUES(?);"); //you replace now every occurence of data with a ? mark.
//and then, you bind the data to the query while specifying the parameter as 'value1'
 $statement->bindParam(1,'value1', PDO::PARAM_STR);
//and then you execute it
if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }

the second advantage is, that you can reuse the same statement serveral times:
//So instead of writing:
 $dblk->prepare("INSERT INTO crud (value)VALUES('value1');"); //THIS IS WRONG, DON'T DO THIS AGAIN
if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
//for the second row, you write
 $dblk->prepare("INSERT INTO crud (value)VALUES('value2');"); //THIS IS WRONG, DON'T DO THIS AGAIN
if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }


You define the statement once and append for each execution different parameters:
$statement = $dblk->prepare("INSERT INTO crud (value)VALUES(?);"); //you replace now every occurence of data with a ? mark.
 $statement->bindParam(1,'value1', PDO::PARAM_STR);
if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
$statement->bindParam(1,'value2', PDO::PARAM_STR);
if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }

END DESCRIPTION
 */


$testFunction = function(){
    ob_start();
    /*
     BEGIN TODO
     Create now the table crud and then insert 3 rows into it, but this time as prepared statement
    then print the content of the table with print_r_tabs
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
                                                                          WHERE TABLE_NAME = 'crud'");
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
                    "column_name" => 'value',
                    "data_type" => 'text',
                    "column_key" => '',
                    "extra" => '',

                ),


            );
            if(count($res)!=2){
                print("<br>Error there is no table called crud<br>");
                $errors++;
            }
            if(($res[0]==$solution[0] && $res[1] == $solution[1])
                || ($res[0]==$solution[1] && $res[1] == $solution[0])){
                $statement = $dblk->prepare("SELECT id,value FROM crud");
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
                ob_start();
                print_r_tabs($res);
                $expected = ob_get_clean();
                if(count($res)<3){
                    print("<br>Error, Please insert at least 3 rows<br>");
                    $errors++;
                }
                if(stripos($printed,$expected)!== false){

                }else{
                    print("<br>Error, You have to print the content of the table with print_r_tabs<br>");
                    $errors++;
                }
            }else{
                print("<br>Error, your current definition is<br>");
                print_r_tabs($res);
                print("<br>But should be <br>");
                print_r_tabs($solution);
                $errors++;

            }
            $statement = $dblk->prepare("DROP TABLE IF EXISTS crud;");
            //then execute it

            if ( ! $statement->execute())
            {
                ob_start();
                print_r($statement->errorInfo());
                $errorinfo = ob_get_clean();
                throw new \Exception($errorinfo);
            }
            unset($dblk);
            $dblk = null;
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

       <h4>INSERT Statement prepared</h4>
    if you made it right, you should see no error messages
    ",$testFunction));



