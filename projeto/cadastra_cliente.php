<?php
require("conecta.php"); // Verifique se o arquivo 'conecta.php' está corretamente configurado

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$plano = isset($_POST['plano']) ? $_POST['plano'] : '';

$sql = "INSERT INTO dev (nome, sobrenome, email, plano) 
        VALUES ('$nome', '$sobrenome', '$email', '$plano')";

if ($conn->query($sql) === TRUE) {
    // Mensagem de sucesso com HTML estruturado corretamente
    echo "<html><head><title>Sucesso</title></head><body>";
    echo "<div style='text-align: center; margin-top: 50px;'>";
    echo "<h1>Registro inserido com sucesso!</h1>";
    echo "<a href='index.html'><button>Voltar</button></a>";
    echo "</div></body></html>";
} else {
    // Mensagem de erro
    echo "Ocorreu um erro ao inserir o registro: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
