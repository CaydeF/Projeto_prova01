<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
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
    <h1>Cadastro de Usuários</h1>
    <form action="insert_usu.php" method="POST">
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" id="Nome" required>
        <br>
        <label for="Email">Email:</label>
        <input type="email" name="Email" id="Email" required> 
        <br>
        <button type="submit" name="submit">Cadastrar</button>
    </form>
</body>
</html>
