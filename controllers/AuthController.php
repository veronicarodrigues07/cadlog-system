<?php

require_once 'model/user.php';
//classe responsável pela autenticação do usuário 
class AuthController
{
    //Função responsável pelo processo de login
    public function login(){

        // Verifica se a requisão http é do tipo POST, ou seja, se o formulário foi enviado 
        if($_SERVER['RIQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        }
    }
}

?>