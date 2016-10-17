<?php
/**
 * Created by PhpStorm.
 * User: lucius
 * Date: 17.10.16
 * Time: 09:20
 */

/*
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
SQL


 */