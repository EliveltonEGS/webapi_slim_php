<?php

namespace src\controller;

use src\entities\Categoria;
use src\model\CategoriaModel;

class CategoriaController
{
    public function get()
    {
        $cModel = new CategoriaModel();
        return $cModel->get();
    }

    public function add($categoria)
    {
        $cModel = new CategoriaModel();
        $cModel->add($categoria);
    }

    public function update($categoria, int $id)
    {
        $cModel = new CategoriaModel();
        $cModel->update($categoria, $id);
    }

    public function delete(int $id)
    {
        $cModel = new CategoriaModel();
        $cModel->delete($id);
    }

    public function getById(int $id)
    {
        $cModel = new CategoriaModel();
        return $cModel->getById($id);
    }
}
