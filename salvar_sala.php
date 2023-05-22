<?php
    switch($_REQUEST["acao"]) {
        case "cadastrar_salas":
            $nome = $_POST["nome"];
            $capacidade_maxima = $_POST["capacidade_maxima"];
            $recursos_disponiveis = $_POST["recursos_disponiveis"];
            $data_criacao = $_POST["data_criacao"];

            $sql = "INSERT INTO salas (nome, capacidade_maxima, recursos_disponiveis, data_criacao) VALUES ('{$nome}', '{$capacidade_maxima}', '{$recursos_disponiveis}', '{$data_criacao}')";

            $res = $conn->query($sql);
            
            if($res == true) {
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=salas';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=salas';</script>";
            }

        break;

        case "editar_sala":
            // code
        break;

        case "excluir_sala":
            // code
        break;
    }
?>