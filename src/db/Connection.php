<?php

namespace src\db;

use PDO;

class Connection
{
    public function getConnection()
    {
        return new PDO(
            'mysql:host=localhost;dbname=SlimProdutos',
            'root',
            '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
}
