<?php $render('header');?>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Modulo 2</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Triângulo</li>
        </ol>
    </nav>
    <div class="container-table">
        <div class="card">
            <div class="card-header">
                Atividade
            </div>
            <div class="card-body">
                <h5 class="card-title">Triângulo</h5>
                <p class="card-text">Escrever um algoritmo que lê 3 comprimentos de lados a, b, c. Determine o tipo de triângulo que estes 3 lados formam, com base nos seguintes casos escrevendo sempre os valores lidos e uma mensagem adequada:</br>

Se a > b + c não formam triângulo algum.</br>
Se a2 = b2 + c2 formam um triângulo retângulo.</br>
Se a2 > b2 + c2 formam um triângulo obtusângulo.</br>
Se a2 < b2 + c2 formam um triângulo acutângulo.</br>
Se forem todos iguais formam um triângulo equilátero. </br>
Se a = b ou b = c ou a = c então formam um triângulo isósceles</p>
                
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Resolução
            </div>
            <div class="row">
                <div class="form-container col-md-5">
                    <form class="p-3" method="POST" action="<?=$base;?>atividade/modulo_2/triangulo">
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
                        Seu triângulo é => <?=$dados['triangulo'];?>                      
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        O lado a=> <?=$dados['a'];?> 
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O lado b=> <?=$dados['b'];?> 
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O lado c=> <?=$dados['c'];?> 
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