<?php

    //inclui um arquivo de conexão que contem a classe Database para gerenciar a conexão com o BD
    require_once  'models/database.php';

    class User
    {
        //Função para encontrar um usuário pelo email
        public static function findByEmail($email){
            //conecta a conexão com o BD
            $conn = Database::getConnection();

            $stmt = $conn ->prepare("SELECT * FROM usuarios WHERE email = :email");

            $stmt -> execute(['email' => $email]);

            return $stmt->fetch(PDO::FETCH_ASSOC);



        }

    } 
?>