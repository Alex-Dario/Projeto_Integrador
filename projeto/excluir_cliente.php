<?php
require("conecta.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_cliente = $_POST['id_cliente'];

    
    if (empty($id_cliente)) {
        die("ID do cliente não foi fornecido.");
    }

    
    $sql = "DELETE FROM dev WHERE id_cliente = $id_cliente";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Cliente excluído com sucesso!</h1>";
        echo "<a href='index.html'><button>Voltar</button></a></center>";
    } else {
        echo "Erro ao excluir cliente: " . $conn->error;
    }
} else {
    echo "Método inválido para acessar esta página.";
}

$conn->close();
?>
