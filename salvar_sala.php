<?php
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            if (isset($_POST["nome"]) && isset($_POST["capacidade_maxima"]) && isset($_POST["recursos_disponiveis"]) && isset($_POST["data_criacao"])) {
                $nome = $_POST["nome"];
                $capacidade_maxima = $_POST["capacidade_maxima"];
                $recursos_disponiveis = $_POST["recursos_disponiveis"];
                $data_criacao = $_POST["data_criacao"];

                // Realize as validações necessárias nos dados recebidos, como verificar se estão no formato correto, sanitizar, etc.

                $sql = "INSERT INTO sala (nome, capacidade_maxima, recursos_disponiveis, data_criacao) VALUES ('$nome', '$capacidade_maxima', '$recursos_disponiveis', '$data_criacao')";

                $res = $conn->query($sql);

                if ($res) {
                    // Inserção bem-sucedida
                    echo "Sala cadastrada com sucesso.";
                } else {
                    // Erro na inserção
                    echo "Ocorreu um erro ao cadastrar a sala: " . mysqli_error($conn);
                }
            } else {
                // Campos obrigatórios não foram enviados
                echo "Por favor, preencha todos os campos obrigatórios.";
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
