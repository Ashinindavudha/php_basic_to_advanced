<?php
require "fucntions.php";
$personBio = [
    "name" => "ashinindavudha",
    "age" => 20,
    "isMarried" => true
];

function name(){
    echo "my name is ashinindavudha <br>";
}
name();
// function paramiter
function publicName($name, $age){
    echo "my name is $name, my age is $age <br>";
}
publicName("Linthu", 20);


// function default paramiter
function privateName($name, $age=20){
    echo "my name is $name, my age is $age <br>";
}
privateName("Linthu");

// echo "<pre>";
// die(var_dump($personBio));
echo "<br><hr>";


dd($personBio);
require "index.view.php";