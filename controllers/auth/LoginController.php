<?php

namespace Controllers\auth;

use MVC\Router;

class LoginController{
    public static function login(Router $router){
        if(isPostBack()){

        }

        $router->render('auth/login',
        [
            'titulo' => 'Iniciar Sesión'
        ]);
    }

    public static function logout(){
        if(isPostBack()){

        }
    }

    public static function resetPassword(){
        if(isPostBack()){

        }
    }


}