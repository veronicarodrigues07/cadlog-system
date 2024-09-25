<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController'; // inclui controlador de autenticação
require 'controllers/UserController.php'; // Instancia o controlador de usuario
require 'controllers/DashboardController.php'; // Instancia controlador dashboard
// Cria instância dos controladores para utilizar seus métodos 
$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();
//$dashboardcontroller = new DashboardController();

//coleta a ação da URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action']?? 'login'; //Usa operador de coalescencia nula (??) para definir 'login' se 'action' não estiver presente 

switch ($action){
    case 'login':
        $authController ->login();
        break;
        default:
        $authController ->login();
        break;
        default:
        $authController->login();
        break;
}
?>