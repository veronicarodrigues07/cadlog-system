<?php
    class UserController
    {
        public function tegister(){
            if($_SERVER['REQUEST_METHOD'== 'POST']){
                $data = [
                    'nome'=> $_POST['nome'],
                    'email '=> $_POST['email'];
                    'senha' => passoword_hans($_POST ['senha'], PASSWORD_DEFAULT)
                    'perfil' => $_POST ['perfil']
    
                ];
                User::create($data);
                header('Location: index.php');
            }else{
                include'view/register.php;
            
            
        }
    }
?>