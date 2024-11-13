<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $setor = $_POST['setor'];
    $prioridade = $_POST['prioridade'];
    $status = $_POST['status'];
    $usu_codigo = $_POST['usu_codigo'];

    if (empty($usu_codigo)) {
        echo "Por favor, selecione um usuário.";
        exit;
    }

   
    $sql = "INSERT INTO tarefas (tar_setor, tar_prioridade, tar_status, usu_codigo) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Erro ao preparar a consulta: ' . $conn->error);
    }

    $stmt->bind_param('ssss', $setor, $prioridade, $status, $usu_codigo);

    if ($stmt->execute()) {
        echo "Tarefa cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar tarefa: " . $stmt->error;
    }

   
    $stmt->close();
}

$conn->close();
?>
