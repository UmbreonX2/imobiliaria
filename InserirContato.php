<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
		include('conexao.php');

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];
		$endereco = $_POST["endereco"];

		if($conexao == false) {
			echo "<h2>Error ao conectar com o banco de dados</h2>";
	} else {
		mysqli_query($conexao, "insert into contato values (null, '" . utf8_decode($nome) ."','" . $email ."','" . $telefone ."','" . $endereco ."')");
		echo "Contato cadastrado com sucesso"; 
	}
	mysqli_close($conexao)
  	?>
</body>
</html>