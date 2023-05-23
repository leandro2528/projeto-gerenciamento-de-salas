<?php
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
                $nome = $_POST["nome"];
                $capacidade_maxima = $_POST["capacidade_maxima"];
                $recursos_disponiveis = $_POST["recursos_disponiveis"];
                $data_criacao = $_POST["data_criacao"];

                $sql = "INSERT INTO sala (nome, capacidade_maxima, recursos_disponiveis, data_criacao) VALUES ('$nome', '$capacidade_maxima', '$recursos_disponiveis', '$data_criacao')";

                $res = $conn->query($sql);

                if($res == true) {
                    print "<script>alert('Sala cadastrada com sucesso!');</script>";
                    print "<script>location.href='?page=salas';</script>";
                } else {
                    print "<script>alert('Não fpo possível cadasr uma nova sala.');</script>";
                    print "<script>location.href='?page=salas';</script>"; 
                }
            break;

        case "editar":
            // code
            break;

        case "excluir":
            // code
            break;
    }
?>
