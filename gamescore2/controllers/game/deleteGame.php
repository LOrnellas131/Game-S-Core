
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
                
                $idGame = 12;    //MUDA

                $stmt = $pdo->prepare('SELECT autorid FROM games WHERE id = ?');
                $stmt->execute([$idGame]);
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                if($usuario['autorid'] == $idUser){
                    try {
                        $stmt = $pdo->prepare('DELETE FROM games WHERE id = ?');
                        $stmt->execute([$idGame]);
                        echo "Jogo eliminado...";
                    }
                    catch (PDOException $e){
                        echo "Erro ao eliminar jogo: " . $e->getMessage();
                    }
                }
                else{
                    echo "Você não pode deletar um jogo criado por outro autor!";
                }
            ?>
        </div>
    </body>
</html>