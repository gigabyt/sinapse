<?php
session_start();
require 'config.php';

if(isset($_SESSION['agente']) && empty($_SESSION['agente']) == false) {
	$id = $_SESSION['agente'];

	$sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if($sql->rowCount() > 0) {
		$info = $sql->fetch();
	} else {
		header("Location: login.php");
		exit;
	}

} else {
	header("Location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Controle Agclub7 - Barreto</title>
</head>

<body>
    <div class="container home">

        <div id="titulo"><span>AG</span>CLUB<span>7</span></div>

        <?php echo "<p>".$info['nome']."</p>"; ?><br />
        <?php if ($info['perfil']=="0") {
		echo "<span>Administrador</span>";
	} else{
		echo "<span>Administrador</span>";
	};?>

        <br />

        <a href="sair.php">Sair</a>

        <h3>Relação de Ganhadores</h3>

        <a href="add-cliente.php">Adicionar Cliente</a><br /><br />
        <div class="container-table">
            <table id="table-home" width="90%">
                <tr>
                    <th>Cliente</th>
                    <th>Saldo</th>
                    <th>Açoes</th>
                </tr>
                <?php
		$sql = $pdo->prepare("SELECT * FROM contas");
		
		$sql->execute();

		if($sql->rowCount() > 0) {
			foreach($sql->fetchAll() as $item) {
				?>
                <tr>
                    <td>
                        <?php echo $item['titular']; ?>
                    </td>
                    <td>
                        <?php echo $item['saldo']; ?>
                    </td>
                    <td id="icon">
                        <a class="icon"><img src="add.png" alt="add"></a>
                        <a class="icon"><img src="dell.png" alt="dell"></a>
                        <a class="icon"><img src="view.png" alt="view"></a>
                    </td>
                </tr>
                <?php
			}
		}
		?>
            </table>
        </div>
        <footer>
            <span>Manoel Monteiro Barreto</span></br>
            <span id="direitos">Todos os Direitos Reservados</span>
        </footer>
    </div>

</body>

</html>