<?php

class Connection
{
    public function getConnetion()
    {
        return new PDO(
            'mysql:host=localhost;dbname=SlimProdutos',
            'root',
            '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
}