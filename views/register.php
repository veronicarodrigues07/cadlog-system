<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        /* Estilização básica */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #a1c4fd); /* Gradiente rosa e azul */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        div {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff9a9e; /* Título rosa */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        select:focus {
            border-color: #a1c4fd; /* Foco azul */
            outline: none;
        }

        button {
            background-color: #ff9a9e; /* Botão rosa */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff6f91; /* Hover rosa mais escuro */
        }

        a {
            text-align: center;
            display: block;
            margin-top: 10px;
            color: #a1c4fd; /* Link azul */
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="Perfil">Perfil:</label>
            <select name="Perfil" id="Perfil" required>
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.html">Voltar ao Login</a>
    </div>
</body>
</html>
