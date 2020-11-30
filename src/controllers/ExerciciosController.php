<?php
namespace src\controllers;

use core\Controller;
use src\models\Exercicios;

class ExerciciosController extends Controller{

    public function equacao(){  
        
        
        $this->render('execicio_equacao');
    }
    public function actionEquacao(){
        $eq = new Exercicios();

        $a = filter_input(INPUT_POST, 'a');
        $b = filter_input(INPUT_POST, 'b');
        $c = filter_input(INPUT_POST, 'c');
        if($a && $b && $c){
        $dados = $eq->calcularEquacao($a, $b, $c);

        $this->render('execicio_equacao', [
            'dados' => $dados,            

        ]);
        }
        $this->redirect('exercicio/equacao');
    }

    public function salario(){ 
        
        $this->render('exercicio_reajuste_salario');
    }
    public function actionSalario(){
        $eq = new Exercicios();

        $salario = filter_input(INPUT_POST, 'salario');
       
        if($salario){
        $dados = $eq->calcularSalario($salario);

        $this->render('exercicio_reajuste_salario', [
            'dados' => $dados,            

        ]);
        }
        $this->redirect('exercicio/salario');
    }

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
