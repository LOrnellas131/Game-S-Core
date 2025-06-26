
<html>
    <head>
        <title> Gamescore </title>
        <link rel="stylesheet" href="../../assets/css/controllers.css">
    </head>
    <body>
        <div class="container">
            <?php
                require_once '../../includes/db_connection.php';
                $pdo = conectarBanco();
                
                $nome  = $_POST['nome'];
                $email = $_POST['email'];
                $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

                $stmt = $pdo->prepare('INSERT INTO users (name, email, senha, saldo) VALUES (?, ?, ?, ?)');

                if ($nome != null && $email != null && $senha != null) {
                    try {
                        $stmt->execute([$nome, $email, $senha, 0.0]);
                        echo "Usuário inserido com sucesso!";
                    }
                    catch (PDOException $e){
                        echo "Erro ao inserir usuário: " . $e->getMessage();
                    }
                }
                else{
                    echo "Dados não inseridos corretamente!";
                }
                echo '<br><a href="../../views/login.php" class="button">Voltar</a>';
            ?>
        </div>
    </body>
</html>