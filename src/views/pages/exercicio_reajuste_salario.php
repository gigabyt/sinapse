<?php $render('header');?>

<div class="col-9 home">
    <div class="caixa">

        <div class="conteudo pt-3">
            <div class="titulo">
                <h1 class="h4 mb-0"><i class="far fa-list-alt"></i> Modulo 2 - Reajuste de salário</h1>
            </div>
            <div class="rows mt-3">
                <div class="col-12 mb-3">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Problema</span>
                        <p>Uma empresa decide dar um aumento de 30% aos funcionários com salários inferiores a R$ 500,00. Faça um algoritmo que receba o salário do funcionário e mostre o valor do salário reajustado ou uma mensagem caso o funcionário não tenha direito ao aumento.</p>
                        
                    </div>
                </div>

                <div class="col-6 mb-3 d-flex">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Reajuste de Salário</span>
                        <div class="rows">
                            <div class="col-12">
                            <div class="base-caixa formulario">							
							<form action="<?=$base;?>exercicio/salario" method="post">
								<div class="rows">									
									<div class="col-12"> 
										<div class="rows">																				
											<div class="col-12">
												<span class="text-label">Salário</span>
												<input type="text" name="salario" placeholder="Digite aqui seu salário atual" class="form-campo">
											</div><div class="col-12 mt-4 pb-4">
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
                        <div class="equacao resposta">
                        
                        <?php 
                        $salario = filter_input(INPUT_POST, 'salario');
                        
                        
                        if($salario){
                            $reajuste = $dados['reajuste'];
                            $salarioNovo = $dados['salarioNovo'];
                            $resposta = $dados['resposta'];                      
                        ?>  
                                
                         <?=$resposta;?>
                        </div>                                               
                        <p class="equacao_resposta">Seu salário é = <span>R$ <?=number_format($salario, 2, '.', '');?></span></p> 
                        <p class="equacao_resposta">O seu reajuste é = <span>R$ <?=number_format($reajuste, 2, '.', '');?></span></p>
                        <p class="equacao_resposta">O seu novo salário é = <span>R$ <?=number_format($salarioNovo, 2, '.', '');?></span></p>
                        <?php }else{ echo "verifique os dados informados";}?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $render('footer');?>