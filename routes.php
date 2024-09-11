<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController'; // inclui controlador de autenticação
require 'controllers/UserController.php'; // Instancia o controlador de usuario
require 'controllers/DashboardController.php'; // Instancia controlador dashboard
// Cria instância dos controladores para utilizar seus métodos 
$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();
?>