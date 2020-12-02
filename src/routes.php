<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/atividades', 'HomeController@atividades');
$router->get('/atividade/modulo_1', 'Modulo1Controller@index');

//Rotas do modulo 2
$router->get('/atividade/modulo_2', 'Modulo2Controller@index');
$router->get('/atividade/modulo_2/equacao', 'Modulo2Controller@equacao');
$router->post('/atividade/modulo_2/equacao', 'Modulo2Controller@actionEquacao');

// Rotas para calcular o salário
$router->get('/exercicio/salario', 'ExerciciosController@salario');
$router->post('/exercicio/salario', 'ExerciciosController@actionSalario');
// Rotas para calcular o salário
$router->get('/exercicio/saldo', 'ExerciciosController@saldo');
$router->post('/exercicio/saldo', 'ExerciciosController@calcularSaldo');


