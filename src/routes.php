<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/atividades', 'HomeController@atividades');
$router->get('/atividade/modulo_1', 'Modulo1Controller@index');

//Rotas do modulo 2
$router->get('/atividade/modulo_2', 'Modulo2Controller@index');

// Rotas para calcular a equacao
$router->get('/atividade/modulo_2/equacao', 'Modulo2Controller@equacao');
$router->post('/atividade/modulo_2/equacao', 'Modulo2Controller@actionEquacao');

// Rotas para calcular o salário
$router->get('/atividade/modulo_2/salario', 'Modulo2Controller@salario');
$router->post('/atividade/modulo_2/salario', 'Modulo2Controller@actionSalario');

// Rotas para calcular o saldo
$router->get('/atividade/modulo_2/saldo', 'Modulo2Controller@saldo');
$router->post('/atividade/modulo_2/saldo', 'Modulo2Controller@calcularSaldo');

// Rotas para calcular o saldo médio
$router->get('/atividade/modulo_2/saldo_medio', 'Modulo2Controller@saldoMedio');
$router->post('/atividade/modulo_2/saldo_medio', 'Modulo2Controller@calcularCredito');


// Rotas para cordenar numero maiior
$router->get('/atividade/modulo_2/ordenar', 'Modulo2Controller@ordenar');
$router->post('/atividade/modulo_2/ordenar', 'Modulo2Controller@actionOrdenar');