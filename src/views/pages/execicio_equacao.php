<?php $render('header');?>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Modulo 2</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Equação do 2º Grau</li>
        </ol>
    </nav>
    <div class="container-table">
        <div class="card">
            <div class="card-header">
                Atividade
            </div>
            <div class="card-body">
                <h5 class="card-title">Equação do 2º grau</h5>
                <p class="card-text">Escrever um programa que resolva uma equação do 2º grau completa</p>
                <a href="#" class="btn btn-secondary">Visualizar</a>
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
                                <label for="inputCity">Quanto vale a?</label>
                                <input type="text" class="form-control" name="a">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Quanto vale b?</label>
                                <input type="text" class="form-control" name="b">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Quanto vale c?</label>
                                <input type="text" class="form-control" name="c">
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