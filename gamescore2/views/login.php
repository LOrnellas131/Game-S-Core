<?php
// login.php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
        background-color: rgb(191, 239, 255);
        font-family: Arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        }

        .form-box {
        background: #fff;
        padding: 25px 30px;
        border-radius: 10px;
        background: rgb(252, 189, 16);
        }

        .form-box input {
        display: block;
        width: 90%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #aaa;
        border-radius: 5px;
        }

        .form-box input[type="submit"] {
        background-color: rgb(0, 191, 255);
        color: black;
        border: none;
        cursor: pointer;
        font-weight: bold;
        }

        .form-box a {
        display: block;
        margin-top: 10px;
        text-align: center;
        color: rgb(0, 191, 255);
        text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="form-box">
        <form action="../controllers/user/enterUser.php" method="POST">

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <input type="submit" value="Entrar">
        </form>
        <form action="cadastro.php" method="POST">
        <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
