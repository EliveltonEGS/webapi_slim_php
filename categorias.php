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
    $cController->get();
});

//nova categoria
// $app->post('/new', function () {
//     $request = \Slim\Slim::getInstance()->request();
//     $categoria = json_decode($request->getBody());

//     $conn = getConn();
//     $stmt = $conn->prepare("INSERT INTO categorias (nome) VALUES (:nome)");
//     $stmt->bindParam("nome", $categoria->nome);
//     $stmt->execute();
//     $categoria->id = $conn->lastInsertId();
//     echo json_encode($categoria);
// });
// //busca categoria por id
// $app->get('/get/:id', function (int $id) {
//     $conn = getConn();
//     $stmt = $conn->prepare("SELECT * FROM categorias WHERE id = :id");
//     $stmt->bindParam("id", $id);
//     $stmt->execute();
//     $categoria = $stmt->fetchObject();
//     echo json_encode($categoria);
// });
// //editando categoria
// $app->put('/update/:id', function (int $id) {
//     $request = \Slim\Slim::getInstance()->request();
//     $categoria = json_decode($request->getBody());

//     $conn = getConn();
//     $stmt = $conn->prepare("UPDATE categorias SET nome = :nome WHERE id = :id");
//     $stmt->bindParam("nome", $categoria->nome);
//     $stmt->bindParam("id", $id);
//     $stmt->execute();
//     echo json_encode($categoria);
// });
// //excluir cateforia
// $app->delete('/delete/:id', function (int $id) {
//     $conn = getConn();
//     $stmt = $conn->prepare("DELETE FROM categorias WHERE id = :id");
//     $stmt->bindParam("id", $id);
//     $stmt->execute();
//     echo "{'message':'Categoria excluida'}";
// });

$app->run();
