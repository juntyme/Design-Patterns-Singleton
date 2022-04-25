<?php

require "helpers/database.php";

$instance1 = create();

$instance2 = update();

var_dump($instance1);
var_dump($instance2);

// use app\Log;
// use app\Connection;
// $instance1 = Connection::getInstance();
// $instance2 = clone $instance1;
// var_dump($instance1 == $instance2);

// use app\Counter;
// Counter::addCounter(10);
// var_dump(Counter::getCounter());
