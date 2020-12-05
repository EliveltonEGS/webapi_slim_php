<?php

use Slim\Slim;
use src\controller\CategoriaController;

require_once("vendor/autoload.php");

$app = new Slim();

$app->response()->header('Content-Type', 'application/json;charset=utf-8');


// url base: http://localhost/dev/cadastro/categorias.php/

// lista todas as categorias
$app->get('/', function () {
    $cController = new CategoriaController();
    echo $cController->get();
});

//nova categoria
$app->post('/new', function () {

    $request = \Slim\Slim::getInstance()->request();
    $categoria = json_decode($request->getBody());

    $cController = new CategoriaController();
    json_encode($cController->add($categoria));
    echo json_encode("Salvo");
});

//editar categoria
$app->put('/update/:id', function (int $id) {

    $request = \Slim\Slim::getInstance()->request();
    $categoria = json_decode($request->getBody());

    $cController = new CategoriaController();
    json_encode($cController->update($categoria, $id));
    echo json_encode("Editado");
});

$app->delete('/delete/:id', function(int $id){
    $cController = new CategoriaController();
    $cController->delete($id);
    echo json_encode("Excluído");
});

//buscar por codigo
$app->get('/getById/:id', function (int $id) {
    $cController = new CategoriaController();
    echo $cController->getById($id);
});

$app->run();
