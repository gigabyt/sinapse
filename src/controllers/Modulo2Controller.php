<?php
namespace src\controllers;

use \core\Controller;
use src\models\Exercicios;

class Modulo2Controller extends Controller {

    public function index() { 
             
        
        $this->render('modulo2');
        
    }
    public function equacao(){
        
        $this->render('execicio_equacao');
    }
    public function actionEquacao(){
        $eq = new Exercicios();

        $a = filter_input(INPUT_POST, 'a');
        $b = filter_input(INPUT_POST, 'b');
        $c = filter_input(INPUT_POST, 'c');
        
        if($a !='' && $b && $c){
        $dados = $eq->calcularEquacao($a, $b, $c);

        $this->render('execicio_equacao', [
            'dados' => $dados,            

        ]);
        }else{
            $this->render('execicio_equacao');
        }
      
    }
    

    public function salario(){ 
        
        $this->render('execicio_reajuste');
    }
    public function actionSalario(){
        $eq = new Exercicios();

        $salario = filter_input(INPUT_POST, 'salario');
       
        if($salario){
        $dados = $eq->calcularSalario($salario);

        $this->render('execicio_reajuste', [
            'dados' => $dados,            

        ]);
        }
       
    }
    
   
}
