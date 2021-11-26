<?php
$tasks = $query->selectAll('tasks');
require 'views/indexView.php';
