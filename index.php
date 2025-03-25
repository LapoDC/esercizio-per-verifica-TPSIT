<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

$app->get('/alunni', "AlunniController:index"); //curl http://localhost:8080/alunni/

$app->get('/alunni/{id}', "AlunniController:show"); //curl http://localhost:8080/alunni/2

$app->post('/alunni', "AlunniController:post"); //curl -X POST http://localhost:8080/alunni -N "Content-Type: application/json" -d '{"nome":"ciccio,"cognome":"bello"}

$app->put('/alunni/{id}', "AlunniController:put"); //curl -X PUT http://localhost:8080/alunni -N "Content-Type: application/json" -d '{"nome":"ciccio,"cognome":"bello"}

$app->delete('/alunni/{id}', "AlunniController:delete"); //curl -X DELETE http://localhost:8080/alunni/2

$app->run();
