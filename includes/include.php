<?php
//ini_set("error_reporting", E_ALL);
//ini_set("display_errors", 1);

function exception_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        // This error code is not included in error_reporting
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
}
set_error_handler("exception_error_handler");



require_once "Exercice.php";
require_once "ExerciceSheet.php";



?>