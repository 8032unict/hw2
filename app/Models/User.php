<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    public $timestamps =  false;
    protected $table = 'users';

    protected $fillable = [
        'name', 'surname', 'username', 'email', 'password'
    ];
}
?>