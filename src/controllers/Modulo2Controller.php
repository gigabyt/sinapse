<?php
namespace src\controllers;

use \core\Controller;
use src\models\Exercicios;

class Modulo2Controller extends Controller {

    public function index() { 
             
        
        $this->render('modulo2');
        
    }
    public function equacao(){
        
        $this->render('exercicio_equacao');
    }
    public function actionEquacao(){
        $eq = new Exercicios();

        $a = filter_input(INPUT_POST, 'a');
        $b = filter_input(INPUT_POST, 'b');
        $c = filter_input(INPUT_POST, 'c');
        
        if($a !='' && $b && $c){
        $dados = $eq->calcularEquacao($a, $b, $c);

        $this->render('exercicio_equacao', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('exrecicio_equacao');
        }
      
    }   
    public function salario(){ 
        
        $this->render('exercicio_reajuste');
    }
    public function actionSalario(){
        $eq = new Exercicios();

        $salario = filter_input(INPUT_POST, 'salario');
       
        if($salario !=''){
        $dados = $eq->calcularSalario($salario);

        $this->render('exercicio_reajuste', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('exercicio_reajuste');
        }
       
    }
    public function saldo(){
        

        $this->render('exercicio_saldo');
       

    }
    public function calcularSaldo(){
        $saldo = new Exercicios();

        $salario = filter_input(INPUT_POST, 'salario');
        $x = filter_input(INPUT_POST, 'x');
        $y = filter_input(INPUT_POST, 'y');
       
        if($saldo !=''){
        $dados = $saldo->calcularSaldo($salario, $x, $y);

        $this->render('exercicio_saldo', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('execicio_saldo');
        }
       

    }
    public function saldoMedio(){
        

        $this->render('exercicio_saldo_medio');
       

    }
    public function calcularCredito(){
        $creditoConcedito = new Exercicios();

        $saldo = filter_input(INPUT_POST, 'saldo');
        
       
        if($saldo !=''){
        $dados = $creditoConcedito->calcularCredito($saldo);

        $this->render('exercicio_saldo_medio', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('exercicio_saldo_medio');
        }
       

    }
    public function ordenar(){
        

        $this->render('exercicio_ordem');
       

    }
    public function actionOrdenar(){
        $ordem = new Exercicios();

        $a = filter_input(INPUT_POST, 'a');
        $b = filter_input(INPUT_POST, 'b');
        $c = filter_input(INPUT_POST, 'c');
        
       
        if($a !='' &&  $b !='' && $c !=''){
        $dados = $ordem->ordenar($a, $b, $c);
           
        $this->render('exercicio_ordem', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('exercicio_ordem');
        }
       

    }
    public function maiorNumero(){
        $this->render('exercicio_maior_numero');
    }
    public function actionMaiorNumero(){
        $numero= new Exercicios();

        $a = filter_input(INPUT_POST, 'a');
        $b = filter_input(INPUT_POST, 'b');
        $c = filter_input(INPUT_POST, 'c');
        $d = filter_input(INPUT_POST, 'd');
        $e = filter_input(INPUT_POST, 'e');
        $f = filter_input(INPUT_POST, 'f');
        
       
        if($a !='' &&  $b !='' && $c !='' && $d !='' && $e !='' && $f !=''){
        $dados = $numero->maiorNumero($a, $b, $c, $d, $e, $f);
           
        $this->render('exercicio_maior_numero', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('exercicio_maior_numero');
        }
       

    }
    public function comissao(){
        $this->render('exercicio_comissao');
    }
    public function actionComissao(){
        $com = new Exercicios();
        $s = filter_input(INPUT_POST, 'salario');
        $v = filter_input(INPUT_POST, 'vendas');

        if($s !="" && $v !=""){
            $dados = $com->calcularComissao($s, $v);
            $this->render('exercicio_comissao', [
                'dados' => $dados,
            ]);
        }else{
            $this->render('exercicio_comissao');

        }       
       
    }
    public function triangulo(){
        $this->render('exercicio_triangulo');
    }
    public function actionTriangulo(){
        $numero= new Exercicios();

        $a = filter_input(INPUT_POST, 'a');
        $b = filter_input(INPUT_POST, 'b');
        $c = filter_input(INPUT_POST, 'c');       
        
       
        if($a !='' &&  $b !='' && $c !='' ){
        $dados = $numero->calcularTriangulo($a, $b, $c);
           
        $this->render('exercicio_triangulo', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('exercicio_triangulo');
        }
       

    }
   
}
