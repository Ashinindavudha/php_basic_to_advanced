<?php
//require 'config.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';
$config = require "config.php";
$query = new QueryBuilder(
    Connection::getConnection($config['db'])
);
