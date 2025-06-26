<?php
    function conectarBanco(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gamescorebd', 'root', '');

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
?>