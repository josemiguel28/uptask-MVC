<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

$router = new Router();

//log in
$router->get('/', [\Controllers\auth\LoginController::class,'login']);
$router->post('/', [\Controllers\auth\LoginController::class,'login']);
$router->get('/logout', [\Controllers\auth\LoginController::class,'logout']);

//crear cuenta
$router->get('/crear-cuenta', [\Controllers\auth\CreateAccountController::class,'crearCuenta']);
$router->get('/crear-cuenta', [\Controllers\auth\CreateAccountController::class,'crearCuenta']);

//reset password
$router->get('/reset-password', [\Controllers\auth\ResetPasswordController::class,'resetPassword']);
$router->post('/reset-password', [\Controllers\auth\ResetPasswordController::class,'resetPassword']);

//colocar la nueva contraseña
$router->get('/restablecer-contrasena', [\Controllers\auth\ResetPasswordController::class,'nuevaContrasena']);
$router->post('/restablecer-contrasena', [\Controllers\auth\ResetPasswordController::class,'nuevaContrasena']);

//mensaje de confirmacion de la cuenta
$router->get('/mensaje', [\Controllers\auth\LoginController::class,'mensaje']);
$router->get('/confirmar-cuenta', [\Controllers\auth\LoginController::class,'confirmarCuenta']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();