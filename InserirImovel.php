﻿<!DOCTYPE html>
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
		$celular = $_POST["celular"];
		$telefone = $_POST["telefone"];
		$email = $_POST["email"];
		$tipo = $_POST["tipo"];
		$endereco = $_POST["endereco"];
		$areaTerreno = $_POST["areaTerreno"];
		$dormitorios = $_POST["dormitorios"];
		$suites = $_POST["suites"];
		$vagasCobertas = $_POST["vagasCobertas"];
		$vagasDescobertas = $_POST["vagasDescobertas"];
		$observacao = $_POST["observacao"];
		$statusImovel = $_POST["statusImovel"];
		$numero = $_POST["numero"];
		$bairro = $_POST["bairro"];
		$cidade = $_POST["cidade"];
		$banheiros = $_POST["banheiros"];
		$valorImovel = $_POST["valorImovel"];

		if($conexao == false) {
			echo "<h2>Error ao conectar com o banco de dados</h2>";
	} else {
		mysqli_query($conexao, "insert into imoveis values (null, '" . utf8_decode($nome) ."','" . $telefone ."','" . $celular ."','" . $email ."','" . utf8_decode($tipo) ."','" . $endereco ."','" . $areaTerreno ."','" . $dormitorios ."','" . $suites ."','" . $vagasCobertas ."','" . $vagasDescobertas ."','" . $numero  ."','" . utf8_decode($bairro) ."','" . utf8_decode($cidade) ."','" . $banheiros ."','" . $valorImovel ."','" . $statusImovel ."','" . utf8_decode($observacao) ."')");
		echo "Imóvel cadastrado com sucesso"; 
	}
	mysqli_close($conexao)
  	?>
</body>
</html>