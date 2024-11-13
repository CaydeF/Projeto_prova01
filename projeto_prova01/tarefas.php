<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
</head>
<header>
    <div>
        <h1>Gerenciamento de Tarefas</h1>
        <input type="button" value="Cadastro de Usuários">
        <input type="button" value="Cadastro de Tarefas">
        <input type="button" value="Cadastro de Tarefas">
    </div>
    <br>
</header>
<body>

    <h1>Cadastro de Tarefas</h1>

    <form action="insert_tar.php" method="POST">
        <label for="setor">Setor:</label>
        <input type="text" name="setor" id="setor" required>
        <br>

        <label for="prioridade">Prioridade:</label>
        <input type="text" name="prioridade" id="prioridade" required>
        <br>

        <label for="status">Status:</label>
        <input type="text" name="status" id="status" required>
        <br>

        <label for="usu_codigo">Usuário:</label>
        
        
        <br>
        <button type="submit" name="submit">Cadastrar Tarefa</button>
    </form>

</body>
</html>
