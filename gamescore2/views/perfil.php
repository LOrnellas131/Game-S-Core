<?php
  require_once '../includes/conta.php';
  $idUser = conectarConta();
  require_once '../includes/db_connection.php';
  $pdo = conectarBanco();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Meu Perfil</title>
  <link rel="stylesheet" href="../assets/css/controllers.css">
</head>
    <body>
        <header>
            <nav id="menu">
                <ul>
                    <li><a href="../gameKey/readKeys.php">Biblioteca</li>
                    <li><a href="../game/readGames.php">Loja</a></li>
                    <li><a href="#footer"><img src="assets/img/logo.png"></a></li>
                    <li><a href="publicar.html">Publicar</a></li>
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
                        $stmt->execute([$idUser]);
                        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<li><a href="../../views/perfil.php">'.$usuario['name'].'</a></li>'
                    ?>
                </ul>
            </nav>
        </header>
    <?php

        $idUser = $_SESSION['id'];

        $pdo = conectarBanco();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$idUser]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <h2>Área do Usuário</h2>
        
        <form action="../controllers/user/updateUser.php" method="POST">
            
            <label for="nome">ID:</label>
            <input type="text" id="id" name="id" value="<?= ($usuario['id']) ?>" readonly>
            <br>
            <label for="nome">Email:</label>
            <input type="text" id="email" name="email" value="<?= ($usuario['email']) ?>" readonly>
            <br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= ($usuario['name']) ?>" required>
            <br>
            <label for="saldo">Saldo:</label>
            <input type="text" id="saldo" name="saldo" value="<?= ($usuario['saldo']) ?>" required>

            <div class="botoes">
              <input type="submit" value="Salvar">
            </div>
        </form>
          <div class="botoes">
            <a href="../controllers/user/exitUser.php" class="button">Log out</a>
            <a href="../controllers/user/deleteUser.php" class="button">Deletar conta</a>
          </div>
    </div>
    </body>
</html>
