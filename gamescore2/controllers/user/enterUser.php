            <?php
                session_start();

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    require_once '../../includes/db_connection.php';
                    $pdo = conectarBanco();

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');

                    try {
                        $stmt->execute([$email]);
                        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        echo "Erro no banco de dados: " . $e->getMessage();
                        exit;
                    }

                    if ($usuario && password_verify($senha, $usuario['senha'])) {
                        $_SESSION['id'] = $usuario['id'];
                        header('Location: ../../controllers/game/readGames.php');
                        exit;
                    } else {
                        $_SESSION['erro_login'] = 'Email ou senha inválidos.';
                        header('Location: ../../views/login.php');
                        exit;
                    }
                } else {
                    
                    header('Location: ../../views/login.php');
                    exit;
                }
            ?>