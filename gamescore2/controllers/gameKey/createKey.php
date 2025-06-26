
<html>
    <head>
        <title> Gamescore </title>
        <link rel="stylesheet" href="../../assets/css/controllers.css">
    </head>
    <body>
        <div class="container">
        <?php
            require_once '../../includes/conta.php';
            $idUser = conectarConta();

            require_once '../../includes/db_connection.php';
            $pdo = conectarBanco();

            $idGame = $_POST['idJogo'];

            try {
                $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                $stmt->execute([$idGame]);
                $jogo = $stmt->fetch(PDO::FETCH_ASSOC);


                $stmt = $pdo->prepare('SELECT saldo FROM users WHERE id = ?');
                $stmt->execute([$idUser]);
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($usuario['saldo'] < $jogo['price']) {
                    throw new Exception("Saldo insuficiente para comprar o jogo.");
                }

                $stmt = $pdo->prepare('UPDATE users SET saldo = saldo - ? WHERE id = ?');
                $stmt->execute([$jogo['price'], $idUser]);

                $stmt = $pdo->prepare('INSERT INTO users_games (id_user, id_game) VALUES (?, ?)');
                $stmt->execute([$idUser, $idGame]);

                echo $jogo['name']." comprado com sucesso!";
            } catch (Exception $e) {
                echo "Erro ao comprar ".$jogo['name'].": " . $e->getMessage();
            }
                echo '<br><a href="../game/readGames.php" class="button">Voltar</a>';
            ?>

        </div>
    </body>
</html>