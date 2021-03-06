<?php
// ----------------------------------------- Properties -----------------------------------------

class Dog
{
    private $dog_weight = 0;
    private $dog_breed = "no breed";
    private $dog_color = "no color";
    private $dog_name = "no name";
// ---------------------------------- Set Methods ----------------------------------------------

function set_dog_name($value)
{
$error_message = TRUE;
(ctype_alpha($value) && strlen($value) <= 20) ? $this->dog_name = $value : $error_message = FALSE;
return $error_message;
}
function set_dog_weight($value)
{
$error_message = TRUE;
(ctype_digit($value) && ($value > 0 && $value <= 120)) ? $this->dog_weight = $value : $error_message = FALSE;
return $error_message;
}
function set_dog_breed($value)
{
$error_message = TRUE;
(ctype_alpha($value) && strlen($value) <= 35) ? $this->dog_breed = $value : $error_message = FALSE;
return $error_message;
}
function set_dog_color($value)
{
$error_message = TRUE;
(ctype_alpha($value) && strlen($value) <= 15) ? $this->dog_color = $value : $error_message = FALSE;
return $error_message;
}

function get_properties()
{
return "$this->dog_weight,$this->dog_breed,$this->dog_color.";
}
}

