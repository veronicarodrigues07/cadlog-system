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
  //A conexão usa  dribe Mysql (myslq::) e as informações de host e BD 
            self :: $instance =  new PDO("myslq:host=$host; dbname=$db", $user, $password); 

            //Define o modo de ero para execeções,facilitando a depuração e tratamento dos erros
            self:: $instance->setAttribute(PDO:: ATTR_ERRMODE, DPO::ERRMODE_EXCEPTION);
            


        }
        return self:: $instance;
    }
}
?>