<?php
                require_once '../../includes/conta.php';
                $idUser = conectarConta();
?>
<html>
    <head>
        <title> Gamescore </title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/controllers.css">
    </head>
    <body>
        <div class="container">
            <?php
                require_once '../../includes/db_connection.php';
                $pdo = conectarBanco();

                $idJogo = $_POST['idJogo'];

                $stmt = $pdo->prepare('DELETE FROM users_games WHERE id_game = ? AND id_user = ?');

                try {
                    $stmt->execute([$idJogo, $idUser]);
                    echo "Jogo deletado da sua biblioteca...";
                }
                catch (PDOException $e){
                    echo "Erro ao deletar jogo: " . $e->getMessage();
                }
                    echo '<br><a href="readKeys.php" class="button">Voltar</a>';
            ?>
        </div>
    </body>
</html>