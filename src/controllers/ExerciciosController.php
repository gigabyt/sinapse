<?php
namespace src\controllers;

use core\Controller;
use src\models\Exercicios;

class ExerciciosController extends Controller{
    
  

    public function saldo(){
        

        $this->render('exercicio_saldo');
       

    }
    public function calcularSaldo(){
        $saldo = new Exercicios();

        $salario = filter_input(INPUT_POST, 'salario');
        $x = filter_input(INPUT_POST, 'x');
        $y = filter_input(INPUT_POST, 'y');
       
        if($saldo){
        $dados = $saldo->calcularSaldo($salario, $x, $y);

        $this->render('exercicio_saldo', [
            'dados' => $dados,            

        ]);
        }
        $this->redirect('exercicio/saldo');

    }


}

