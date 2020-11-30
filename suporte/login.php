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
	<title>Caixa Eletrônico</title>
</head>
<div class="container">
	<div class="container-titulo">
		<p><span>AG</span>CLUB<span>7</span></p>
	</div>
	<div class="container-login">
		<form method="POST">
			<p>Usuário:</p>
			<input type="text" name="userName" /><br/><br/>

			<p>Senha:</p>
			<input type="password" name="pass" /><br/><br/>

			<p>Perfil:</p>
			<select name="perfil">
				<option value="0">Administrador</option>
				<option value="1">Usuário</option>
			</select><br/><br/>
			<input type="submit" value="Entrar" />
		</form>
	</div>
</div>
</body>
</html>

