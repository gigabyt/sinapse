<?php
namespace src\models;
use \core\Model;

class Exercicios extends Model {    
    
    public function calcularEquacao($a, $b,$c){
       
        $delta = ($b * $b) - 4 * $a* $c;
        $x1 = (-$b+ sqrt($delta))/(2 * $a);
        $x2 = (-$b- sqrt($delta))/(2 * $a);
        
        if($b>0){
            $b = "+".$b;
        }
        if($c>0){
        $c = "+".$c;
        }
       

        if($delta < 0){
            $result = "A equação não tem raizes reais pois delta < 0";
            $x1="Não existe";
            $x2="Não existe";
        }elseif($delta ==0){
            $result = "A equação tem 2 raizes reais iguais pois delta = 0";
        }elseif($delta > 0){
            $result = "A equação tem 2 raizes reais diferentes pois delta > 0";
        }else{
            $result = 0;
        }
        $solucao=[
            "delta"=>$delta,
            "x1"=>$x1,
            "x2"=>$x2,
            "result"=>$result,
            "a"=>$a,
            "b"=>$b,
            "c"=>$c,
        ];
        
        return $solucao;      

    }

    public function calcularSalario($salario){
        if ($salario<500){
        $reajuste = $salario * 0.30;
        $salarioNovo = $salario + $reajuste;
        $reposta = "você tem direito a um reajuste de R$ ".number_format($reajuste, 2, '.', '');   

        }else{
            $reajuste = 0;
            $salarioNovo = $salario + $reajuste;
            $reposta = "você não tem direito a um reajuste";
        }
        
        $res=[
            "salario"=> $salario,
            "reajuste"=> $reajuste,
            "salarioNovo"=> $salarioNovo,
            "resposta"=>$reposta
        ];
        return $res;
    }
    public function calcularSaldo($salario, $x, $y){
        if ($salario>0){
        $saldo = $salario;
        $cheque1 = $x + $x * 0.38;
        $cheque2 = $y + $y * 0.38;
        $saldoRestante = $saldo - ($cheque1 + $cheque2);
        $reposta = number_format($saldoRestante, 2, '.', '');   

        }else{
            $saldo = $salario;
            $cheque1 = 0;
            $cheque2 = 0;
            $saldoRestante = $saldo - ($cheque1 + $cheque2);
            $reposta = number_format($saldoRestante, 2, '.', '');   
        }
        
        $res=[
            "salario"=> $saldo,
            "cheque1"=> $cheque1,
            "cheque2"=> $cheque2,
            "resposta"=>$reposta
        ];
        return $res;
    }
    

}