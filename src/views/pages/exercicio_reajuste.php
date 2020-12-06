<?php $render('header');?>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Modulo 2</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Reajuste de Salário</li>
        </ol>
    </nav>
    <div class="container-table">
        <div class="card">
            <div class="card-header">
                Atividade
            </div>
            <div class="card-body">
                <h5 class="card-title">Reajuste de Salário</h5>
                <p class="card-text">Uma empresa decide dar um aumento de 30% aos funcionários com salários inferiores a R$ 500,00. Faça um algoritmo que receba o salário do funcionário e mostre o valor do salário reajustado ou uma mensagem caso o funcionário não tenha direito ao aumento.</p>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Resolução
            </div>
            <div class="row">
                <div class="form-container col-md-5">
                    <form class="p-3" method="POST" action="<?=$base;?>atividade/modulo_2/salario">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Quanto seu salário?</label>
                                <input type="text" class="form-control" name="salario">
                            </div>                           
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Calcular</button>
                    </form>
                </div>
                <div class="form-container col-md-6 py-3">
                    <?php
                    $salario = filter_input(INPUT_POST, 'salario');
                                                
                        if($salario){
                            $reajuste = number_format($dados['reajuste'],2,'.','');
                            $salarioNovo = number_format($dados['salarioNovo'],2,'.','');
                            $resposta = $dados['resposta']; 
                            $salarioAtual = number_format($dados['salario'],2,'.','');                     
                        ?>  

                   
                    <div class="alert alert-success" role="alert">
                         <?=$resposta;?>                      
                    </div>                   
                    <div class="alert alert-primary" role="alert">
                        O valor do seu salário é =>R$ <?=$salarioAtual;?> 
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O valor do novo salário é =>R$ <?=$salarioNovo;?> 
                    </div>

                    <?php }else{?>
                        <div class="alert alert-danger" role="alert">
                        Preencha o campo com seu salário para calcular o reajuste!
                    </div>
                    <?php }
                    ?>

                </div>
            </div>
        </div>


    </div>

</div>
<?php $render('footer');?>