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
        static public function find($id){
            $conn = Database::getConecction();
            $stmt = $conn ->prepare("SELECT * FROM usuario WHERE id = :id");
            $stmt ->execute(['id'=>$id]);
            return $stmt -> fetch(PDO::FETCH_ASSOC);
        }


        //FUNÇÃO PARA CRIAR UM NOVO USUÁRIO NO BANCO DE DADOS


        static public function create($data){
            $conn = Database::getConnection ();
            $stmt = $conn ->prepare("INSERT INTRO usuarios(nome, email, senha , perfil) VALUES (:nome, :email, :senha, :perfil )");
            $stmt ->execute($data);
            
        }
    } 
?>