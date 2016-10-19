<?php
ini_set("error_reporting", E_ALL);
ini_set("display_errors", 1);

function exception_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        // This error code is not included in error_reporting
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
}
set_error_handler("exception_error_handler");


function print_r_tabs(&$object, $recstep=0){
    if(!is_array($object) && !is_object($object)){
        echo "<p style='padding-left: ".$recstep."em;'>$object</p>";
    }
    else{
        if(is_object($object)){
            if(isset($object->isPrinted)){
                if($object->isPrinted){
                    echo "<p style='padding-left: ".$recstep."em;'>pointer to oid ".$object->getOid()."</p>";
                }
                else{
                    $object->isPrinted=true;
                    foreach($object as $key => &$value){
                        echo "<p style='padding-left: ".$recstep."em;'>$key =>";
                        print_r_tabs($value, $recstep+1);
                        echo  "</p>";
                    }

                }
            }
        }
        else{
            foreach($object as $key => &$value){
                echo "<p style='padding-left: ".$recstep."em;'>$key =>";
                print_r_tabs($value, $recstep+1);
                echo  "</p>";
            }

        }
    }

}



require_once "Exercice.php";
require_once "ExerciceSheet.php";



?>