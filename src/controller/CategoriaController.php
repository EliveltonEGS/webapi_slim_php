<?php

namespace src\controller;

use src\model\CategoriaModel;

class CategoriaController{
    public function get(){
        $cModel = new CategoriaModel();
        echo $cModel->get();
    }
}