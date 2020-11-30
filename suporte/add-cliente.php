<?php
session_start();
require 'config.php';

if(isset($_POST['userName']) && empty($_POST['userName']) == false) {
	$nome = addslashes($_POST['userName']);
	$senha = addslashes($_POST['pass']);
	$perfil = addslashes($_POST['perfil']);

	$sql = $pdo->prepare("SELECT * FROM users WHERE nome = :userName AND senha = :pass AND perfil = :perfil");
	$sql->bindValue(":userName", $nome);
	$sql->bindValue(":pass", md5($senha));
	$sql->bindValue(":perfil", $perfil);
	$sql->execute();

	if($sql->rowCount() > 0) {
		$sql = $sql->fetch();

		$_SESSION['agente'] = $sql['id'];
		header("Location: index.php");
		exit;
	}

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"/>
	<title>Controle Agclub7 - Barreto</title>
</head>
<body>
<head>
	<title>AGCLUB7 - Adicionar Cliente</title>
</head>
<div class="container addCliente">
	<div class="container-titulo">
		<p><span>AG</span>CLUB<span>7</span></p>
	</div>    
	<h3> Adicionar Cliente</3>
	<div class="container-login">
		<form method="POST">
			<p>Cliente:</p>
			<input type="text" name="cliente" /><br/><br/>

			<p>Agência:</p>
			<input type="text" name="agencia" /><br/><br/>

            <p>conta:</p>
			<input type="text" name="conta" /><br/><br/>			
			
			<input type="submit" value="Salvar" />
		</form>
	</div>
    <a href="./">Voltar</a>
</div>
</body>
</html>