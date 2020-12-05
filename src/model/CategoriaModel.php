<?php

namespace src\model;

use PDO;
use src\db\Connection;

class CategoriaModel
{

    public function get()
    {
        $stmt = $this->getConnection()->query("SELECT * FROM Categorias");
        $categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
        return "{categorias:" . json_encode($categorias) . "}";
    }

    // private

    private function getConnection()
    {
        $connection = new Connection();

        return $connection->getConnection();
    }
}
