
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

                $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');

                try {
                    $stmt->execute([$idUser]);
                    echo "Usuário eliminado...";
                }
                catch (PDOException $e){
                    echo "Erro ao eliminar usuário: " . $e->getMessage();
                }
                echo '<br><a href="../../views/login.php" class="button">Voltar</a>';
            ?>
        </div>
    </body>
</html>