<?php
require_once('e9dog.php');
$lab = new Dog;
// ------------------------------Set Properties--------------------------
$dog_error_message = $lab->set_dog_name('Fred');
print $dog_error_message == TRUE ? 'Name update successful <br>' : 'Name update not successfull <br>';
$dog_error_message = $lab->set_dog_weight(50);
print $dog_error_message == TRUE ? 'Weight update successful<br />' : 'Weight update not successful<br />';

$dog_error_message = $lab->set_dog_breed('Lab');
print $dog_error_message == TRUE ? 'Breed update successful<br />' : 'Breed update not successful<br />';

$dog_error_message = $lab->set_dog_color('Yellow');
print $dog_error_message == TRUE ? 'Color update successful<br />' : 'Color update not successful<br />';

$dog_properties = $lab->get_properties();
list($dog_weight, $dog_breed, $dog_color) = explode(',', $dog_properties);
print "Dog weight is $dog_weight. Dog breed is $dog_breed. Dog color is $dog_color.";