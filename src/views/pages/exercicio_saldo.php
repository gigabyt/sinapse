<?php $render('header');?>

<div class="col-9 home">
    <div class="caixa">

        <div class="conteudo pt-3">
            <div class="titulo">
                <h1 class="h4 mb-0"><i class="far fa-list-alt"></i> Modulo 2 - Saldo Salarial</h1>
            </div>
            <div class="rows mt-3">
                <div class="col-12 mb-3">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Problema</span>
                        <p>Um trabalhador recebeu seu salário e o depositou em sua conta corrente bancária. Esse trabalhador emitiu dois cheques e agora deseja saber seu saldo atual. Sabe-se que cada operação bancária de retirada paga CPMF de 0,38% e o saldo inicial da conta está zerado.</p>
                        
                    </div>
                </div>

                <div class="col-6 mb-3 d-flex">
                    <div class="caixa-home">
                        <span class="d-block text-uppercase mb-3 h5">Consulta Saldo</span>
                        <div class="rows">
                            <div class="col-12">
                            <div class="base-caixa formulario">							
							<form action="<?=$base;?>exercicio/saldo" method="post">
								<div class="rows">									
									<div class="col-12"> 
										<div class="rows">																				
											<div class="col-12">
												<span class="text-label">Salário</span>
												<input type="text" name="salario" placeholder="Digite aqui seu salário" class="form-campo">
											</div>
                                            <div class="col-6">
												<span class="text-label">Cheque 1</span>
												<input type="text" name="x" placeholder="Valor do cheque R$ ?" class="form-campo">
											</div>
                                            <div class="col-6">
												<span class="text-label">Cheque 2</span>
												<input type="text" name="y" placeholder="Valor do cheque R$ ?" class="form-campo">
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
                        <div class="equacao resposta">
                        
                        <?php 
                        $salario = filter_input(INPUT_POST, 'salario');
                        
                        
                        if($salario){
                            $saldo = $dados['salario'];
                            $cheque1 = $dados['cheque1'];
                            $cheque2 = $dados['cheque2'];
                            $saldoRestante = $dados['resposta'];  

                        ?>  
                                
                         <?= "Seu saldo anterior era R$ ".number_format($saldo, 2,'.','');?>
                        </div>                                               
                        <p class="equacao_resposta">Seu Cheque 1 é = <span>R$ <?=number_format($cheque1, 2, '.', '');?></span></p> 
                        <p class="equacao_resposta">Seu Cheque 2 é = <span>R$ <?=number_format($cheque2, 2, '.', '');?></span></p>
                        <p class="equacao_resposta">O seu saldo atual é = <span>R$ <?= $saldoRestante;?></span></p>
                        <?php }else{ echo "verifique os dados informados";}?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $render('footer');?>