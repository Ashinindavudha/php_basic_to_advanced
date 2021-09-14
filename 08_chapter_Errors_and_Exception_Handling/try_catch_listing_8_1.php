<?php
try {
    $fh = fopen("contacts.txt", "r");
    if(! $fh){
        throw new Exception("could not open the file");
    }
} catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}