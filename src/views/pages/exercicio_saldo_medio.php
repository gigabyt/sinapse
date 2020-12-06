<?php $render('header');?>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Modulo 2</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Saldo em conta</li>
        </ol>
    </nav>
    <div class="container-table">
        <div class="card">
            <div class="card-header">
                Atividade
            </div>
            <div class="card-body">
                <h5 class="card-title">Cálculo de Saldo Médio</h5>
                <p class="card-text">A CEF concederá um crédito especial com juros de 2% aos seus clientes de acordo com o saldo médio no último ano. Fazer um algoritmo em PORTUGOL que leia o saldo médio de um cliente e calcule o valor do crédito de acordo com a tabela a seguir.
 
 <table class="table">
     <thead>
         <tr>
             <th scope="row"></th>
             <th>Saldo Médio  </th>
             <th> Percentual</th>            
         </tr>
     </thead>
     <tbody>
         <tr>
             <td scope="row"></td>
             <td>De 0 a 500</td>
             <td>Nenhum crédito</td>
         </tr>
         <tr>
             <td scope="row"></td>
             <td>De 501 a 1000</td>
             <td>30% do valor do saldo médio</td>
         </tr>
         <tr>
             <td scope="row"></td>
             <td>De 1001 a 3000</td>
             <td>40% do valor do saldo médio</td>
         </tr>
         <tr>
             <td scope="row"></td>
             <td> Acima de 3001 </td>
             <td>50% do valor do saldo médio</td>
         </tr>
     </tbody>
 </table>
  
 Imprimir uma mensagem informando o saldo médio e o valor de crédito.</p>

            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Resolução
            </div>
            <div class="row">
                <div class="form-container col-md-5">
                    <form class="p-3" method="POST" action="<?=$base;?>atividade/modulo_2/saldo_medio">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Qual o saldo médio?</label>
                                <input type="text" class="form-control" name="saldo">
                            </div>                           
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Calcular</button>
                    </form>
                </div>
                <div class="form-container col-md-6 py-3">
                    <?php
                    $saldo = filter_input(INPUT_POST, 'saldo');
                                                
                        if($saldo !=''){
                            
                            $credito = number_format($dados['credito'],2,'.','');
                            $saldoMedio = number_format($dados['saldoMedio'],2,'.','');                            
                            $saldoCredito = number_format($dados['saldoCredito'],2,'.',''); 
                            $resposta = $dados['resposta'];  
                        ?>


                    <div class="alert alert-success" role="alert">
                        Seu crédito atual é => R$ <?=$credito;?>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O seu saldo Médio é =>R$ <?=$saldoMedio;?>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        Você tem direito a um credito total de =>R$ <?=$saldoCredito;?>
                    </div>
                   

                    <?php }else{?>
                    <div class="alert alert-danger" role="alert">
                        <?="Preencha o campo ao lado";?>
                    </div>
                    <?php }
                    ?>


                </div>
            </div>
        </div>


    </div>

</div>
<?php $render('footer');?>