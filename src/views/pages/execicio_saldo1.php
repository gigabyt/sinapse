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
                <h5 class="card-title">Cálculo de Saldo</h5>
                <p class="card-text">Um trabalhador recebeu seu salário e o depositou em sua conta corrente bancária. Esse trabalhador emitiu dois cheques e agora deseja saber seu saldo atual. Sabe-se que cada operação bancária de retirada paga CPMF de 0,38% e o saldo inicial da conta está zerado.</p>
                
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Resolução
            </div>
            <div class="row">
                <div class="form-container col-md-5">
                    <form class="p-3" method="POST" action="<?=$base;?>atividade/modulo_2/equacao">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Qual o salário?</label>
                                <input type="text" class="form-control" name="salario">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Cheque 1?</label>
                                <input type="text" class="form-control" name="x">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Cheque 2?</label>
                                <input type="text" class="form-control" name="y">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Calcular</button>
                    </form>
                </div>
                <div class="form-container col-md-6 py-3">
                    <?php
                    $a = filter_input(INPUT_POST, 'a');
                    $b = filter_input(INPUT_POST, 'b');
                    $c = filter_input(INPUT_POST, 'c');                   

                    if($a){?>
                    <div class="alert alert-success" role="alert">
                      a => <?=$dados['a'];?>; b => <?=$dados['b'];?>;
                      c => <?=$dados['c'];?>;
                       Seu delta é => <?=$dados['delta'];?>                      
                    </div>
                    <div class="alert alert-secondary" role="alert">
                       <?=$dados['result'];?> 
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O valor de x1 => <?=$dados['x1'];?> 
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O valor de x2 => <?=$dados['x2'];?> 
                    </div>

                    <?php }else{?>
                        <div class="alert alert-danger" role="alert">
                        Todos os campos devem ser preenchidos
                    </div>
                    <?php }
                    ?>

                </div>
            </div>
        </div>


    </div>

</div>
<?php $render('footer');?>