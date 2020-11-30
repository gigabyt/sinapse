<?php $render('header');?>

<div class="col-9 home">
    <div class="caixa">

        <div class="conteudo pt-3">
            <div class="titulo">
                <h1 class="h4 mb-0"><i class="far fa-list-alt"></i> Modulo 2 - Equação do 2º grau</h1>
            </div>
            <div class="rows mt-3">
                <div class="col-12 mb-3">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Problema</span>
                        <p>Escreva um programa para resolver uma equação do 2º grau completa</p>
                        <p>Faça todas as validações necessárias</p>
                        <p>Imprima na tela o resultado do delta</p>
                        <p>Imprima na tela o resultado de X1 e X2</p>
                    </div>
                </div>

                <div class="col-6 mb-3 d-flex">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Dados da equação</span>
                        <div class="rows">
                            <div class="col-12">
                            <div class="base-caixa formulario">							
							<form action="<?=$base;?>exercicio/equacao" method="post">
								<div class="rows">									
									<div class="col-12"> 
										<div class="rows">																				
											<div class="col-4">
												<span class="text-label">O valor de "a" é?</span>
												<input type="text" name="a" placeholder="a= ?" class="form-campo">
											</div>											
											<div class="col-4">
												<span class="text-label">O valor de "b" é?</span>
												<input type="text" name="b" placeholder="b= ?" class="form-campo">
											</div>												
											<div class="col-4">
												<span class="text-label">O valor de "c" é?</span>
												<input type="text"  name="c" placeholder="c= ?" class="form-campo">
											</div>								
											<div class="col-12 mt-4 pb-4">
												<input type="submit" value="Calcular" class="btn d-table m-auto">
											</div>
										</div>
									</div>									
								</div>
							</form>
						</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6 mb-3 d-flex">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Resolução do problema</span>
                        <div class="equacao">
                        
                        <?php 
                        $a = filter_input(INPUT_POST, 'a');
                        $b = filter_input(INPUT_POST, 'b');
                        $c = filter_input(INPUT_POST, 'c');  
                        if($a && $b && $c){                      
                        ?>  
                                
                         <?=$dados['a'];?>x<sup>2</sup><?=$dados['b'];?>x<?=$dados['c'];?>=0
                        </div>
                        <p><?=$dados['result'];?></p>                        
                        <p class="equacao_resposta">o valor de Delta é =<span> <?=$dados['delta'];?></span></p> 
                        <p class="equacao_resposta">o valor de X' = <span><?=$dados['x1'];?></span></p>
                        <p class="equacao_resposta">o valor de X'' = <span><?=$dados['x2'];?></span></p>
                        <?php }else{ echo "verifique os dados informados";}?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $render('footer');?>