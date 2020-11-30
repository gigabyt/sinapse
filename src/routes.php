<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/atividades', 'HomeController@atividades');
$router->get('/atividade/modulo_1', 'Modulo1Controller@index');


//Rotas para calcular a equação do 2º grau
$router->get('/exercicio/equacao', 'ExerciciosController@equacao');
$router->post('/exercicio/equacao', 'ExerciciosController@actionEquacao');
// Rotas para calcular o salário
$router->get('/exercicio/salario', 'ExerciciosController@salario');
$router->post('/exercicio/salario', 'ExerciciosController@actionSalario');
// Rotas para calcular o salário
$router->get('/exercicio/saldo', 'ExerciciosController@saldo');
$router->post('/exercicio/saldo', 'ExerciciosController@calcularSaldo');


