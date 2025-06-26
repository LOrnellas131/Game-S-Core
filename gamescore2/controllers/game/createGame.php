
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
                $preco = $_POST['preco'];
                $descricao = $_POST['descricao'];
                $imagem = $_POST['imagem'];
                
                $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
                $stmt->execute([$idUser]);
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                $stmt = $pdo->prepare('INSERT INTO games (name, price, autor, autorid, description, img) VALUES (?, ?, ?, ?, ?, ?)');

                try {
                    $stmt->execute([$nome, $preco, $usuario['name'], $usuario['id'], $descricao, $imagem]);
                    echo "Jogo postado com sucesso!";
                }
                catch (PDOException $e){
                    echo "Erro ao criar jogo: " . $e->getMessage();
                }
                    echo '<br><a href="../game/readGames.php" class="button">Voltar</a>';
            ?>
        </div>
    </body>
</html>