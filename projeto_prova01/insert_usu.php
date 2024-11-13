<?php
include('conexao.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Nome: " . $_POST['Nome'] . "<br>";
    echo "Email: " . $_POST['Email'] . "<br>";
}

if (isset($_POST['submit'])) {
 
    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];

    
    $sql = 'INSERT INTO usuarios (usu_nome, usu_email) VALUES (?, ?)';
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Erro ao preparar a consulta: ' . $conn->error);
    }

    
    $stmt->bind_param("ss", $Nome, $Email);

   
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    
    $stmt->close();
}


$conn->close();
?>
