    <?php
        $conexao = mysqli_connect("localhost", "root", "", "imobiliaria");

        if($conexao == false) {
            set_error_handler("Error ao conectar com o banco de dados");
        }
    ?>
