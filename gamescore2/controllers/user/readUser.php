
            <?php
                require_once '../../includes/conta.php';
                $idUser = conectarConta();

                require_once '../../includes/db_connection.php';
                $pdo = conectarBanco();
                ?>
<html>
    <head>
        <title> Gamescore </title>
        <link rel="stylesheet" href="../../assets/css/controllers.css">
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
        <div class="container">
            <?php

                $stmt = $pdo->prepare('SELECT * FROM users');
                
                try{
                    $stmt -> execute();
                    $quantidade = $stmt->fetchAll(PDO::FETCH_COLUMN);
                }

                catch (PDOException $e){
                    echo "Erro ao listar usuários: " . $e->getMessage();
                }

                if ($quantidade) {
                    echo '<table border="1" cellpadding="10" cellspacing="0">';
                    echo '<thead> <tr> <th>ID</th> <th>Nome</th> </tr> </thead>';
                    echo '<tbody>';
                    
                    foreach ($quantidade as $idUser) {
                        $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
                        $stmt -> execute([$idUser]);
                        $user = $stmt -> fetch(PDO::FETCH_ASSOC);

                        echo '<tr>';
                        echo '<td>' . ($user['id']) . '</td>';
                        echo '<td>' . ($user['name']) . '</td>';
                        echo '</tr>';
                    }

                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo "Nenhum usuário encontrado.";
                }
                    echo '<br><a href="../game/readGames.php" class="button">Voltar</a>';
            ?>
        </div>
    </body>
</html>