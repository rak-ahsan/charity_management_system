<?php namespace App\Models;

use CodeIgniter\Model;

Class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = [
        'fullname',
        'address',
        'email',
        'number',
        'username',
        'password',
        'u_photo',
        'u_role'

    ];

}