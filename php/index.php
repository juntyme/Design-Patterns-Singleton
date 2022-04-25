<?php

require 'app/Counter.php';
// require 'app/Log.php';
require 'app/Connection.php';

// use app\Log;
use app\Connection;

$instance1 = Connection::getInstance();

var_dump($instance1);



// use app\Counter;
// Counter::addCounter(10);
// var_dump(Counter::getCounter());
