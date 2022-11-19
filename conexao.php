    <?php
        $conexao = mysqli_connect("localhost", "root", "", "imobiliaria");

        if($conexao == false) {
            set_error_handler("Error ao conectar com o banco de dados");
        }
    ?>

<?php

    $tipo = "";

    $dormitorios = 0;

    $tipo = $_POST["tipo"];

    if (isset($_POST["dormitorios"]) {
        $dormitorios = $_POST["dormitorios"];
    }

    $banheiros = $_POST["banheiros"];

    echo $tipo;
    $search = "SELECT * FROM IASPJDIOASJDIOSAJ WHERE tipo = " . $tipo . " AND  dormitorios >= "  . $dormitorios;

    $pesquisa = $conexo->query($search);

    while ($item = $pesquisa->fetch_array()) {

        f

    $query;
?>
