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

            $user= User:: findbyEmail($email);

            if($user && password_verify($senha, $user['senha'])){
                sesssion_start();
                $_SESSION['usuario_id']= $user['id'];
                $_SESSION['perfil'] = $user['perfil'];

                header('Location: index.php?action=dashboard');
            }else{
             include 'views/register.php';
            
            }
        }
    }
}

?>