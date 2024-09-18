<?php
class Database{
    // Utiliza o padrão Singleton, cujo o objetivo e garantir onde apenas uma unica instancia seja reutilizada sempre que necessário.
    private static $instance = null;

    //  Método público que retorna a conexão com BD
    public static function getConnection(){
        if(!self:: $instance){
            $host = 'localhost';
            $db = 'sistema_usuarios';
            $user = 'root';
            $password = '';
        }
    }
}
?>