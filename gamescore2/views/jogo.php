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
        <h2>Publicando seu jogo</h2>
        
        <form action="../controllers/game/createGame.php" method="POST">
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="" required>
            <br>
            <label for="price">Preço:</label>
            <input type="text" id="preco" name="preco" value="" required>
            <br>
            <label for="description">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="" required>
            <br>
            <label for="imagem">Imagem:</label>
            <input type="text" id="imagem" name="imagem" value="" required>

            <div class="botoes">
              <input type="submit" value="Salvar">
            </div>
        </form>
          <div class="botoes">
            <a href="../controllers/game/readGames.php" class="button">Voltar</a>
          </div>
    </div>
    </body>
</html>
