<?php

namespace Controllers\auth;

use Model\ActiveRecord;
use MVC\Router;

class CreateAccountController extends ActiveRecord
{
    public static function crearCuenta(Router $router){
        if(isPostBack()){

        }

        $router->render('auth/create-account',
        [
            'titulo' => 'Crear Cuenta'
        ]);
    }

}