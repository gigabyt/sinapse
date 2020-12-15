<?php $render('header');?>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Modulo 2</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Comissão</li>
        </ol>
    </nav>
    <div class="container-table">
        <div class="card">
            <div class="card-header">
                Atividade
            </div>
            <div class="card-body">
                <h5 class="card-title">Comissão </h5>
                <p class="card-text">Escrever um algoritmo que lê o número de um vendedor de uma empresa, seu salário fixo e o total de vendas por ele efetuadas. Cada vendedor recebe um salário fixo, mais uma comissão proporcional às vendas por ele efetuadas. A comissão é de 3% sobre o total de vendas até $ 1.000,00 e 5% sobre o que ultrapassa este valor. Escrever o número do vendedor, o total de suas vendas, seu salário fixo e seu salário total.</p>

            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Resolução
            </div>
            <div class="row">
                <div class="form-container col-md-5">
                    <form class="p-3" method="POST" action="<?=$base;?>atividade/modulo_2/comissao">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Salario</label>
                                <input type="text" class="form-control" name="salario">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Total em vendas</label>
                                <input type="text" class="form-control" name="vendas">
                            </div>                            
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Calcular</button>
                    </form>
                </div>
                <div class="form-container col-md-6 py-3">
                    <?php
                    $salario = filter_input(INPUT_POST, 'salario');
                    $vendas = filter_input(INPUT_POST, 'vendas');
                   
                        if($salario !='' && $vendas !=''){?>

                    <div class="alert alert-success" role="alert">
                        A Comissão paga é => R$ <?php 
                            
                           echo number_format($dados['comissao'],2,'.','');

                        ?>
                    </div>
                    <div class="alert alert-success" role="alert">
                        O valor do salário é => R$ <?= number_format($dados['salario'],2,'.','');?>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O valor do salário + comissão é => R$ <?=number_format($dados['salarioComissionado'],2,'.','');;?>
                    </div>
                   

                    <?php }else{?>
                    <div class="alert alert-danger" role="alert">
                        <?="Preencha os campos ao lado";?>
                    </div>
                    <?php }
                    ?>


                </div>
            </div>
        </div>


    </div>

</div>
<?php $render('footer');?>