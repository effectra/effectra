<?php

namespace App\Models;

use Effectra\Core\Auth\AuthModel;
use Effectra\Core\Database\ModelBase;

class User
{
    use ModelBase, AuthModel;

    protected static $table = 'users';

    protected static $fillable = [];
}
