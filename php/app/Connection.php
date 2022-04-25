<?php

namespace app;

use PDO;

class Connection
{

    protected static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PDO("mysql:host=127.0.0.1;dbname=innout", "root", "root");
        }
        return self::$instance;
    }
}
