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

        if (count($categorias) > 0) {
            return "{categorias:" . json_encode($categorias) . "}";
        }else{
            return json_encode("Erro");
        }
    }

    public function add($categoria)
    {
        $stmt = $this->getConnection()->prepare("INSERT INTO categorias (nome) VALUES (:nome)");
        $stmt->bindParam(":nome", $categoria->nome);
        $stmt->execute();
    }

    public function update($categoria, int $id)
    {
        $stmt = $this->getConnection()->prepare("UPDATE categorias SET nome = :nome WHERE id = :id");
        $stmt->bindParam(":nome", $categoria->nome);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $stmt = $this->getConnection()->prepare("DELETE FROM categorias WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function getById(int $id)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM  categorias WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $categoria = $stmt->fetchAll(PDO::FETCH_OBJ);

        if (count($categoria) > 0) {
            return json_encode($categoria);
        } else {
            return json_encode("Categoria não encontrada");
        }
    }


    // private

    private function getConnection()
    {
        $connection = new Connection();

        return $connection->getConnection();
    }
}
