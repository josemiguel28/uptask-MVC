<?php

namespace Controllers\auth;

use Model\ActiveRecord;

class ResetPasswordController extends ActiveRecord
{

    public static function resetPassword(){
        echo 'reset password';

    }

}