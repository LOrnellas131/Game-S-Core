
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
                
                $nome = "Dark Souls";   //MUDA
                $preco = 0.0;           //MUDA
                $idGame = 15;           //MUDA

                $stmt = $pdo->prepare('SELECT autorid FROM games WHERE id = ?');
                $stmt->execute([$idGame]);
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


                if($usuario['autorid'] == $idUser){
                    try {
                        $stmt = $pdo->prepare('UPDATE games SET name = ?, price = ? WHERE id = ?');
                        $stmt->execute([$nome, $preco, $idGame]);
                        echo "Jogo atualizado...";
                    }
                    catch (PDOException $e){
                        echo "Erro ao atualizar jogo: " . $e->getMessage();
                    }
                }
                else{
                    echo "Você não pode atualizar um jogo criado por outro autor!";
                }
            ?>
        </div>
    </body>
</html>