<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se </title>
</head>
<body>
    <div>
        <h2> Cadstro de usuário</h2>
        <form action="index.php?action = register" method="post">
            <label for="nome"></label>
            <input type="text" name="nome" id= "nome" required>

                <label for="email">Email</label>
            <input type="email" name="" id="" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
        
        <label for="">Perfil:</label>
        <select name="Perfil" id="Perfil"></select>
        <option value="admin">Admin</option>
        <option value="gestor">Gestor</option>
        <option value="colaborador">Colaborador</option>
        <button type="submit">Cadastrar</button>
        </form>
        <a href="">Voltar a o Login</a>
    </div>
</body>
</html>