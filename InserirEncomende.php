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

		$obs = $_POST["obs"];
		$nome = $_POST["nome"];
		$celular = $_POST["celular"];
		$telefone = $_POST["telefone"];
		$email = $_POST["email"];

		if($conexao == false) {
			echo "<h2>Error ao conectar com o banco de dados</h2>";
	} else {
		mysqli_query($conexao, "insert into encomende values (null, '" . utf8_decode($obs) ."','" . utf8_decode($nome) ."','" . $celular ."','" . $telefone ."','" . $email ."')");
		echo "Contato cadastrado com sucesso"; 
	}
	mysqli_close($conexao)
  	?>
</body>
</html>