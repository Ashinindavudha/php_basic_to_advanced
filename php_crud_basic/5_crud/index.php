<?php
require_once 'template/pageloader.php';

require 'template/createForm.php';
$users = $query->selectAll('users');
///var_dump($users);

foreach ($users as $user) {
    echo $user->id . ' ' . $user->name . ' ' . $user->email. '<br>';
}
