<?php
require_once '../../includes/conta.php';
$idUser = conectarConta();

require_once '../../includes/db_connection.php';
$pdo = conectarBanco();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../assets/css/homeMatheus.css">
        <title>Loja</title>
    </head>
    <body>
        <header class="header">
            <nav id="menu">
                <ul>
                    <li><a href="../gameKey/readKeys.php">Biblioteca</li>
                    <li><a href="../game/readGames.php">Loja</a></li>
                    <li><a href="#footer"><img src="assets/img/logo.png"></a></li>
                    <li><a href="../../views/jogo.php">Publicar</a></li>
                    <li><a href="../user/readUser.php">Usuários</a></li>
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
                        $stmt->execute([$idUser]);
                        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<li><a href="../../views/perfil.php">'.$usuario['name'].'</a></li>'
                    ?>
                </ul>
            </nav>
        </header>
        <main>
                <h2 class="texto">Recomendações</h2>
                <div class="area">
                <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([1]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                </form>
                <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([2]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                </form>
                <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([3]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                </form>
                <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([4]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                </form>
                </div>
                <h2 class="texto">Descontos</h2>
                <div class="area">
                <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([5]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>Breve descrição</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                </form>
                <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([6]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                    </form>
                    <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([7]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                    </form>
                    <form action="../gameKey/createKey.php" method="post">
                    <?php
                        $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                        $stmt->execute([8]);
                        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo '<div class="caixa">';
                        echo '<h3>'.$jogo['name'].'</h3>';
                        echo '<img src="../../assets/img/'.$jogo['img'].'">';
                        echo '<p>'.$jogo['description'].'</p>';
                        echo '<h6>R$ '.$jogo['price'].'</h6>';
                        echo '<input type="hidden" name="idJogo" value="'.$jogo['id'].'">';
                        echo '<button class="comprar" type="submit">Comprar</button>';
                        echo '</div>';
                    ?>
                    </form>
                </div>
                <div class="area">
                    <?php

                        require_once '../../includes/db_connection.php';
                        $pdo = conectarBanco();

                        $stmt = $pdo->prepare('SELECT * FROM games');

                        try{
                            $stmt -> execute();
                            $jogos = $stmt->fetchAll(PDO::FETCH_COLUMN);
                        }
                        catch (PDOException $e){
                            echo "Erro ao listar jogos: " . $e->getMessage();
                        }
                        
                        if ($jogos) {
                            foreach ($jogos as $idJogo) {
                                $stmt = $pdo->prepare('SELECT * FROM games WHERE id = ?');
                                $stmt -> execute([$idJogo]);
                                $jogo = $stmt -> fetch(PDO::FETCH_ASSOC);

                    
                                echo '<form action="../gameKey/createKey.php" method="post">';
                                echo '<div class="caixa">';
                                echo '    <h3>' . $jogo['name'] . '</h3>';
                                echo '    <img src="../../assets/img/' . $jogo['img'] .'">';
                                echo '    <p>' . $jogo['description'] . '</p>';
                                echo '    <h6>R$ ' . $jogo['price'] . '</h6>';
                                echo '    <input type="hidden" name="idJogo" value="' . $jogo['id'] . '">';
                                echo '    <button class="comprar" type="submit">Comprar</button>';
                                echo '</div>';
                                echo '</form>';
                            }
                        } else {
                            echo "Nenhum jogo encontrado na biblioteca.";
                        }
                    ?>
            </div>
        </main>
    </body>
</html>
