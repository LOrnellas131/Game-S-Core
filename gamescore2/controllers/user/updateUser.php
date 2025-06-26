
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
                
                $nome = $_POST['nome'];
                $saldo = $_POST['saldo'];

                try {
                    $stmt = $pdo->prepare('UPDATE users SET name = ?, saldo = ? WHERE id = ?');
                    $stmt->execute([$nome, $saldo, $idUser]);
                    echo "Novo nome: $nome<br>";
                    
                    $stmt = $pdo->prepare('UPDATE games SET autor = ? WHERE autorid = ?');
                    $stmt->execute([$nome, $idUser]);
                    echo "Saldo atual: $saldo";
                }
                catch (PDOException $e){
                    echo "Erro ao atualizar usuário: " . $e->getMessage();
                }
                echo '<br><a href="../game/readGames.php" class="button">Voltar</a>';
            ?>
        </div>
    </body>
</html>