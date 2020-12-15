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
        $resposta = number_format($saldoRestante, 2, '.', '');   

        }else{
            $saldo = $salario;
            $cheque1 = 0;
            $cheque2 = 0;
            $saldoRestante = $saldo - ($cheque1 + $cheque2);
            $resposta = number_format($saldoRestante, 2, '.', '');   
        }
        
        $res=[
            "salario"=> $saldo,
            "cheque1"=> $cheque1,
            "cheque2"=> $cheque2,
            "resposta"=>$resposta
        ];
        return $res;
    }
    
    public function calcularCredito($saldo){
        $saldoMedio = $saldo;
        $credito = "";
        if($saldoMedio <=500){
            $credito=$saldoMedio * 0;
            $saldoMedio = $saldo;
            $saldoCredito = $saldoMedio + $credito;            
            $resposta = "Você Não tem direito a crédtio";

        }elseif($saldoMedio >500 && $saldoMedio <=1000 ){
            $credito=$saldoMedio * 0.3;
            $saldoMedio = $saldo;
            $saldoCredito = $saldoMedio + $credito;            
            $resposta = "Você tem direito a crédtio de R$ ".number_format($credito, 2, '.','');
        }elseif($saldoMedio >1000 && $saldoMedio<=3000 ){
            $credito=$saldoMedio * 0.4;
            $saldoMedio = $saldo;
            $saldoCredito = $saldoMedio + $credito;            
            $resposta = "Você tem direito a crédtio de R$ ".number_format($credito, 2, '.','');
        }
        elseif($saldoMedio >3000 ){
            $credito=$saldoMedio * 0.5;
            $saldoMedio = $saldo;
            $saldoCredito = $saldoMedio + $credito;            
            $resposta = "Você tem direito a crédtio de R$ ".number_format($credito, 2, '.','');
        }else{
            $credito=0;
            $saldoMedio = $saldo;
            $saldoCredito = $saldoMedio + $credito;            
            $resposta = "Nenum valor informado";
        }
        return $resultado=[
            'credito'=> $credito,
            'saldoMedio' => $saldo,
            'saldoCredito' => $saldoCredito,            
            'resposta' => $resposta,
        ];

    }
    public function ordenar($a, $b, $c){
    
        $ordem[]=$a;
        $ordem[]=$b;
        $ordem[]=$c;

        sort($ordem);

        return $ordem;

    }

    public function maiorNumero($a, $b, $c, $d, $e,$f){
    
        $numero[]=$a;
        $numero[]=$b;
        $numero[]=$c;
        $numero[]=$d;
        $numero[]=$e;
        $numero[]=$f;

        rsort($numero);
        
        return $numero;

    }
    public function calcularComissao($s, $v){
        $salario = $s;
        $vendas = $v;
        
        if($vendas <=1000){
            $comissao = $vendas * 0.03;
            $salarioComissionado = $salario + $comissao;

        }else{
            $comissao = $vendas * 0.05;
            $salarioComissionado = $salario + $comissao;
        }
        $c=[
            'salario'=>$salario,
            'salarioComissionado'=>$salarioComissionado,
            'vendas'=> $vendas,
            'comissao'=>$comissao
        ];
        return $c;

    }

    public function calcularTriangulo($a, $b, $c){

        if($a > ($b + $c)){
            $triangulo = "Não existe";

        }elseif(($a * $a ) == ($b * $b + $c * $c)){
            $triangulo = "Triângulo Retângulo";

        }elseif(($a * $a) > ($b * $b)+($c * $c)){
            $triangulo = "Triângulo Obtusângulo";

        }elseif(($a * $a) < ($b * $b)+($c * $c)){
            $triangulo = "Triângulo Acutângulo";

        }elseif($a = $b & $b = $c){
            $triangulo = "Triângulo Equilátero";

        }elseif($a = $b &&  $b != $c || $c = $b && $b != $a){
            $triangulo = "Triângulo Isósceles";
        }else{
            $triangulo="";
        }

        $dados=[
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
            'triangulo'=>$triangulo
        ];

        return $dados;

    }


}