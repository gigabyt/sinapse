<?php $render('header');?>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Modulo 2</li>
            <li class="breadcrumb-item active text-white" aria-current="page">Ordenar número</li>
        </ol>
    </nav>
    <div class="container-table">
        <div class="card">
            <div class="card-header">
                Atividade
            </div>
            <div class="card-body">
                <h5 class="card-title">Ordenar número</h5>
                <p class="card-text">Escrever um programa que lê 3 valores a, b, c, e escreva os 3 valores em ordem
                    crescente.</p>

            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Resolução
            </div>
            <div class="row">
                <div class="form-container col-md-5">
                    <form class="p-3" method="POST" action="<?=$base;?>atividade/modulo_2/ordenar">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Qual o nº A ?</label>
                                <input type="text" class="form-control" name="a">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Qual o nº B ?</label>
                                <input type="text" class="form-control" name="b">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Qual o nº C ?</label>
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
                                                
                        if($a !='' && $b !='' && $c !=''){?>

                    <div class="alert alert-success" role="alert">
                        A ordem crescente é => <?php 
                        foreach($dados as $n){
                           
                            echo $n.', ';                           
                        }
                        
                        ?>
                    </div>
                    <div class="alert alert-success" role="alert">
                        O Valor de A => <?=$a;?>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        O Valor de B => <?=$b;?>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        O Valor de C => <?=$c;?>
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