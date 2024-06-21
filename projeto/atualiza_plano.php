<?php
require("conecta.php"); // Verifique se o arquivo 'conecta.php' está corretamente configurado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $id_cliente = $_POST['id_cliente'];
    $plano = $_POST['plano'];

    // Atualizar o plano do cliente no banco de dados
    // Substitua 'id' pelo nome correto da coluna que armazena o identificador do cliente
    $sql = "UPDATE dev SET plano = '$plano' WHERE id_cliente = $id_cliente";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Plano atualizado com sucesso!</h1>";
        echo "<a href='index.html'><button>Voltar</button></a></center>";
    } else {
        echo "Erro ao atualizar o plano: " . $conn->error;
    }
} else {
    echo "Método inválido para acessar esta página.";
}

$conn->close(); // Fechar a conexão
?>
