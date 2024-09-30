<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilização básica */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        main {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        section {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-align: center;
            display: block;
            margin-top: 10px;
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="post">
            <section>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </section>
            <section>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="#">Cadastre-se</a>
    </main>
</body>
</html>
